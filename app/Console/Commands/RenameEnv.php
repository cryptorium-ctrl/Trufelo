<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RenameEnv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rename:env';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command Renames .env to .env';

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
        rename(".env.example", ".env" );
    }
}
