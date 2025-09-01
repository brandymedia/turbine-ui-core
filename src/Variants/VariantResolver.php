<?php

namespace Brandymedia\TurbineUiCore\Variants;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;

class VariantResolver
{
    public function __construct(
        private array $theme
    ) {}

    public function resolveVariantClasses(string $component, ?string $variant, array $attributes): ?Collection
    {
        $hasVariant = $this->theme['design']['variants'][$variant] ?? null;
        $localVariant = $this->getLocalVariant($variant ?? 'default');
        $variantName = $hasVariant ? $variant : 'default';
        
        $hasHollow = $attributes['hollow'] ?? null;
        $hasHover = $this->theme['design']['components'][$component]['options']['hover'] ?? null;
        $hasFocus = $this->theme['design']['components'][$component]['options']['focus'] ?? null;
        $hasGradient = $this->theme['design']['components'][$component]['options']['gradient'] ?? null;
        $hasBackground = $this->theme['design']['components'][$component]['options']['background'] ?? null;
        $hasText = $this->theme['design']['components'][$component]['options']['text'] ?? null;
        $hasAccent = $attributes['accent'] ?? null;
        
        $backgroundEnabled = $hasBackground !== false;
        $textEnabled = $hasText !== false;
        
        $enabledAttributes = $this->getEnabledAttributes($component, $attributes);
        $variantClasses = collect();

        // Border classes
        if ($hasAccent) {
            $variantClasses = $this->addVariantClass(
                $variantClasses, 
                'border', 
                $localVariant, 
                $variantName, 
                'border'
            );
        }

        // Background classes
        if (!$hasHollow && !$hasGradient && $backgroundEnabled) {
            $variantClasses = $this->addVariantClass(
                $variantClasses, 
                'background', 
                $localVariant, 
                $variantName, 
                'background'
            );
        }

        // Text classes
        $variantClasses = $this->addVariantClass(
            $variantClasses, 
            'text', 
            $localVariant, 
            $variantName, 
            'text'
        );

        // Hover classes
        if ($hasHover) {
            $variantClasses = $this->addVariantClass(
                $variantClasses, 
                'hover', 
                $localVariant, 
                $variantName, 
                'hover'
            );
        }

        // Focus classes
        if ($hasFocus) {
            $variantClasses = $this->addVariantClass(
                $variantClasses, 
                'focus', 
                $localVariant, 
                $variantName, 
                'focus'
            );
        }

        // Gradient classes
        if ($hasGradient && !$hasHollow) {
            $variantClasses = $this->addVariantClass(
                $variantClasses, 
                'gradient', 
                $localVariant, 
                $variantName, 
                'gradient'
            );
            
            if ($variantClasses->has('gradient')) {
                $variantClasses->forget('text');
            }
        }

        // Accent classes
        $variantClasses = $this->addVariantClass(
            $variantClasses, 
            'accent', 
            $localVariant, 
            $variantName, 
            'accent'
        );

        // Remove text classes if not enabled
        if (!$textEnabled) {
            $variantClasses->forget('text');
        }
        
        // Handle enabled attributes
        if ($enabledAttributes) {
            foreach ($enabledAttributes as $enabledAttribute) {
                $variantClasses = $this->addVariantClass(
                    $variantClasses, 
                    $enabledAttribute, 
                    $localVariant, 
                    $variantName, 
                    $enabledAttribute
                );
            }
        }

        return $variantClasses->isEmpty() ? null : $variantClasses;
    }

    public function resolveAttributeClasses(string $component, array $attributes): ?Collection
    {
        $enabledAttributes = $this->getEnabledAttributes($component, $attributes);
        $attributeClasses = collect();

        if ($enabledAttributes) {
            foreach ($enabledAttributes as $enabledAttribute) {
                $componentGlobalAttribute = $this->theme['design']['components'][$component]['attributes'][$enabledAttribute] ?? null;

                if ($componentGlobalAttribute) {
                    if (is_array($componentGlobalAttribute)) {
                        $attributeClasses->put($enabledAttribute, $componentGlobalAttribute[1]);
                    } else {
                        $attributeClasses->put($enabledAttribute, $componentGlobalAttribute);
                    }
                }
            }
        }

        return $attributeClasses->isEmpty() ? null : $attributeClasses;
    }

    private function getEnabledAttributes(string $component, array $attributes): Collection
    {
        $attributeCollection = collect($attributes);
        $enabledAttributes = collect();

        if ($attributeCollection->isNotEmpty()) {
            foreach ($attributeCollection as $key => $componentLocalAttribute) {
                
                if ($componentLocalAttribute === '1') {
                    $enabledAttributes->push($key);
                }

                $componentGlobalAttribute = $this->theme['design']['components'][$component]['attributes'][$key] ?? null;

                if ($componentGlobalAttribute && $componentLocalAttribute !== "false") {
                    if (!is_array($componentGlobalAttribute) || !($componentGlobalAttribute[0] === false)) {
                        if (!$enabledAttributes->contains($key)) {
                            $enabledAttributes->push($key); 
                        }
                    }
                }
            }
        }

        return $enabledAttributes->reverse();
    }

    private function getLocalVariant(?string $variant): ?array
    {
        $localVariantPath = base_path() . '/resources/views/vendor/turbine-ui/variants/' . $variant . '.php';
        
        if (File::exists($localVariantPath)) {
            $localVariantFile = File::getRequire($localVariantPath);
            return $localVariantFile[$variant] ?? null;
        }

        return null;
    }

    private function addVariantClass(
        Collection $variantClasses, 
        string $key, 
        ?array $localVariant, 
        string $variantName, 
        string $classType
    ): Collection {
        $localClass = $localVariant[$classType] ?? null;
        $themeClass = $this->theme['design']['variants'][$variantName][$classType] ?? null;
        
        if ($localClass) {
            $variantClasses->put($key, $localClass);
        } elseif ($themeClass) {
            $variantClasses->put($key, $themeClass);
        }

        return $variantClasses;
    }
}