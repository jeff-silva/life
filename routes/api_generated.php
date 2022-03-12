<?php return [
  'files-search' => [
    'route' => 'files/search',
    'call' => '\\App\\Http\\Controllers\\FilesController@search',
    'method' => 'get',
  ],
  'files-find' => [
    'method' => 'get',
    'route' => 'files/find/{id}',
    'call' => '\\App\\Http\\Controllers\\FilesController@find',
  ],
  'files-save' => [
    'method' => 'post',
    'route' => 'files/save',
    'call' => '\\App\\Http\\Controllers\\FilesController@save',
  ],
  'files-valid' => [
    'method' => 'post',
    'route' => 'files/valid',
    'call' => '\\App\\Http\\Controllers\\FilesController@valid',
  ],
  'files-delete' => [
    'method' => 'post',
    'route' => 'files/delete',
    'call' => '\\App\\Http\\Controllers\\FilesController@delete',
  ],
  'files-restore' => [
    'method' => 'post',
    'route' => 'files/restore',
    'call' => '\\App\\Http\\Controllers\\FilesController@restore',
  ],
  'files-clone' => [
    'method' => 'get',
    'route' => 'files/clone/{id}',
    'call' => '\\App\\Http\\Controllers\\FilesController@clone',
  ],
  'files-import' => [
    'method' => 'post',
    'route' => 'files/import',
    'call' => '\\App\\Http\\Controllers\\FilesController@import',
  ],
  'files-export' => [
    'method' => 'get',
    'route' => 'files/export',
    'call' => '\\App\\Http\\Controllers\\FilesController@export',
  ],
  'life-persons-search' => [
    'route' => 'life-persons/search',
    'call' => '\\App\\Http\\Controllers\\LifePersonsController@search',
    'method' => 'get',
  ],
  'life-persons-find' => [
    'method' => 'get',
    'route' => 'life-persons/find/{id}',
    'call' => '\\App\\Http\\Controllers\\LifePersonsController@find',
  ],
  'life-persons-save' => [
    'method' => 'post',
    'route' => 'life-persons/save',
    'call' => '\\App\\Http\\Controllers\\LifePersonsController@save',
  ],
  'life-persons-valid' => [
    'method' => 'post',
    'route' => 'life-persons/valid',
    'call' => '\\App\\Http\\Controllers\\LifePersonsController@valid',
  ],
  'life-persons-delete' => [
    'method' => 'post',
    'route' => 'life-persons/delete',
    'call' => '\\App\\Http\\Controllers\\LifePersonsController@delete',
  ],
  'life-persons-restore' => [
    'method' => 'post',
    'route' => 'life-persons/restore',
    'call' => '\\App\\Http\\Controllers\\LifePersonsController@restore',
  ],
  'life-persons-clone' => [
    'method' => 'get',
    'route' => 'life-persons/clone/{id}',
    'call' => '\\App\\Http\\Controllers\\LifePersonsController@clone',
  ],
  'life-persons-import' => [
    'method' => 'post',
    'route' => 'life-persons/import',
    'call' => '\\App\\Http\\Controllers\\LifePersonsController@import',
  ],
  'life-persons-export' => [
    'method' => 'get',
    'route' => 'life-persons/export',
    'call' => '\\App\\Http\\Controllers\\LifePersonsController@export',
  ],
  'life-persons-interactions-search' => [
    'route' => 'life-persons-interactions/search',
    'call' => '\\App\\Http\\Controllers\\LifePersonsInteractionsController@search',
    'method' => 'get',
  ],
  'life-persons-interactions-find' => [
    'method' => 'get',
    'route' => 'life-persons-interactions/find/{id}',
    'call' => '\\App\\Http\\Controllers\\LifePersonsInteractionsController@find',
  ],
  'life-persons-interactions-save' => [
    'method' => 'post',
    'route' => 'life-persons-interactions/save',
    'call' => '\\App\\Http\\Controllers\\LifePersonsInteractionsController@save',
  ],
  'life-persons-interactions-valid' => [
    'method' => 'post',
    'route' => 'life-persons-interactions/valid',
    'call' => '\\App\\Http\\Controllers\\LifePersonsInteractionsController@valid',
  ],
  'life-persons-interactions-delete' => [
    'method' => 'post',
    'route' => 'life-persons-interactions/delete',
    'call' => '\\App\\Http\\Controllers\\LifePersonsInteractionsController@delete',
  ],
  'life-persons-interactions-restore' => [
    'method' => 'post',
    'route' => 'life-persons-interactions/restore',
    'call' => '\\App\\Http\\Controllers\\LifePersonsInteractionsController@restore',
  ],
  'life-persons-interactions-clone' => [
    'method' => 'get',
    'route' => 'life-persons-interactions/clone/{id}',
    'call' => '\\App\\Http\\Controllers\\LifePersonsInteractionsController@clone',
  ],
  'life-persons-interactions-import' => [
    'method' => 'post',
    'route' => 'life-persons-interactions/import',
    'call' => '\\App\\Http\\Controllers\\LifePersonsInteractionsController@import',
  ],
  'life-persons-interactions-export' => [
    'method' => 'get',
    'route' => 'life-persons-interactions/export',
    'call' => '\\App\\Http\\Controllers\\LifePersonsInteractionsController@export',
  ],
  'life-worlds-search' => [
    'route' => 'life-worlds/search',
    'call' => '\\App\\Http\\Controllers\\LifeWorldsController@search',
    'method' => 'get',
  ],
  'life-worlds-find' => [
    'method' => 'get',
    'route' => 'life-worlds/find/{id}',
    'call' => '\\App\\Http\\Controllers\\LifeWorldsController@find',
  ],
  'life-worlds-save' => [
    'method' => 'post',
    'route' => 'life-worlds/save',
    'call' => '\\App\\Http\\Controllers\\LifeWorldsController@save',
  ],
  'life-worlds-valid' => [
    'method' => 'post',
    'route' => 'life-worlds/valid',
    'call' => '\\App\\Http\\Controllers\\LifeWorldsController@valid',
  ],
  'life-worlds-delete' => [
    'method' => 'post',
    'route' => 'life-worlds/delete',
    'call' => '\\App\\Http\\Controllers\\LifeWorldsController@delete',
  ],
  'life-worlds-restore' => [
    'method' => 'post',
    'route' => 'life-worlds/restore',
    'call' => '\\App\\Http\\Controllers\\LifeWorldsController@restore',
  ],
  'life-worlds-clone' => [
    'method' => 'get',
    'route' => 'life-worlds/clone/{id}',
    'call' => '\\App\\Http\\Controllers\\LifeWorldsController@clone',
  ],
  'life-worlds-import' => [
    'method' => 'post',
    'route' => 'life-worlds/import',
    'call' => '\\App\\Http\\Controllers\\LifeWorldsController@import',
  ],
  'life-worlds-export' => [
    'method' => 'get',
    'route' => 'life-worlds/export',
    'call' => '\\App\\Http\\Controllers\\LifeWorldsController@export',
  ],
  'pages-search' => [
    'route' => 'pages/search',
    'call' => '\\App\\Http\\Controllers\\PagesController@search',
    'method' => 'get',
  ],
  'pages-find' => [
    'method' => 'get',
    'route' => 'pages/find/{id}',
    'call' => '\\App\\Http\\Controllers\\PagesController@find',
  ],
  'pages-save' => [
    'method' => 'post',
    'route' => 'pages/save',
    'call' => '\\App\\Http\\Controllers\\PagesController@save',
  ],
  'pages-valid' => [
    'method' => 'post',
    'route' => 'pages/valid',
    'call' => '\\App\\Http\\Controllers\\PagesController@valid',
  ],
  'pages-delete' => [
    'method' => 'post',
    'route' => 'pages/delete',
    'call' => '\\App\\Http\\Controllers\\PagesController@delete',
  ],
  'pages-restore' => [
    'method' => 'post',
    'route' => 'pages/restore',
    'call' => '\\App\\Http\\Controllers\\PagesController@restore',
  ],
  'pages-clone' => [
    'method' => 'get',
    'route' => 'pages/clone/{id}',
    'call' => '\\App\\Http\\Controllers\\PagesController@clone',
  ],
  'pages-import' => [
    'method' => 'post',
    'route' => 'pages/import',
    'call' => '\\App\\Http\\Controllers\\PagesController@import',
  ],
  'pages-export' => [
    'method' => 'get',
    'route' => 'pages/export',
    'call' => '\\App\\Http\\Controllers\\PagesController@export',
  ],
  'settings-search' => [
    'route' => 'settings/search',
    'call' => '\\App\\Http\\Controllers\\SettingsController@search',
    'method' => 'get',
  ],
  'settings-find' => [
    'method' => 'get',
    'route' => 'settings/find/{id}',
    'call' => '\\App\\Http\\Controllers\\SettingsController@find',
  ],
  'settings-save' => [
    'method' => 'post',
    'route' => 'settings/save',
    'call' => '\\App\\Http\\Controllers\\SettingsController@save',
  ],
  'settings-valid' => [
    'method' => 'post',
    'route' => 'settings/valid',
    'call' => '\\App\\Http\\Controllers\\SettingsController@valid',
  ],
  'settings-delete' => [
    'method' => 'post',
    'route' => 'settings/delete',
    'call' => '\\App\\Http\\Controllers\\SettingsController@delete',
  ],
  'settings-restore' => [
    'method' => 'post',
    'route' => 'settings/restore',
    'call' => '\\App\\Http\\Controllers\\SettingsController@restore',
  ],
  'settings-clone' => [
    'method' => 'get',
    'route' => 'settings/clone/{id}',
    'call' => '\\App\\Http\\Controllers\\SettingsController@clone',
  ],
  'settings-import' => [
    'method' => 'post',
    'route' => 'settings/import',
    'call' => '\\App\\Http\\Controllers\\SettingsController@import',
  ],
  'settings-export' => [
    'method' => 'get',
    'route' => 'settings/export',
    'call' => '\\App\\Http\\Controllers\\SettingsController@export',
  ],
  'user-search' => [
    'route' => 'user/search',
    'call' => '\\App\\Http\\Controllers\\UserController@search',
    'method' => 'get',
  ],
  'user-find' => [
    'method' => 'get',
    'route' => 'user/find/{id}',
    'call' => '\\App\\Http\\Controllers\\UserController@find',
  ],
  'user-save' => [
    'method' => 'post',
    'route' => 'user/save',
    'call' => '\\App\\Http\\Controllers\\UserController@save',
  ],
  'user-valid' => [
    'method' => 'post',
    'route' => 'user/valid',
    'call' => '\\App\\Http\\Controllers\\UserController@valid',
  ],
  'user-delete' => [
    'method' => 'post',
    'route' => 'user/delete',
    'call' => '\\App\\Http\\Controllers\\UserController@delete',
  ],
  'user-restore' => [
    'method' => 'post',
    'route' => 'user/restore',
    'call' => '\\App\\Http\\Controllers\\UserController@restore',
  ],
  'user-clone' => [
    'method' => 'get',
    'route' => 'user/clone/{id}',
    'call' => '\\App\\Http\\Controllers\\UserController@clone',
  ],
  'user-import' => [
    'method' => 'post',
    'route' => 'user/import',
    'call' => '\\App\\Http\\Controllers\\UserController@import',
  ],
  'user-export' => [
    'method' => 'get',
    'route' => 'user/export',
    'call' => '\\App\\Http\\Controllers\\UserController@export',
  ],
];