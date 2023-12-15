<?php

namespace Brandymedia\TurbineUiCore;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use TailwindMerge\Laravel\Facades\TailwindMerge;

class Turbine
{

    public function __construct(
        public ?array $theme = null,
    ) {
        $this->theme = $this->getTheme();
    }

    private function extractMargin($classes)
    {
        $margin = '/(?<![a-zA-Z])m[xytbrl]?-\d+(?!\d)/';        
        preg_match_all($margin, $classes, $matches);
        $matches = collect($matches)->flatten();

        return $matches;
    }

    private function extractPadding($classes)
    {
        $padding = '/(?<![a-zA-Z])p[xytbrl]?-\d+(?!\d)/';        
        preg_match_all($padding, $classes, $matches);
        $matches = collect($matches)->flatten();

        return $matches;
    }

    private function extractGap($classes)
    {
        $gap = '/(?<![a-zA-Z])gap[xy]?-\d+(?!\d)/';        
        preg_match_all($gap, $classes, $matches);
        $matches = collect($matches)->flatten();

        return $matches;
    }

    private function linkComponent($component, $attributes, $classes)
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

    private function inputComponent($component, $attributes, $classes)
    {
        $attributes = collect($attributes);
        $attributes['type'] === 'checkbox' ? $isCheckbox = true : $isCheckbox = false;
        $attributes['type'] === 'radio' ? $isRadio = true : $isRadio = false;
        $attributes['type'] === 'range' ? $isRange = true : $isRange = false;

        if ($isCheckbox || $isRadio) {
            $classes->forget('base');
            $classes->forget('size');
        }

        if ($isRange) {
            $classes->forget('base');
        }

        return $classes;
    }

    private function headingComponent($component, $attributes, $classes)
    {
        $attributes = collect($attributes);
        $level = $attributes['level'] ?? null;
        $levels = $this->theme['design']['components'][$component]['sizes'] ?? null;
        $size = $attributes['size'] ?? null;
        $sizes = $this->theme['design']['components'][$component]['sizes']['h' . $level][$size] ?? null;
        $base = $this->theme['design']['components'][$component]['sizes']['h' . $level]['base'] ?? null;
        $balance = $attributes['balance'] ?? null;
        $pretty = $attributes['pretty'] ?? null;

        if ($level && $levels && $size && $sizes) {
            $classes->put('size', $levels['h' . $level][$size]);
        } else if ($base) {
            $classes->put('size', $base);
        }

        if ($balance) {
            $classes->put('text-wrap', '[text-wrap:balance]');
        }

        if ($pretty) {
            $classes->put('text-wrap', '[text-wrap:pretty]');
        }

        return $classes;
    }

    private function textComponent($component, $attributes, $classes)
    {
        $attributes = collect($attributes);
        $level = $attributes['level'] ?? null;
        $levels = $this->theme['design']['components'][$component]['sizes'] ?? null;
        $size = $attributes['size'] ?? null;
        $balance = $attributes['balance'] ?? null;
        $pretty = $attributes['pretty'] ?? null;

        if ($level) {
            $sizes = $this->theme['design']['components'][$component]['sizes']['h' . $level][$size] ?? null;
        } else {
            $sizes = $this->theme['design']['components'][$component]['sizes']['p'][$size] ?? null;
        }
        if ($level) {
            $base = $this->theme['design']['components'][$component]['sizes']['h' . $level]['base'] ?? null;
        } else {
            $base = $this->theme['design']['components'][$component]['sizes']['p']['base'] ?? null;
        }

        if ($level && $levels && $size && $sizes) {
            $classes->put('size', $levels['h' . $level][$size]);
        } else if ($levels && $size && $sizes) {
            $classes->put('size', $levels['p'][$size]);
        } else if ($base) {
            $classes->put('size', $base);
        }

        if ($balance) {
            $classes->put('text-wrap', '[text-wrap:balance]');
        }

        if ($pretty) {
            $classes->put('text-wrap', '[text-wrap:pretty]');
        }

        return $classes;
    }

