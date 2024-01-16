<?php

namespace Brandymedia\TurbineUiCore\View\Components;

use Illuminate\View\Component;
use Brandymedia\TurbineUiCore\Turbine;

class ThemeSwitcher extends Component
{
    public function __construct(
        private Turbine $turbine,
        public ?string $classes = null,
        public ?string $theme = null,
        public ?string $variant = null,
        public $darkButtonClasses = null,
        public $lightButtonClasses = null,
        public $listGroupClasses = null,
        public $switchButtonClasses = null,
        public $systemButtonClasses = null,
    ) {
        $classes = $turbine->classBuilder(
            'theme-switcher',
            $variant,
            [],
            $theme,
        );

        $this->classes = $classes;
        
        $childrenClasses = $turbine->childrenClasses(
            'theme-switcher',
            [
                'darkButton',
                'lightButton',
                'listGroup',
                'switchButton',
                'systemButton',
            ],
            null
        );

        foreach ($childrenClasses as $key => $value) {
            $this->$key = $value;
        }
    }

    public function render()
    {
        return view('turbine-ui::components.theme-switcher');
    }
}