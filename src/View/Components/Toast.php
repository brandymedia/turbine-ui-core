<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Toast extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?bool $dismissible = null,
        public ?bool $full = null,
        public ?string $hollow = null,
        public ?string $icon = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $title = null,
        public ?string $variant = null,
        public ?string $contentClasses = null,
        public ?string $dismissButtonClasses = null,
        public ?string $dismissIconClasses = null,
        public ?string $titleClasses = null,
        public ?string $toastClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'toast',
            $variant,
            [
                'size' => $size,
                'accent' => $accent,
                'border' => $border,
                'hollow' => $hollow,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'toast',
            [
                'content',
                'dismissButton',
                'dismissIcon',
                'title',
                'toast',
            ],
            $size,
        );

        foreach ($elementClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.toast');
    }
}