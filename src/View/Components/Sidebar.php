<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Sidebar extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?bool $dismissible = null,
        public ?string $hollow = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $theme = null,
        public ?string $variant = null,
    ) {
        $classes = $turbine->classBuilder(
            'sidebar',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'hollow' => $hollow,
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
        return view('turbine-ui::components.sidebar');
    }
}