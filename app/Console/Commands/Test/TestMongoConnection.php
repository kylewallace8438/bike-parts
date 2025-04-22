<?php

namespace App\Console\Commands\Test;

use App\Models\TestMongo;
use Illuminate\Console\Command;

class TestMongoConnection extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-mongo-connection';

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
        $tests = TestMongo::all();
        // $test = TestMongo::create([
        //     'name' => 'Test Mongo Connection',
        //     'description' => 'This is a test to check the MongoDB connection.',
        // ]);
        dd($tests);
    }
}
