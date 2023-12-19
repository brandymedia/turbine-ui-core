<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;
use Illuminate\View\ComponentAttributeBag;

class Input extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public ?string $full = null,
        public ?string $hollow = null,
        public ?string $label = null,
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
            'input',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'divide' => $divide,
                'full' => $full,
                'hollow' => $hollow,
                'label' => $label,
                'prefix' => $prefix,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
                'suffix' => $suffix,
                'type' => $type,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.input');
    }
}