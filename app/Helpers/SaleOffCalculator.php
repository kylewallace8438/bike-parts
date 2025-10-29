<?php
if (!function_exists('sale_off_percentage')) {
    function sale_off_percentage($old_price, $new_price)
    {
        if ($old_price <= 0) {
            return 0;
        }
        return round((($old_price - $new_price) / $old_price) * 100) . '%';
    }
}
