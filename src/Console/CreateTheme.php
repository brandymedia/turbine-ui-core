<?php

namespace Brandymedia\TurbineUiCore\Console;

use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\select;
use function Laravel\Prompts\info;
use function Laravel\Prompts\error;
use function Laravel\Prompts\warning;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CreateTheme extends Command
{
    protected $signature = 'turbine:create-theme {name? : The name of the theme} {--duplicate= : Duplicate an existing theme}';

    protected $description = 'Create a new Turbine UI theme';

    protected function getStub(): string
    {
        return __DIR__ . '/stubs/theme-blank.stub';
    }

    public function handle(): int
    {
        $name = $this->argument('name');
        $duplicateTheme = $this->option('duplicate');
        
        // Handle duplication
        if ($duplicateTheme) {
            return $this->duplicateTheme($duplicateTheme, $name);
        }
        
        // Determine creation mode if not specified via options (interactive only)
        if (!$name) {
            $mode = select(
                label: 'How would you like to create the theme?',
                options: [
                    'blank' => 'Create a blank theme template (no styles)',
                    'duplicate' => 'Duplicate an existing theme',
                ],
                default: 'blank'
            );
            
            if ($mode === 'duplicate') {
                return $this->handleDuplication();
            }
        }

        if (!$name) {
            $name = text(
                label: 'What should the theme be named?',
                placeholder: 'my-awesome-theme',
                required: true,
                validate: fn (string $value) => match (true) {
                    empty(trim($value)) => 'The theme name is required.',
                    !preg_match('/^[a-z0-9\-_]+$/', $value) => 'Theme name should only contain lowercase letters, numbers, hyphens, and underscores.',
                    default => null
                }
            );
        }

        return $this->createTheme($name);
    }
    
    protected function createTheme(string $name): int
    {
        $fileName = Str::kebab(Str::lower($name));
        $themeName = Str::title(str_replace(['-', '_'], ' ', $fileName));
        
        // Define paths
        $packageThemePath = __DIR__ . '/../../resources/views/themes/' . $fileName . '.php';
        $localThemePath = base_path() . '/resources/views/vendor/turbine-ui/themes/' . $fileName . '.php';

        // Check if theme already exists
        if (File::exists($packageThemePath) || File::exists($localThemePath)) {
            $overwrite = confirm(
                label: "A theme named '{$fileName}' already exists. Do you want to overwrite it?",
                default: false
            );

            if (!$overwrite) {
                info('Theme creation cancelled.');
                return self::SUCCESS;
            }
        }

        // Ask where to create the theme
        $createLocally = confirm(
            label: 'Create theme in your local project? (Choose "No" to create in the package)',
            default: true,
            hint: 'Local themes can be version controlled and are easier to customize'
        );

        $targetPath = $createLocally ? $localThemePath : $packageThemePath;

        try {
            // Create directory if it doesn't exist
            File::ensureDirectoryExists(dirname($targetPath), 0755, true);

            // Read and process the stub
            $fileContents = File::get($this->getStub());
            $fileContents = str_replace('{{ name }}', $fileName, $fileContents);
            $fileContents = str_replace('{{ title }}', $themeName, $fileContents);

            // Write the file
            File::put($targetPath, $fileContents);

            info("Theme '{$fileName}' created successfully!");
            info("Location: {$targetPath}");
            
            warning('This is a blank theme template with no styles.');
            info('You can now customize all the empty style properties.');
            
            info('');
            info('To use this theme, add the following to your .env file:');
            info("TURBINE_UI_THEME={$fileName}");
            
            if ($createLocally) {
                info('');
                info('Don\'t forget to update your tailwind.config.js content array to include:');
                info('./resources/views/**/*.php');
            }

            return self::SUCCESS;

        } catch (\Exception $e) {
            error("Failed to create theme: {$e->getMessage()}");
            return self::FAILURE;
        }
    }
    
    protected function getAvailableThemes(): array
    {
        $themes = [];
        
        // Package themes
        $packageThemesPath = __DIR__ . '/../../resources/views/themes/';
        if (File::exists($packageThemesPath)) {
            $packageThemes = File::files($packageThemesPath);
            foreach ($packageThemes as $theme) {
                if ($theme->getExtension() === 'php') {
                    $themeName = $theme->getFilenameWithoutExtension();
                    $themes[$themeName] = [
                        'name' => $themeName,
                        'path' => $theme->getPathname(),
                        'type' => 'package'
                    ];
                }
            }
        }
        
        // Local themes
        $localThemesPath = base_path('/resources/views/vendor/turbine-ui/themes/');
        if (File::exists($localThemesPath)) {
            $localThemes = File::files($localThemesPath);
            foreach ($localThemes as $theme) {
                if ($theme->getExtension() === 'php') {
                    $themeName = $theme->getFilenameWithoutExtension();
                    $themes[$themeName] = [
                        'name' => $themeName,
                        'path' => $theme->getPathname(),
                        'type' => 'local'
                    ];
                }
            }
        }
        
        return $themes;
    }
    
    protected function handleDuplication(): int
    {
        $availableThemes = $this->getAvailableThemes();
        
        if (empty($availableThemes)) {
            error('No themes available to duplicate.');
            return self::FAILURE;
        }
        
        $themeOptions = [];
        foreach ($availableThemes as $theme) {
            $themeOptions[$theme['name']] = $theme['name'] . ' (' . $theme['type'] . ')';
        }
        
        $selectedTheme = select(
            label: 'Which theme would you like to duplicate?',
            options: $themeOptions
        );
        
        $newName = text(
            label: 'What should the new theme be named?',
            placeholder: $selectedTheme . '-copy',
            required: true,
            validate: fn (string $value) => match (true) {
                empty(trim($value)) => 'The theme name is required.',
                !preg_match('/^[a-z0-9\-_]+$/', $value) => 'Theme name should only contain lowercase letters, numbers, hyphens, and underscores.',
                default => null
            }
        );
        
        return $this->duplicateTheme($selectedTheme, $newName);
    }
    
    protected function duplicateTheme(string $sourceTheme, ?string $newName = null): int
    {
        $availableThemes = $this->getAvailableThemes();
        
        if (!isset($availableThemes[$sourceTheme])) {
            error("Theme '{$sourceTheme}' not found.");
            return self::FAILURE;
        }
        
        if (!$newName) {
            $newName = text(
                label: 'What should the new theme be named?',
                placeholder: $sourceTheme . '-copy',
                required: true,
                validate: fn (string $value) => match (true) {
                    empty(trim($value)) => 'The theme name is required.',
                    !preg_match('/^[a-z0-9\-_]+$/', $value) => 'Theme name should only contain lowercase letters, numbers, hyphens, and underscores.',
                    default => null
                }
            );
        }
        
        $fileName = Str::kebab(Str::lower($newName));
        $sourceThemeData = $availableThemes[$sourceTheme];
        
        // Define paths
        $packageThemePath = __DIR__ . '/../../resources/views/themes/' . $fileName . '.php';
        $localThemePath = base_path() . '/resources/views/vendor/turbine-ui/themes/' . $fileName . '.php';
        
        // Check if theme already exists
        if (File::exists($packageThemePath) || File::exists($localThemePath)) {
            $overwrite = confirm(
                label: "A theme named '{$fileName}' already exists. Do you want to overwrite it?",
                default: false
            );
            
            if (!$overwrite) {
                info('Theme duplication cancelled.');
                return self::SUCCESS;
            }
        }
        
        // Ask where to create the theme
        $createLocally = confirm(
            label: 'Create theme in your local project? (Choose "No" to create in the package)',
            default: true,
            hint: 'Local themes can be version controlled and are easier to customize'
        );
        
        $targetPath = $createLocally ? $localThemePath : $packageThemePath;
        
        try {
            // Create directory if it doesn't exist
            File::ensureDirectoryExists(dirname($targetPath), 0755, true);
            
            // Read source theme and update name/description
            $sourceContent = File::get($sourceThemeData['path']);
            
            // Update theme meta information
            $sourceContent = preg_replace(
                "/'name'\s*=>\s*'[^']*'/",
                "'name' => '{$fileName}'",
                $sourceContent
            );
            
            $sourceContent = preg_replace(
                "/'description'\s*=>\s*'[^']*'/",
                "'description' => 'Turbine UI {$fileName} theme (duplicated from {$sourceTheme})'",
                $sourceContent
            );
            
            // Write the file
            File::put($targetPath, $sourceContent);
            
            info("Theme '{$fileName}' duplicated successfully from '{$sourceTheme}'!");
            info("Location: {$targetPath}");
            info('');
            info('To use this theme, add the following to your .env file:');
            info("TURBINE_UI_THEME={$fileName}");
            
            if ($createLocally) {
                info('');
                info('Don\'t forget to update your tailwind.config.js content array to include:');
                info('./resources/views/**/*.php');
            }
            
            return self::SUCCESS;
            
        } catch (\Exception $e) {
            error("Failed to duplicate theme: {$e->getMessage()}");
            return self::FAILURE;
        }
    }
}