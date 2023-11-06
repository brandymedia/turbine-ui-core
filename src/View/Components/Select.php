<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Select extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public ?string $hollow = null,
        public ?string $label = null,
        public ?string $prefix = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $suffix = null,
        public ?string $theme = null,
        public ?string $variant = null,
    ) {
        $classes = $turbine->classBuilder(
            'select',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'divide' => $divide,
                'hollow' => $hollow,
                'label' => $label,
                'prefix' => $prefix,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
                'suffix' => $suffix,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.select');
    }
}