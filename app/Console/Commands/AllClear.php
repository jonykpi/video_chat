<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class AllClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'clear:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        Artisan::call('cache:clear');
        echo "Cache facade value cleared"."\n";
        Artisan::call('optimize');
        echo "Cache facade value cleared"."\n";
        Artisan::call('route:cache');
        echo "Routes cached"."\n";
        Artisan::call('route:clear');
        echo "Route cache cleared"."\n";
        Artisan::call('view:clear');
        echo "View cache cleared"."\n";
        Artisan::call('config:cache');
        echo "Clear Config cleared"."\n";
    }
}