    private function buttonComponent($component, $attributes, $classes)
    {
        $attributes = collect($attributes);

        $divide = $attributes->get('divide');
        $link = $attributes->get('link');

        if ($link) {
            $classes->forget('background');
            $classes->forget('border');
            $classes->forget('shadow');
            $classes->forget('ring');
            $classes->forget('hover');
            $classes->forget('gradient');
            $classes->forget('divide');
            $classes = collect(explode(' ', collect($classes)->flatten()->implode(' ')));
            
            $extractPadding = $this->extractPadding($classes);
            foreach ($extractPadding as $eP) {
                $key = $classes->search($eP);
                $classes->forget($key);
            }

        } else {
            if ($divide) {
                $classes = collect(explode(' ', collect($classes)->flatten()->implode(' ')));
                $extractPadding = $this->extractPadding($classes);
                $extractGap = $this->extractGap($classes);
        
                foreach ($extractPadding as $eP) {
                    $key = $classes->search($eP);
                    $classes->forget($key);
                    $classes->push('[&>*]:'.$eP);
                }
    
                foreach ($extractGap as $eG) {
                    $key = $classes->search($eG);
                    $classes->forget($key);
                    $classes->push('[&>*]:'.$eG);
                }
            }
        }    
    
        return $classes;
    }

    private function navLinkComponent($component, $attributes, $classes)
    {
        $attributes = collect($attributes);
        
        if ($classes->has('size')) {
            $size = $classes->get('size');
        } else {
            $size = $this->theme['design']['components'][$component]['sizes']['base'] ?? null;
        }

        $divide = $attributes->get('divide');
        
        if ($divide) {
            $classes = collect(explode(' ', collect($classes)->flatten()->implode(' ')));
            $extractPadding = $this->extractPadding($classes);
            $extractGap = $this->extractGap($classes);
    
            foreach ($extractPadding as $eP) {
                $key = $classes->search($eP);
                $classes->forget($key);
                $classes->push('[&>*]:'.$eP);
            }

            foreach ($extractGap as $eG) {
                $key = $classes->search($eG);
                $classes->forget($key);
                $classes->push('[&>*]:'.$eG);
            }
        }
        
        return $classes;
    }

    private function enabledAttributes($component, $attributes)
    {
        $attributes = collect($attributes);
        $enabledAttributes = collect();

        if ($attributes) {
            foreach ($attributes as $key => $componentLocalAttribute) {
                
                if ($componentLocalAttribute === '1') {
                    $enabledAttributes->push($key);
                }

                $componentGlobalAttribute = $this->theme['design']['components'][$component]['attributes'][$key] ?? null;

                if ($componentGlobalAttribute && $componentLocalAttribute !== "false") {
                    if (!is_array($componentGlobalAttribute) && !$componentGlobalAttribute[0] === false) {
                        if (!$enabledAttributes->contains($key)) {
                            $enabledAttributes->push($key); 
                        }
                    }
                }

            }
        }

        return $enabledAttributes->reverse() ?? null;
    }

    private function attributeClasses($component, $attributes)
    {
        $enabledAttributes = $this->enabledAttributes($component, $attributes);
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

        return $attributeClasses ?? null;
    }

    private function localVariant($variant)
    {
        $localVariantPath = base_path().'/resources/views/vendor/turbine-ui/variants/'.$variant.'.php';
        $localVariant = null;

        if (File::exists($localVariantPath)) {
            $localVariantFile = File::getRequire($localVariantPath);
            if (isset($localVariantFile[$variant])) {
                $localVariant = $localVariantFile[$variant];
            }
        }

        return $localVariant;
    }

