<?php
namespace App\Shopify;

use App\Shopify\Interfaces\ApiClientInterface;
use Shopify\Clients\Graphql;
use Shopify\Clients\Rest;

class ApiClient implements ApiClientInterface
{
    protected string $shop;
    protected string $access_token;
    public function __construct()
    {
        $this->shop = config('shopify.SHOPIFY_DOMAIN');
        $this->access_token = config('shopify.SHOPIFY_ACCESS_TOKEN');
    }

    protected function getShop()
    {
        return $this->shop;
    }

    protected function getAccessToken()
    {
        return $this->access_token;
    }

    public function rest()
    {
        $rest = new Rest($this->shop, $this->access_token);
        return $rest;
    }

    public function graphql()
    {
        return new Graphql($this->shop, $this->access_token);
    }
}
