<?php

/*
 * Como gerar permissões:
 * As chaves são geradas como array associativa chave => descrição dentro de keys.
 * 
 * Permissões de banco de dados sempre usam como prefixo o nome da tabela, por exemplo:
 * 'products:save' => 'Salvar dados de produtos',
 * 'products:delete' => 'Deletar dados de produtos',
 * 
 * Os sufixos :save e :delete são verificados automaticamente
 * pela model antes de salvar/deletar um dado.
 * 
 * As permissões para visualizar uma página são o name da mesma,
 * que geralmente seguem o nome do arquivo como no exemplo abaixo:
 * /pages/admin/products/index.vue => admin-products
 * /pages/admin/products/_id.vue => admin-products-id
 */

return [
  'keys' => [
    'admin-settings' => 'Configurações principais',
    'admin-settings-email' => 'Configurações de e-mail',
    'admin-settings-files' => 'Configurações de arquivos',
    'files:save' => 'Salvar arquivos',
    'files:delete' => 'Deletar arquivos',
    'admin-files' => 'Listar arquivos',
    'admin-files-id' => 'Editar arquivos',
  ],
];