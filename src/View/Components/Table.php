<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Table extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public ?string $hollow = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $striped = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $tbodyClasses = null,
        public ?string $tfootClasses = null,
        public ?string $theadClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'table',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'divide' => $divide,
                'hollow' => $hollow,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
                'striped' => $striped,
            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'table',
            [
                'tbody',
                'tfoot',
                'thead',
            ],
            $size,
        );

        foreach ($elementClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.table');
    }
}