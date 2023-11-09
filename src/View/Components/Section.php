<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Section extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $classes = null,
        public ?string $full = null,
        public ?string $gradient = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,
    ) {
        $classes = $turbine->classBuilder(
            'section',
            $variant,
            [
                'full' => $full,
                'gradient' => $gradient,
                'size' => $size,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.section');
    }
}