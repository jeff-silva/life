<?php

// composer require nette/php-generator
// https://github.com/nette/php-generator

namespace App\Console\Commands;

class AppPermissions extends AppBase
{

    protected $signature = 'app:permissions';
    protected $description = 'Gera arquivo de configuração de permissões baseado em tables';

    public function handle() {

        $config_permissions = config('permissions', []);
        $config_permissions = array_merge([
            'keys' => [],
        ], $config_permissions);

        $config_permissions = $this->addPermissionKey($config_permissions, 'admin-settings', 'Configurações principais');
        $config_permissions = $this->addPermissionKey($config_permissions, 'admin-settings-email', 'Configurações de e-mail');
        $config_permissions = $this->addPermissionKey($config_permissions, 'admin-settings-files', 'Configurações de arquivos');

        $content = implode("\n", [
            '<?php',
            '',
            '/*',
            ' * Como gerar permissões:',
            ' * As chaves são geradas como array associativa chave => descrição dentro de keys.',
            ' * ',
            ' * Permissões de banco de dados sempre usam como prefixo o nome da tabela, por exemplo:',
            ' * \'products:save\' => \'Salvar dados de produtos\',',
            ' * \'products:delete\' => \'Deletar dados de produtos\',',
            ' * ',
            ' * Os sufixos :save e :delete são verificados automaticamente',
            ' * pela model antes de salvar/deletar um dado.',
            ' * ',
            ' * As permissões para visualizar uma página são o name da mesma,',
            ' * que geralmente seguem o nome do arquivo como no exemplo abaixo:',
            ' * /pages/admin/products/index.vue => admin-products',
            ' * /pages/admin/products/_id.vue => admin-products-id',
            ' */',
            '',
            ('return '. $this->varExport($config_permissions) .';'),
        ]);

        file_put_contents(config_path('permissions.php'), $content);
    }

    public function addPermissionKey($config_permissions, $key, $name)
    {
        if (! isset($config_permissions['keys'][ $key ])) {
            $config_permissions['keys'][ $key ] = $name;
        }

        return $config_permissions;
    }
}
