<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Combine extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public ?bool $combine = true,
        public ?string $rounded = null,
        public ?string $theme = null,
        public ?string $variant = null,

    ) {
        $classes = $turbine->classBuilder(
            'combine',
            $variant,
            [
                'border' => $border,
                'divide' => $divide,
                'rounded' => $rounded,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.combine');
    }
}