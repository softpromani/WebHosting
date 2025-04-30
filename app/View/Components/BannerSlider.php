<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BannerSlider extends Component
{
    /**
     * Create a new component instance.
     */
    public $banners;
    public function __construct(array $banners)
    {
        $this->banners = $banners;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-slider');
    }
}
