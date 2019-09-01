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
    protected $description = 'Install example data for Trufelo Application';

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
        if ($this->confirm('This will delete all your current data and install the example data. Do you wish to proceed?')) {
            File::deleteDirectory(public_path('storage/products/dummy'));

            $this->callSilent('storage:link');
            $copySuccess = File::copyDirectory(public_path('assets/img'), public_path('storage/products/dummy'));
            if ($copySuccess) {
                $this->info('Succesfully copied!');
                $this->info('Dummy data installed!');


                $this->call('db:create');

                $this->call('key:generate');

                $this->call('voyager:install');

                $this->call('voyager:admin', [
                 '--create' =>true,
                    ]);
                $this->call('migrate:fresh', [
                    '--seed' => true,
                ]);

                $this->info('You can enter into Voyager CMS if you click on the link http://localhost/Trufelo/public/admin');

            } else {
                $this->info('');
            }
        } else {
            $this->info('Abort.');
        }
    }
}
