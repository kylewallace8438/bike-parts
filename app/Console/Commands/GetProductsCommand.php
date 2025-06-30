<?php

namespace App\Console\Commands;

use App\Models\Product;
use App\Shopify\Interfaces\ApiClientInterface;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class GetProductsCommand extends Command
{
    protected ApiClientInterface $apiClient;
    public function __construct(
        ApiClientInterface $apiClient
    )
    {
        $this->apiClient = $apiClient;
        parent::__construct();
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-products-command';

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
        $limit = config('shopify.limit_pagination');
        $hasNextPage = true;
        $edgesQuery = '
            edges {
                cursor
                node {
                    id
                    title
                }
            }
            pageInfo {
                hasNextPage
                hasPreviousPage
                startCursor
                endCursor
            }
        ';
        $query = 'query GetProducts($limit: Int!, $reverse: Boolean, $after: String) {
            products(reverse: $reverse, first: $limit, after: $after) {
                ' . $edgesQuery . '
            }
        }';

        // $queryData['variables']['cursor'] = $cursor ?? null;
        $cursor = null;
        while ($hasNextPage) {
            $queryData = [
                'query' => $query,
                'variables' => [
                    'limit' => $limit,
                    'reverse' => true,
                    'after' => $cursor
                ]
            ];
            $response = $this->apiClient->graphql()->query($queryData);
            $pageInfo = Arr::get($response->getDecodedBody(), 'data.products.pageInfo');
            $cursor = Arr::get($pageInfo, 'endCursor');
            $hasNextPage = Arr::get($pageInfo, 'hasNextPage');
            $products = Arr::get($response->getDecodedBody(), 'data.products.edges');
            foreach ($products as $product) {
                Product::updateOrCreate([
                    'shopify_id' => basename($product['node']['id'])
                ], [
                    'shopify_id' => basename($product['node']['id']),
                    'slug' => Str::slug($product['node']['title'])
                ]);
            }
        }
    }
}
