<?php
namespace App\Shopify\Interfaces;

interface ApiClientInterface
{
    public function rest();
    public function graphql();
}
