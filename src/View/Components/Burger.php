<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Collection;
use Brandymedia\TurbineUiCore\Turbine;

class Burger extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?Collection $classes = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $barClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'burger',
            $variant,
            [

            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'burger',
            [
                'bar',
            ],
            null,
        );

        foreach ($elementClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.burger');
    }
}
