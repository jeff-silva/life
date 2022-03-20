<?php

// composer require nette/php-generator
// https://github.com/nette/php-generator

namespace App\Console\Commands;

class AppInstall extends AppBase
{

    protected $signature = 'app:install';
    protected $description = 'Instalação da aplicação';

    public function handle() {
        // $this->call('db:wipe');

        if (! \Schema::hasTable('migrations')) {
            $this->call('migrate');
            // $this->call('db:seed');
            $this->call('app:seed');
            return;
        }

        $this->comment('System already intalled. Run db:wipe to clear tables');
    }
}
