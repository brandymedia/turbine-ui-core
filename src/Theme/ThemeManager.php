<?php

namespace Brandymedia\TurbineUiCore\Theme;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class ThemeManager
{
    private ?array $loadedThemes = null;

    public function __construct()
    {
        $this->loadedThemes = [];
    }

    public function getTheme(?string $name = null): array
    {
        $themeName = $name ?: config('turbine.theme', 'kinetic');
        
        // Return cached theme if already loaded
        if (isset($this->loadedThemes[$themeName])) {
            return $this->loadedThemes[$themeName];
        }

        // Try to get from application cache first
        $cacheKey = "turbine_theme_{$themeName}";
        $cachedTheme = Cache::get($cacheKey);
        
        if ($cachedTheme && !app()->environment('local')) {
            $this->loadedThemes[$themeName] = $cachedTheme;
            return $cachedTheme;
        }

        // Load theme from files
        $theme = $this->loadThemeFromFile($themeName);
        
        // Cache the theme (except in local environment for development)
        if (!app()->environment('local')) {
            Cache::put($cacheKey, $theme, now()->addHours(24));
        }

        $this->loadedThemes[$themeName] = $theme;
        
        return $theme;
    }

    private function loadThemeFromFile(string $themeName): array
    {
        $themePaths = $this->getThemePaths($themeName);
        
        foreach ($themePaths as $path) {
            if (File::exists($path)) {
                return File::getRequire($path);
            }
        }

        // Fallback to kinetic theme if requested theme not found
        if ($themeName !== 'kinetic') {
            return $this->loadThemeFromFile('kinetic');
        }

        throw new \Exception("Could not load theme: {$themeName}");
    }

    private function getThemePaths(string $themeName): array
    {
        $paths = [];
        
        // Local theme (highest priority)
        $paths[] = base_path("/resources/views/vendor/turbine-ui/themes/{$themeName}.php");
        
        // Package theme (core)
        $paths[] = __DIR__ . "/../../resources/views/themes/{$themeName}.php";
        
        return $paths;
    }

    public function clearThemeCache(?string $themeName = null): void
    {
        if ($themeName) {
            Cache::forget("turbine_theme_{$themeName}");
            unset($this->loadedThemes[$themeName]);
        } else {
            // Clear all theme caches
            $this->loadedThemes = [];
            Cache::flush(); // This is aggressive - in real implementation, you'd want to be more specific
        }
    }

    public function getLoadedThemes(): array
    {
        return array_keys($this->loadedThemes);
    }
}