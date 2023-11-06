<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Dropdown extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $target = null,
        public ?string $theme = null,
        public ?string $variant = null,

    ) {
        $classes = $turbine->classBuilder(
            'dropdown',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
                'target' => $target,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.dropdown');
    }
}