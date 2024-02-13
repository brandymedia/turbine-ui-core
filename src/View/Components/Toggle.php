<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Toggle extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $label = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $inputClasses = null,
        public ?string $labelClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'toggle',
            $variant,
            [
                'size' => $size,
                'border' => $border,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'label' => $label,
            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'toggle',
            [
                'input',
                'label',
            ],
            $size,
        );

        foreach ($elementClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.toggle');
    }
}