    private function variantClasses($component, $variant, $attributes)
    {
        $hasVariant = $this->theme['design']['variants'][$variant] ?? null;
        $localVariant = $this->localVariant($variant) ?? null;
        $hasVariant ? $variantName = $variant : $variantName = 'default';
        $hasHollow = $attributes['hollow'] ?? null;
        $hasHover = $this->theme['design']['components'][$component]['options']['hover'] ?? null;
        $hasFocus = $this->theme['design']['components'][$component]['options']['focus'] ?? null;
        $hasGradient = $this->theme['design']['components'][$component]['options']['gradient'] ?? null;
        $hasBackground = $this->theme['design']['components'][$component]['options']['background'] ?? null;
        $hasText = $this->theme['design']['components'][$component]['options']['text'] ?? null;
        $hasAccent = $attributes['accent'] ?? null;
        
        if ($hasBackground !== false) {
            $backgroundEnabled = true;
        } else {
            $backgroundEnabled = false;
        }

        if ($hasText !== false) {
            $textEnabled = true;
        } else {
            $textEnabled = false;
        }
        
        $enabledAttributes = $this->enabledAttributes($component, $attributes);
        $variantClasses = collect();

        if (isset($localVariant['border']) && $hasAccent) {
            $variantClasses->put('border', $localVariant['border']);
        } else {
            if (isset($this->theme['design']['variants'][$variantName]['border']) && $hasAccent) {
                $variantClasses->put('border', $this->theme['design']['variants'][$variantName]['border']);
            }
        }

        if (isset($localVariant['background']) && !$hasHollow && !$hasGradient && $backgroundEnabled) {
            $variantClasses->put('background', $localVariant['background']);
        } else {
            if (isset($this->theme['design']['variants'][$variantName]['background']) && !$hasHollow && !$hasGradient && $backgroundEnabled) {
                $variantClasses->put('background', $this->theme['design']['variants'][$variantName]['background']);
            }
        }

        if (isset($localVariant['text'])) {
            $variantClasses->put('text', $localVariant['text']);
        } else {
            if (isset($this->theme['design']['variants'][$variantName]['text'])) {
                $variantClasses->put('text', $this->theme['design']['variants'][$variantName]['text']);
            }
        }

        if ($hasHover) {
            if (isset($localVariant['hover'])) {
                $variantClasses->put('hover', $localVariant['hover']);
            } else {
                if (isset($this->theme['design']['variants'][$variantName]['hover'])) {
                    $variantClasses->put('hover', $this->theme['design']['variants'][$variantName]['hover']);
                }
            }
        }

        if ($hasFocus) {
            if (isset($localVariant['focus'])) {
                $variantClasses->put('focus', $localVariant['focus']);
            } else {
                if (isset($this->theme['design']['variants'][$variantName]['focus'])) {
                    $variantClasses->put('focus', $this->theme['design']['variants'][$variantName]['focus']);
                }
            }
        }

        if ($hasGradient && !$hasHollow) {
            if (isset($localVariant['gradient'])) {
                $variantClasses->put('gradient', $localVariant['gradient']);
            } else {
                if (isset($this->theme['design']['variants'][$variantName]['gradient'])) {
                    $variantClasses->put('gradient', $this->theme['design']['variants'][$variantName]['gradient']);
                    $variantClasses->forget('text');
                }
            }
        }

        if (isset($localVariant['accent'])) {
            $variantClasses->put('accent', $localVariant['accent']);
        } else {
            if (isset($this->theme['design']['variants'][$variantName]['accent'])) {
                $variantClasses->put('accent', $this->theme['design']['variants'][$variantName]['accent']);
            }
        }

        if (!$textEnabled) {
            $variantClasses->forget('text');
        }
        
        if ($enabledAttributes) {
            foreach ($enabledAttributes as $enabledAttribute) {
                if (isset($localVariant[$enabledAttribute])) {
                    $variantAttribute = $localVariant[$enabledAttribute] ?? null;
                } else {
                    $variantAttribute = $this->theme['design']['variants'][$variantName][$enabledAttribute] ?? null;
                }

                if ($variantAttribute) {
                    $variantClasses->put($enabledAttribute, $variantAttribute);
                }
            }
        }

        return $variantClasses ?? null;
    }

