<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Progress extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $gradient = null,
        public ?string $label = null,
        public ?string $percentage = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $barClasses = null,
        public ?string $labelClasses = null,
        public ?string $percentageClasses = null,
        public ?string $progressClasses = null,
        public ?string $progressWrapperClasses = null,
        public ?string $textWrapperClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'progress',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'gradient' => $gradient,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
            ],
            $theme,
        );

        $this->classes = $classes;

        $childrenClasses = $turbine->childrenClasses(
            'progress',
            [
                'bar',
                'label',
                'percentage',
                'progress',
                'progressWrapper',
                'textWrapper',
            ],
            $size,
        );

        foreach ($childrenClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.progress');
    }
}