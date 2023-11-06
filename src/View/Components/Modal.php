<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;

class Modal extends Component
{
    public function __construct(
        public ?string $target = null,
    ) {
        $this->target = $target;
    }

    public function render()
    {
        return view('turbine-ui::components.modal');
    }
}