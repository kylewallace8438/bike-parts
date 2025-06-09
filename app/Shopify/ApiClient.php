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

    public function getShop()
    {
        return $this->shop;
    }

    public function getAccessToken()
    {
        return $this->access_token;
    }

    public function setShop($shop)
    {
        $this->shop = $shop;
    }

    public function setAccessToken($access_token)
    {
        $this->access_token = $access_token;
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
