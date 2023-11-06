<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class ButtonGroup extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public ?bool $full = null,
        public ?string $hollow = null,
        public ?string $hover = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $theme = null,
        public ?string $variant = null,

    ) {
        $classes = $turbine->classBuilder(
            'button-group',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'divide' => $divide,
                'full' => $full,
                'hollow' => $hollow,
                'hover' => $hover,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.button-group');
    }
}