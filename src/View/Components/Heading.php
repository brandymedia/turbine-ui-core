<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Heading extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $balance = null,
        public ?string $classes = null,
        public ?string $level = null,
        public ?string $pretty = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,

    ) {
        $classes = $turbine->classBuilder(
            'heading',
            $variant,
            [
                'balance' => $balance,
                'level' => $level,
                'pretty' => $pretty,
                'size' => $size,
            ],
            $theme,
        );

        $this->classes = $classes;
    }

    public function render()
    {
        return view('turbine-ui::components.heading');
    }
}