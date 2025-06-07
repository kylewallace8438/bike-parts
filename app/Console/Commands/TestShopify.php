<?php

namespace App\Console\Commands;

use App\Shopify\ApiClient;
use App\Shopify\Interfaces\ApiClientInterface;
use Exception;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TestShopify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-shopify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count = DB::table('hub_shopify_sessions')->count();
        $bar = $this->output->createProgressBar($count);
        $bar->start();

        $apiClient = new ApiClient();
        DB::table('hub_shopify_sessions')->chunkById(10, function ($sessions) use ($apiClient, $bar) {
            foreach ($sessions as $session) {
                try {
                    $apiClient->setShop($session->shop);
                    $apiClient->setAccessToken($session->access_token);
                    $response = $apiClient->rest()->get('/shop.json');
                    $data = $response->getDecodedBody();
                    if (Arr::get($data, 'errors')) {
                        DB::table('hub_shopify_sessions')->where('id', $session->id)->delete();
                    }
                    $bar->advance();
                } catch (Exception $e) {

                }
            }
        });

    }
}
