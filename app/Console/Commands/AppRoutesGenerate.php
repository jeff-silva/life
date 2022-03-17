<?php

// composer require nette/php-generator
// https://github.com/nette/php-generator

namespace App\Console\Commands;

class AppRoutesGenerate extends AppBase
{

    protected $signature = 'app:routes-generate';
    protected $description = 'Gera arquivo de rotas';

    public function handle() {
        
        $routes = [];

        $routes['auth-login'] = [
            'route' => 'auth/login',
            'call' => '\App\Http\Controllers\AuthController@login',
            'method' => 'post',
        ];

        $routes['auth-logout'] = [
            'route' => 'auth/logout',
            'call' => '\App\Http\Controllers\AuthController@logout',
            'method' => 'post',
        ];

        $routes['auth-refresh'] = [
            'route' => 'auth/refresh',
            'call' => '\App\Http\Controllers\AuthController@refresh',
            'method' => 'post',
        ];

        $routes['auth-me'] = [
            'route' => 'auth/me',
            'call' => '\App\Http\Controllers\AuthController@me',
            'method' => 'post',
        ];

        $routes['auth-register'] = [
            'route' => 'auth/register',
            'call' => '\App\Http\Controllers\AuthController@register',
            'method' => 'post',
        ];

        $routes['auth-password-reset-start'] = [
            'route' => 'auth/password-reset-start',
            'call' => '\App\Http\Controllers\AuthController@passwordResetStart',
            'method' => 'post',
        ];

        $routes['auth-password-reset-start'] = [
            'route' => 'auth/password-reset-start',
            'call' => '\App\Http\Controllers\AuthController@passwordResetChange',
            'method' => 'post',
        ];

        $routes['app-test'] = [
            'route' => 'app/test',
            'call' => '\App\Http\Controllers\AppController@test',
            'method' => 'get',
        ];

        $routes['app-endpoints'] = [
            'route' => 'app/endpoints',
            'call' => '\App\Http\Controllers\AppController@endpoints',
            'method' => 'get',
        ];

        $routes['app-search'] = [
            'route' => 'app/search',
            'call' => '\App\Http\Controllers\AppController@search',
            'method' => 'get',
        ];

        $routes['app-mail-test'] = [
            'route' => 'app/mail-test',
            'call' => '\App\Http\Controllers\AppController@mail-test',
            'method' => 'get',
        ];

        $routes['app-settings-get-all'] = [
            'route' => 'settings',
            'call' => '\App\Http\Controllers\SettingsController@getAll',
            'method' => 'get',
        ];

        $routes['app-settings-save-all'] = [
            'route' => 'settings',
            'call' => '\App\Http\Controllers\SettingsController@saveAll',
            'method' => 'post',
        ];

        $routes['files-view'] = [
            'route' => 'files/view/{slug}.{ext}',
            'call' => '\App\Http\Controllers\FilesController@view',
            'method' => 'get',
        ];

        foreach($this->getTables() as $table) {
            if ($this->ignoredTable($table->Name)) continue;
            $slug = $this->tableSlug($table->Name=='users'? 'user': $table->Name);
            $model_name = (string) \Str::of($slug)->studly() .'Controller';

            $routes["{$slug}-search"] = [
                'route' => "{$slug}/search",
                'call' => "\App\Http\Controllers\\{$model_name}@search",
                'method' => 'get',
            ];

            $routes["{$slug}-find"] = [
                'method' => 'get',
                'route' => "{$slug}/find/{id}",
                'call' => "\App\Http\Controllers\\{$model_name}@find"
            ];

            $routes["{$slug}-save"] = [
                'method' => 'post',
                'route' => "{$slug}/save",
                'call' => "\App\Http\Controllers\\{$model_name}@save"
            ];

            $routes["{$slug}-valid"] = [
                'method' => 'post',
                'route' => "{$slug}/valid",
                'call' => "\App\Http\Controllers\\{$model_name}@valid"
            ];
            
            $routes["{$slug}-delete"] = [
                'method' => 'post',
                'route' => "{$slug}/delete",
                'call' => "\App\Http\Controllers\\{$model_name}@delete"
            ];

            $routes["{$slug}-restore"] = [
                'method' => 'post',
                'route' => "{$slug}/restore",
                'call' => "\App\Http\Controllers\\{$model_name}@restore"
            ];

            $routes["{$slug}-clone"] = [
                'method' => 'post',
                'route' => "{$slug}/clone/{id}",
                'call' => "\App\Http\Controllers\\{$model_name}@clone"
            ];

            $routes["{$slug}-import"] = [
                'method' => 'post',
                'route' => "{$slug}/import",
                'call' => "\App\Http\Controllers\\{$model_name}@import"
            ];

            $routes["{$slug}-export"] = [
                'method' => 'get',
                'route' => "{$slug}/export",
                'call' => "\App\Http\Controllers\\{$model_name}@export"
            ];
        }

        $content = '<?php return '. $this->varExport($routes) .';';
        file_put_contents(base_path('routes/api_generated.php'), $content);
    }
}
