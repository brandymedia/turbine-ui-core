<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Switcher extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $label = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,
    ) {
        $classes = $turbine->classBuilder(
            'switcher',
            $variant,
            [
                'size' => $size,
                'border' => $border,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'label' => $label,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.switcher');
    }
}