    public function sizeClasses($component, $size)
    {   
        $sizeClasses = collect();
        $hasSize = $this->theme['design']['components'][$component]['sizes'][$size] ?? null;

        if ($hasSize) {
            $sizeClasses->put('size', $hasSize);
        } else {
            if (isset($this->theme['design']['components'][$component]['sizes']['base'])) {
                $sizeClasses->put('size', $this->theme['design']['components'][$component]['sizes']['base']);
            }
        }

        return $sizeClasses ?? null;
    }

    public function gridClasses($component, $grid)
    {   
        $gridClasses = collect();
        $hasGrid = $this->theme['design']['components'][$component]['grids'][$grid] ?? null;

        if ($hasGrid) {
            $gridClasses->put('grid', $hasGrid);
        }

        return $gridClasses ?? null;
    }

    public function colClasses($component, $col)
    {   
        $colClasses = collect();
        $hasCol = $this->theme['design']['components'][$component]['cols'][$col] ?? null;

        if ($hasCol) {
            $colClasses->put('col', $hasCol);
        }

        return $colClasses ?? null;
    }

    public function gapClasses($component, $gap)
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

        return $gapClasses ?? null;
    }

    public function classBuilder($component, $variant, $attributes, $componentTheme = null)
    {
        $classes = collect();

        if ($componentTheme) {
            $this->theme = $this->getTheme($componentTheme);
        }

        $baseClasses = collect(['base' => $this->theme['design']['components'][$component]['base'] ?? null]);
        $attributeClasses = $this->attributeClasses($component, $attributes);
        $variantClasses = $this->variantClasses($component, $variant, $attributes);
        $sizeClasses = $this->sizeClasses($component, $attributes['size'] ?? null);
        $gridClasses = $this->gridClasses($component, $attributes['grid'] ?? null);
        $colClasses = $this->colClasses($component, $attributes['cols'] ?? null);
        $gapClasses = $this->gapClasses($component, $attributes['gap'] ?? null);
        $classes = $baseClasses->mergeRecursive($attributeClasses);
        $classes = $classes->mergeRecursive($variantClasses);
        $classes = $classes->mergeRecursive($sizeClasses);
        $classes = $classes->mergeRecursive($gridClasses);
        $classes = $classes->mergeRecursive($colClasses);
        $classes = $classes->mergeRecursive($gapClasses);

        $componentName = Str::camel($component);
        $methodName = $componentName.'Component';
        if (method_exists($this, $methodName)) {
            $classes = $this->$methodName($component, $attributes, $classes);
        }

        if ($component === 'burger') {
            return $classes;
        } else {
            return $classes ? $classes->flatten()->implode(' ') : null;
        }
    }

    private function getTheme($name = null)
    {
        if ($name) {
            $theme = $name;
        } else {
            $theme = config('turbine.theme') ?? 'kinetic';
        }

        $proInstalled = class_exists('\Brandymedia\TurbineUi\TurbinePro');

        if ($proInstalled) {
            $proPackageThemePath = base_path().'/vendor/brandymedia/turbine-ui/resources/views/themes/'.$theme.'.php';
        } else {
            $proPackageThemePath = false;
        }
        
        $packageThemePath = __DIR__.'/../resources/views/themes/'.$theme.'.php';
        $localThemePath = base_path().'/resources/views/vendor/turbine-ui/themes/'.$theme.'.php';

        if (File::exists($localThemePath)) {
            $currentTheme = File::getRequire($localThemePath);
        } elseif (File::exists($packageThemePath)) {
            $currentTheme = File::getRequire($packageThemePath);
        } elseif (File::exists($proPackageThemePath)) {
            $currentTheme = File::getRequire($proPackageThemePath);
        } else {
            $currentTheme = File::getRequire(__DIR__.'/../resources/views/themes/kinetic.php');
        }

        return $currentTheme;
    }

}