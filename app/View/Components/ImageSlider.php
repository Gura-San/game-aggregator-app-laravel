<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImageSlider extends Component
{
    public $screenshots;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($screenshots)
    {
        $this->screenshots = $screenshots;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.image-slider');
    }
}
