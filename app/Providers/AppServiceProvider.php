<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
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

        view()->composer('*', function ($view) {
            $message = app()->getLocale() == 'vi'
                ? 'Miễn phí vận chuyển cho đơn hàng trên 5 triệu đồng!'
                : 'Free shipping for orders over 5 million VND!';
            $view->with('message', $message);
        });
    }
}
