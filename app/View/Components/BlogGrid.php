<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogGrid extends Component
{
    /**
     * Create a new component instance.
     */
    public $blogs;
    public $page;
    public function __construct($blogs,$page = null)
    {
        $this->page = $page;
        $this->blogs = $blogs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-grid');
    }
}
