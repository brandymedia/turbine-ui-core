<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;
use Illuminate\View\ComponentAttributeBag;

class Input extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $accent = null,
        public ?string $border = null,
        public ?string $classes = null,
        public ?string $divide = null,
        public bool|string|null $full = null,
        public ?string $hint = null,
        public ?string $hollow = null,
        public ?string $label = null,
        public ?string $prefix = null,
        public ?string $ring = null,
        public ?string $rounded = null,
        public ?string $shadow = null,
        public ?string $size = null,
        public ?string $suffix = null,
        public ?string $theme = null,
        public ?string $type = null,
        public ?string $variant = null,
        public ?string $hintClasses = null,
        public ?string $inputClasses = null,
        public ?string $inputWrapperClasses = null,
        public ?string $inputCheckboxClasses = null,
        public ?string $inputCheckboxWrapperClasses = null,
        public ?string $inputCheckboxLabelClasses = null,
        public ?string $inputRadioClasses = null,
        public ?string $inputRadioWrapperClasses = null,
        public ?string $inputRadioLabelClasses = null,
        public ?string $inputRangeClasses = null,
        public ?string $inputRangeWrapperClasses = null,
        public ?string $inputRangeLabelClasses = null,
        public ?string $labelClasses = null,
        public ?string $prefixClasses = null,
        public ?string $suffixClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'input',
            $variant,
            [
                'accent' => $accent,
                'border' => $border,
                'divide' => $divide,
                'full' => $full,
                'hollow' => $hollow,
                'label' => $label,
                'prefix' => $prefix,
                'ring' => $ring,
                'rounded' => $rounded,
                'shadow' => $shadow,
                'size' => $size,
                'suffix' => $suffix,
                'type' => $type,
            ],
            $theme,
        );

        $this->classes = $classes;

        $elementClasses = $turbine->elementClasses(
            'input',
            [
                'hint',
                'input',
                'inputWrapper',
                'inputCheckbox',
                'inputCheckboxWrapper',
                'inputCheckboxLabel',
                'inputRange',
                'inputRangeWrapper',
                'inputRangeLabel',
                'inputRadio',
                'inputRadioWrapper',
                'inputRadioLabel',
                'label',
                'prefix',
                'suffix',
            ],
            $size,
        );

        foreach ($elementClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.input');
    }
}
