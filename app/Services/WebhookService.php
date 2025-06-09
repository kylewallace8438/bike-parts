<?php
namespace App\Services;

use App\Shopify\Interfaces\ApiClientInterface;
use Illuminate\Support\Facades\Log;
use Shopify\Webhooks\Registry;
use Shopify\Webhooks\Topics;

class WebhookService
{
    public function __construct(
        protected ApiClientInterface $apiClient
    )
    {

    }

    public function handleRegisterProductUpdate()
    {
        $response = Registry::register('/api/webhooks/products-update', Topics::PRODUCTS_UPDATE, $this->apiClient->getShop(), $this->apiClient->getAccessToken());
        if ($response->isSuccess()) {
            Log::debug("Registered PRODUCTS_UPDATE webhook for shop {$this->apiClient->getShop()}");
        } else {
            Log::error(
                "Failed to register APP_UNINSTALLED webhook for shop {$this->apiClient->getShop()} with response body: " .
                print_r($response->getBody(), true)
            );
        }
    }
}

