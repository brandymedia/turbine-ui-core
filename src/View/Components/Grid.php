<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Grid extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $classes = null,
        public ?string $cols = null,
        public ?string $gap = null,
        public ?string $rows = null,
        public ?string $theme = null,
        public ?string $variant = null,
    ) {
        $classes = $turbine->classBuilder(
            'grid',
            $variant,
            [
                'cols' => $cols,
                'gap' => $gap,
                'rows' => $rows,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.grid');
    }
}