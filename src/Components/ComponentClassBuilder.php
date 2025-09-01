<?php

namespace Brandymedia\TurbineUiCore\Components;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use TailwindMerge\Laravel\Facades\TailwindMerge;

class ComponentClassBuilder
{
    public function __construct(
        private array $theme
    ) {}

    public function applyComponentSpecificLogic(string $component, array $attributes, Collection $classes): Collection
    {
        $componentName = Str::camel($component);
        $methodName = $componentName . 'Component';
        
        if (method_exists($this, $methodName)) {
            return $this->$methodName($component, $attributes, $classes);
        }

        return $classes;
    }

    private function linkComponent(string $component, array $attributes, Collection $classes): Collection
    {
        $options = collect($this->theme['design']['components'][$component]['options'] ?? null);
        $hasBackground = $this->theme['design']['components'][$component]['options']['background'] ?? null;

        if (!$hasBackground) {
            if ($options->contains('hover')) {
                if ($options['hover']) {
                    $classes = $classes->merge(['hover:bg-transparent', 'hover:dark:bg-transparent']);
                    TailwindMerge::merge($classes->flatten()->implode(' '));
                }
            }
        }

        return $classes;
    }

    private function inputComponent(string $component, array $attributes, Collection $classes): Collection
    {
        $attributeCollection = collect($attributes);
        $type = $attributeCollection->get('type');
        
        $isCheckbox = $type === 'checkbox';
        $isRadio = $type === 'radio';
        $isRange = $type === 'range';

        if ($isCheckbox || $isRadio) {
            $classes->forget('base');
            $classes->forget('size');
        }

        if ($isRange) {
            $classes->forget('base');
        }

        return $classes;
    }

    private function headingComponent(string $component, array $attributes, Collection $classes): Collection
    {
        $attributeCollection = collect($attributes);
        $level = $attributeCollection->get('level');
        $size = $attributeCollection->get('size');
        $balance = $attributeCollection->get('balance');
        $pretty = $attributeCollection->get('pretty');

        $levels = $this->theme['design']['components'][$component]['sizes'] ?? null;
        
        if ($level && $levels && $size) {
            $sizes = $this->theme['design']['components'][$component]['sizes']['h' . $level][$size] ?? null;
            if ($sizes) {
                $classes->put('size', $sizes);
            }
        } elseif ($level && $levels) {
            $base = $this->theme['design']['components'][$component]['sizes']['h' . $level]['base'] ?? null;
            if ($base) {
                $classes->put('size', $base);
            }
        }

        if ($balance) {
            $classes->put('text-wrap', '[text-wrap:balance]');
        }

        if ($pretty) {
            $classes->put('text-wrap', '[text-wrap:pretty]');
        }

        return $classes;
    }

    private function textComponent(string $component, array $attributes, Collection $classes): Collection
    {
        $attributeCollection = collect($attributes);
        $level = $attributeCollection->get('level');
        $size = $attributeCollection->get('size');
        $balance = $attributeCollection->get('balance');
        $pretty = $attributeCollection->get('pretty');

        $levels = $this->theme['design']['components'][$component]['sizes'] ?? null;
        
        if ($level && $levels && $size) {
            $sizes = $levels['h' . $level][$size] ?? null;
            if ($sizes) {
                $classes->put('size', $sizes);
            }
        } elseif ($levels && $size) {
            $sizes = $levels['p'][$size] ?? null;
            if ($sizes) {
                $classes->put('size', $sizes);
            }
        } else {
            $baseKey = $level ? 'h' . $level : 'p';
            $base = $levels[$baseKey]['base'] ?? null;
            if ($base) {
                $classes->put('size', $base);
            }
        }

        if ($balance) {
            $classes->put('text-wrap', '[text-wrap:balance]');
        }

        if ($pretty) {
            $classes->put('text-wrap', '[text-wrap:pretty]');
        }

        return $classes;
    }

    private function buttonComponent(string $component, array $attributes, Collection $classes): Collection
    {
        $attributeCollection = collect($attributes);
        $link = $attributeCollection->get('link');

        if ($link) {
            $classes->forget('background');
            $classes->forget('border');
            $classes->forget('shadow');
            $classes->forget('ring');
            $classes->forget('hover');
            $classes->forget('gradient');
            $classes->forget('divide');
            $classes = collect(explode(' ', $classes->flatten()->implode(' ')));
        }   
    
        return $classes;
    }

    public function getSizeClasses(string $component, ?string $size): ?Collection
    {   
        $sizeClasses = collect();
        $hasSize = $this->theme['design']['components'][$component]['sizes'][$size] ?? null;
        $base = config('turbine.components.' . $component . '.size') ?? 'base';

        if ($hasSize) {
            $sizeClasses->put('size', $hasSize);
        } else {
            if (isset($this->theme['design']['components'][$component]['sizes'][$base])) {
                $sizeClasses->put('size', $this->theme['design']['components'][$component]['sizes'][$base]);
            }
        }

        return $sizeClasses->isEmpty() ? null : $sizeClasses;
    }

    public function getGridClasses(string $component, ?string $grid): ?Collection
    {   
        $gridClasses = collect();
        $hasGrid = $this->theme['design']['components'][$component]['grids'][$grid] ?? null;

        if ($hasGrid) {
            $gridClasses->put('grid', $hasGrid);
        }

        return $gridClasses->isEmpty() ? null : $gridClasses;
    }

    public function getColClasses(string $component, ?string $col): ?Collection
    {   
        $colClasses = collect();
        $hasCol = $this->theme['design']['components'][$component]['cols'][$col] ?? null;

        if ($hasCol) {
            $colClasses->put('col', $hasCol);
        }

        return $colClasses->isEmpty() ? null : $colClasses;
    }

    public function getGapClasses(string $component, ?string $gap): ?Collection
    {   
        $gapClasses = collect();

        if (isset($gap)) {
            $hasGap = $this->theme['design']['components'][$component]['gap'][$gap] ?? null;

            if ($hasGap) {
                $gapClasses->put('gap', $hasGap);
            } else {
                if (isset($this->theme['design']['components'][$component]['gap']['base'])) {
                    $gapClasses->put('gap', $this->theme['design']['components'][$component]['gap']['base']);
                }
            }
        }

        return $gapClasses->isEmpty() ? null : $gapClasses;
    }

    public function getElementClasses(string $component, ?array $elements, ?string $size): array
    {
        $elementClasses = [];
        
        if ($elements) {
            $sizeOverride = config('turbine.components.' . $component . '.size') ?? null;

            if (!$size) {
                $size = $sizeOverride ?? $size ?? null;
            }

            foreach ($elements as $element) {
                $elementName = Str::kebab($element);
                $base = $this->theme['design']['components'][$component]['elements'][$elementName]['base'] ?? null;
                $hasSize = $this->theme['design']['components'][$component]['elements'][$elementName]['sizes'][$size] ?? null;

                if (!$hasSize) {
                    $hasSize = $this->theme['design']['components'][$component]['elements'][$elementName]['sizes']['base'] ?? null;
                }
                
                $elementClasses[$element . 'Classes'] = $base . ' ' . $hasSize;                
            }
        }

        return $elementClasses;
    }
}