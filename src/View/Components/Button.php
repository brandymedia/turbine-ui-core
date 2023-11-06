<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Button extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $animate = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public ?string $full = null,
        public ?string $gradient = null,
        public ?string $hollow = null,
        public ?string $hover = null,
        public ?string $href = null,
        public ?string $link = null,
        public ?string $prefix = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $suffix = null,
        public ?string $theme = null,
        public ?string $type = null,
        public ?string $variant = null,
    ) {
        $classes = $turbine->classBuilder(
            'button',
            $variant,
            [
                'accent' => $accent,
                'animate' => $animate,
                'border' => $border,
                'divide' => $divide,
                'full' => $full,
                'gradient' => $gradient,
                'hollow' => $hollow,
                'hover' => $hover,
                'link' => $link,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.button');
    }
}