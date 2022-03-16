<?php

// composer require nette/php-generator
// https://github.com/nette/php-generator

namespace App\Console\Commands;

class AppParentSync extends AppBase
{

    protected $signature = 'app:parent-sync';
    protected $description = 'Instalação da aplicação';

    public function handle() {
        $app_parent = env('APP_PARENT');
        if (!$app_parent) return $this->comment('APP_PARENT não definido');

        $files = [];
        $files[] = base_path('app/Exceptions/Handler.php');
        $files[] = base_path('app/Http/Controllers/Controller.php');
        $files[] = base_path('app/Providers/AppServiceProvider.php');
        $files[] = base_path('app/Console/Commands/AppBase.php');
        $files[] = base_path('app/Console/Commands/AppControllersGenerate.php');
        $files[] = base_path('app/Console/Commands/AppDbSchema.php');
        $files[] = base_path('app/Console/Commands/AppDeploy.php');
        $files[] = base_path('app/Console/Commands/AppInstall.php');
        $files[] = base_path('app/Console/Commands/AppModelsGenerate.php');
        $files[] = base_path('app/Console/Commands/AppDeploy.php');
        $files[] = base_path('app/Console/Commands/AppInstall.php');
        $files[] = base_path('app/Console/Commands/AppModelsGenerate.php');
        $files[] = base_path('app/Console/Commands/AppNuxtViewsGenerate.php');
        $files[] = base_path('app/Console/Commands/AppParentSync.php');
        $files[] = base_path('app/Console/Commands/AppRoutesGenerate.php');
        $files[] = base_path('app/Console/Commands/AppSync.php');
        $files[] = base_path('app/Console/Commands/AppTableGenerate.php');
        $files[] = base_path('app/Models/Files.php');
        $files[] = base_path('app/Models/Settings.php');
        $files[] = base_path('app/Providers/AppServiceProvider.php');
        $files[] = base_path('app/Traits/Mail.php');
        $files[] = base_path('app/Traits/Model.php');
        $files = array_merge($files, glob(base_path('app/Mail/*.php')));
        $files = array_merge($files, glob(base_path('database/migrations/*_create_users_table.php')));
        $files = array_merge($files, glob(base_path('database/migrations/*_create_password_resets_table.php')));
        $files = array_merge($files, glob(base_path('database/migrations/*_create_failed_jobs_table.php')));
        $files = array_merge($files, glob(base_path('database/migrations/*_create_personal_access_tokens_table.php')));
        $files[] = base_path('database/migrations/2022_01_01_000000_create_files_table.php');
        $files[] = base_path('database/migrations/2022_01_01_000000_create_pages_table.php');
        $files[] = base_path('database/migrations/2022_01_01_000000_create_settings_table.php');
        $files[] = base_path('client/app.js');
        $files[] = base_path('client/app.css');
        $files = array_merge($files, glob(base_path('client/components/ui/**/*.vue')));
        $files = array_merge($files, glob(base_path('client/components/ui/*.vue')));
        $files = array_merge($files, glob(base_path('client/layouts/default/*.vue')));
        $files = array_merge($files, glob(base_path('client/pages/admin/files/*.vue')));
        $files[] = base_path('client/pages/admin/settings/email.vue');
        $files[] = base_path('client/pages/admin/settings/files.vue');
        $files[] = base_path('client/pages/admin/settings/index.vue');
        $files = array_merge($files, glob(base_path('client/pages/admin/dev/*.vue')));
        $files = array_merge($files, glob(base_path('client/pages/admin/dev/**/*.vue')));
        $files = array_map('realpath', $files);

        foreach($files as $from_file) {
            $here = $this->fileInfo($from_file);
            $there = $this->fileInfo(str_replace(base_path(), $app_parent, $from_file));
            
            // If contents are different
            if ($here->content != $there->content) {
                
                // subir
                if ($here->modified > $there->modified) {
                    $this->comment("⇈ {$there->path}");
                    if (!file_exists($there->dirname)) mkdir($there->dirname, 0777, true);
                    file_put_contents($there->path, $here->content);
                }

                // baixar
                else if ($here->modified < $there->modified) {
                    $this->comment("⇊ {$there->path}");
                    if (!file_exists($here->dirname)) mkdir($here->dirname, 0777, true);
                    file_put_contents($here->path, $there->content);
                }
            }
        }
    }

    public function fileInfo($path) {
        $path = preg_replace('/\\\+/', DIRECTORY_SEPARATOR, $path);
        $file = (object) array_merge(['path' => $path], pathinfo($path));
        $file->file_exists = file_exists($path);
        $file->folder_exists = file_exists($file->dirname);
        $file->is_dir = is_dir($path);
        $file->modified = $file->file_exists? \File::lastModified($path): 0;
        $file->content = (!$file->is_dir AND $file->file_exists)? file_get_contents($file->path): null;
        return $file;
    }
}
