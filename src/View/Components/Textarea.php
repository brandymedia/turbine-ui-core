<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Textarea extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public ?string $hollow = null,
        public ?string $label = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $footerClasses = null,
        public ?string $headerClasses = null,
        public ?string $labelClasses = null,
        public ?string $textareaClasses = null,
        public ?string $textareaWrapperClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'textarea',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'hollow' => $hollow,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
                'label' => $label,
                'divide' => $divide,
            ],
            $theme,
        );

        $this->classes = $classes;

        $childrenClasses = $turbine->childrenClasses(
            'textarea',
            [
                'footer',
                'header',
                'label',
                'textarea',
                'textareaWrapper',
            ],
            $size,
        );

        foreach ($childrenClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.textarea');
    }
}