<?php

namespace Brandymedia\TurbineUiCore;

use Brandymedia\TurbineUiCore\Theme\ThemeManager;
use Brandymedia\TurbineUiCore\Components\ComponentClassBuilder;
use Brandymedia\TurbineUiCore\Variants\VariantResolver;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class Turbine
{
    public function __construct(
        private ThemeManager $themeManager,
        private ?ComponentClassBuilder $componentClassBuilder = null,
        private ?VariantResolver $variantResolver = null,
        public ?array $theme = null,
    ) {
        $this->theme = $this->themeManager->getTheme();
        $this->componentClassBuilder = new ComponentClassBuilder($this->theme);
        $this->variantResolver = new VariantResolver($this->theme);
    }


    public function sizeClasses(string $component, ?string $size): ?Collection
    {
        return $this->componentClassBuilder->getSizeClasses($component, $size);
    }

    public function gridClasses(string $component, ?string $grid): ?Collection
    {
        return $this->componentClassBuilder->getGridClasses($component, $grid);
    }

    public function colClasses(string $component, ?string $col): ?Collection
    {
        return $this->componentClassBuilder->getColClasses($component, $col);
    }

    public function gapClasses(string $component, ?string $gap): ?Collection
    {
        return $this->componentClassBuilder->getGapClasses($component, $gap);
    }

    public function classBuilder(string $component, ?string $variant, array $attributes, ?string $componentTheme = null): Collection|string|null
    {
        if ($componentTheme) {
            $this->theme = $this->themeManager->getTheme($componentTheme);
            $this->componentClassBuilder = new ComponentClassBuilder($this->theme);
            $this->variantResolver = new VariantResolver($this->theme);
        }

        $classes = collect();
        
        // Base classes
        $baseClasses = collect(['base' => $this->theme['design']['components'][$component]['base'] ?? null]);
        $classes = $classes->mergeRecursive($baseClasses);
        
        // Attribute classes
        $attributeClasses = $this->variantResolver->resolveAttributeClasses($component, $attributes);
        if ($attributeClasses) {
            $classes = $classes->mergeRecursive($attributeClasses);
        }
        
        // Variant classes
        $variantClasses = $this->variantResolver->resolveVariantClasses($component, $variant, $attributes);
        if ($variantClasses) {
            $classes = $classes->mergeRecursive($variantClasses);
        }
        
        // Size, grid, col, gap classes
        $sizeClasses = $this->sizeClasses($component, $attributes['size'] ?? null);
        if ($sizeClasses) {
            $classes = $classes->mergeRecursive($sizeClasses);
        }
        
        $gridClasses = $this->gridClasses($component, $attributes['grid'] ?? null);
        if ($gridClasses) {
            $classes = $classes->mergeRecursive($gridClasses);
        }
        
        $colClasses = $this->colClasses($component, $attributes['cols'] ?? null);
        if ($colClasses) {
            $classes = $classes->mergeRecursive($colClasses);
        }
        
        $gapClasses = $this->gapClasses($component, $attributes['gap'] ?? null);
        if ($gapClasses) {
            $classes = $classes->mergeRecursive($gapClasses);
        }

        // Apply component-specific logic
        $classes = $this->componentClassBuilder->applyComponentSpecificLogic($component, $attributes, $classes);

        // Return as collection for burger component, string for others
        if ($component === 'burger') {
            return $classes;
        }
        
        return $classes->isNotEmpty() ? $classes->flatten()->implode(' ') : null;
    }


    public function elementClasses(string $component, ?array $elements, ?string $size): array
    {
        return $this->componentClassBuilder->getElementClasses($component, $elements, $size);
    }

}