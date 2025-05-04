<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CtaDesign extends Component
{
    /**
     * Create a new component instance.
     */
    public string $productimg;
    public function __construct($productImg )
    {
        $this->productimg = $productImg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cta-design');
    }
}
