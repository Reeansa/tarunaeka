<?php

namespace App\View\Components\Administrator;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Action extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $navigate, public string $linkType)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('administrator.components.action');
    }
}
