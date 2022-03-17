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
        
        foreach($this->getTables() as $table) {
            if ($this->ignoredTable($table->Name)) continue;
            $table_kebab = (string) \Str::of($table->Name)->studly()->kebab();

            $config_permissions = $this->addPermissionKey($config_permissions, "admin-{$table_kebab}", "Acessar lista de {$table->Name}");
            $config_permissions = $this->addPermissionKey($config_permissions, "admin-{$table_kebab}-id", "Acessar edição de {$table->Name}");

            $config_permissions = $this->addPermissionKey($config_permissions, "{$table->Name}-save", "Salvar dados de {$table->Name}");
            $config_permissions = $this->addPermissionKey($config_permissions, "{$table->Name}-delete", "Deletar dados de {$table->Name}");
        }

        $content = '<?php return '. $this->varExport($config_permissions) .';';
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
