<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Avatar extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $alt = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $img = null,
        public ?string $label = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $labelClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'avatar',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'avatar',
            [
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
        return view('turbine-ui::components.avatar');
    }
}