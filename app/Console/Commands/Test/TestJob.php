<?php

namespace App\Console\Commands\Test;

use Illuminate\Console\Command;
use App\Jobs\Test\TestJob as TestJobJob;

class TestJob extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-job';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        TestJobJob::dispatch('test');
    }
}
