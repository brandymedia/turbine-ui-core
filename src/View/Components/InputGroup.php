<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class InputGroup extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $cols = null,
        public ?string $gap = null,
        public ?string $gradient = null,
        public ?string $hollow = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $rows = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,

    ) {
        $classes = $turbine->classBuilder(
            'input-group',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'cols' => $cols,
                'gap' => $gap,
                'gradient' => $gradient,
                'hollow' => $hollow,
                'ring' => $ring,
                'rounded' => $rounded,
                'rows' => $rows,
                'shadow' => $shadow,
                'size' => $size,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.input-group');
    }
}