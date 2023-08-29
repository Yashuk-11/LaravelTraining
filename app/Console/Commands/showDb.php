<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class showDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'showDb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show me current database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Current database is: '.DB::connection()->getDatabaseName());
    }
}
