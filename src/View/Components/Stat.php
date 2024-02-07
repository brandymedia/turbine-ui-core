<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Stat extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public ?string $hollow = null,
        public ?string $icon = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $descriptionClasses = null,
        public ?string $iconClasses = null,
        public ?string $titleClasses = null,
        public ?string $valueClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'stat',
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
            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'stat',
            [
                'description',
                'icon',
                'title',
                'value',
            ],
            $size,
        );

        foreach ($elementClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.stat');
    }
}