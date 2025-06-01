<?php
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Faq extends Component
{
    /**
     * Create a new component instance.
     */
    public string $img;
    public $faqs;
    public function __construct($faqs, $img = null)
    {
        $this->img  = $img ?? 'home/assets/img/faqimage.png';
        $this->faqs = $faqs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.faq');
    }
}
