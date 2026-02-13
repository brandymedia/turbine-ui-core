<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Button extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $active = null,
        public ?string $animate = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public bool|string|null $full = null,
        public ?string $gradient = null,
        public ?string $hollow = null,
        public ?string $hover = null,
        public ?string $href = null,
        public bool|string|null $link = null,
        public ?string $prefix = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $suffix = null,
        public ?string $theme = null,
        public ?string $type = null,
        public ?string $variant = null,
        public ?string $contentClasses = null,
        public ?string $prefixClasses = null,
        public ?string $suffixClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'button',
            $variant,
            [
                'accent' => $accent,
                'active' => $active,
                'animate' => $animate,
                'border' => $border,
                'divide' => $divide,
                'full' => $full,
                'gradient' => $gradient,
                'hollow' => $hollow,
                'hover' => $hover,
                'link' => $link,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'button',
            [
                'content',
                'prefix',
                'suffix',
            ],
            $size,
        );

        if (!$divide) {
            if (isset($prefix)) {
                $elementClasses['contentClasses'] .= ' pl-0';
                $elementClasses['prefixClasses'] .= ' pr-0';
            }

            if (isset($suffix)) {
                $elementClasses['contentClasses'] .= ' pr-0';
                $elementClasses['suffixClasses'] .= ' pl-0';
            }
        } else {
            $this->classes .= ' gap-0';
        }

        foreach ($elementClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.button');
    }
}
