<?php

namespace App\View\Components\common;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SingleProductWrap extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $product
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.common.single-product-wrap');
    }
}
