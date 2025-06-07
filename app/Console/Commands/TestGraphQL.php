<?php

namespace App\Console\Commands;

use App\Shopify\Interfaces\ApiClientInterface;
use Illuminate\Console\Command;

class TestGraphQL extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-graph-q-l';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct(
        protected ApiClientInterface $apiClient
    )
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = $this->apiClient->graphql()->query([
            'query' => '
                query GetProductWithMetafieldsAndMetaobjects($id: ID!, $namespace: String!) {
                    product(id: $id) {
                        id
                        title
                        description
                        vendor
                        productType
                        createdAt
                        metafields(first: 1, namespace: $namespace) {
                            edges {
                                node {
                                id
                                namespace
                                key
                                value
                                type
                                reference {
                                    ... on Metaobject {
                                        id
                                        fields {
                                            key
                                            value
                                        }
                                        type
                                        handle
                                        displayName
                                        updatedAt
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            ',
            'variables' => [
                'id' => "gid://shopify/Product/8876217663724",
                'namespace' => 'custom'
            ]
        ]);
        dd($response->getDecodedBody());
    }
}
