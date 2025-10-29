<?php

namespace App\Providers;

use App\Shopify\ApiClient;
use App\Shopify\Interfaces\ApiClientInterface;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Shopify\ApiVersion;
use Shopify\Auth\FileSessionStorage;
use Shopify\Context;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ApiClientInterface::class, function ($app) {
            return new ApiClient();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('money', function ($amount) {
            return "<?php echo is_numeric($amount) ? number_format($amount, 0, ',', '.') . ' ₫' : '0 ₫'; ?>";
        });
        Blade::directive('sale_off', function ($expression) {
            return "<?php echo sale_off_percentage(...[$expression]); ?>";
        });
        Context::initialize(
            apiKey: config('shopify.SHOPIFY_API_KEY'),
            apiSecretKey: config('shopify.SHOPIFY_API_SECRET'),
            scopes: config('shopify.SHOPIFY_APP_SCOPES'),
            hostName: config('shopify.SHOPIFY_APP_HOST_NAME'),
            sessionStorage: new FileSessionStorage('/tmp/php_sessions'),
            apiVersion: ApiVersion::LATEST,
            isEmbeddedApp: false,
            isPrivateApp: false,
        );
    }
}
