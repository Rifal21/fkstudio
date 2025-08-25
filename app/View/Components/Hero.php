<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hero extends Component
{
    public string $sideText, $title,  $image;

    /**
     * Create a new component instance.
     */
    public function __construct($sideText, $title, $image)
    {
        $this->sideText = $sideText;
        $this->title = $title;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
