<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class TrufeloInstall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trufelo:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install dummy data for Trufelo Application';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if ($this->confirm('This will delete all your current data and install the dummy data. Do you proceed?')) {
            File::deleteDirectory(public_path('storage/products/dummy'));
        }


        $this->callSilent('storage:link');
        $copySuccess = File::copyDirectory(public_path('assets/img'), public_path('storage/products/dummy'));
        if ($copySuccess) {
            $this->info('Succesfully copied!');
            $this->info('Dummy data installed!');

            $this->call('migrate:fresh', [
                '--seed' => true,
            ]);

            $this->call('db:seed', [
                '--class' => 'VoyagerDatabaseSeeder',
            ]);

            $this->call('db:seed', [
                '--seed' => 'VoyagerDummyDatabaseSeeder',
            ]);

            $this->info('Dummy data installed!');
        }
    }
}
