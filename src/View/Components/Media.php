<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class Media extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $full = null,
        public ?string $hollow = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public ?string $bodyClasses = null,
        public ?string $thumbnailClasses = null,
        public ?string $titleClasses = null,
        public ?string $descriptionClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'media',
            $variant,
            [
                'size' => $size,
                'accent' => $accent,
                'border' => $border,
                'hollow' => $hollow,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'full' => $full,
            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'media',
            [
                'body',
                'thumbnail',
                'title',
                'description',
            ],
            $size,
        );

        foreach ($elementClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.media');
    }
}