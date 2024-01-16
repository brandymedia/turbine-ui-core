<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Label extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $hollow = null,
        public ?string $icon = null,
        public ?string $prefix = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $suffix = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $contentClasses = null,
        public ?string $iconClasses = null,
        public ?string $prefixClasses = null,
        public ?string $suffixClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'label',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'hollow' => $hollow,
                'icon' => $icon,
                'prefix' => $prefix,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
                'suffix' => $suffix,
            ],
            $theme,
        );

        $this->classes = $classes;

        $childrenClasses = $turbine->childrenClasses(
            'label',
            [
                'content',
                'icon',
                'prefix',
                'suffix',
            ],
            $size,
        );

        foreach ($childrenClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.label');
    }
}