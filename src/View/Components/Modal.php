<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Modal extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $classes = null,
        public ?bool $dismissible = null,
        public ?string $size = null,
        public ?string $target = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $backdropClasses = null,
        public ?string $contentClasses = null,
        public ?string $dismissButtonClasses = null,
        public ?string $dismissIconClasses = null,
    ) {
        $this->target = $target;

        $classes = $turbine->classBuilder(
            'modal',
            $variant,
            [
                'size' => $size,
            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'modal',
            [
                'backdrop',
                'content',
                'dismissButton',
                'dismissIcon',
            ],
            $size,
        );

        foreach ($elementClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.modal');
    }
}