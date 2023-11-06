<?php

namespace Brandymedia\TurbineUiCore\Console;

use Illuminate\Console\Command;
use function Laravel\Prompts\text;
use function Laravel\Prompts\info;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class CreateVariant extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'turbine:create-variant';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Turbine UI variant';

    protected function getStub()
    {
        return __DIR__ . '/stubs/variant.stub';
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $localVariantPath = base_path().'/resources/views/vendor/turbine-ui/variants/';

        $name = text(
            label: 'Variant name?',
            required: true,
            validate: fn (string $value) => match (true) {
                File::exists($localVariantPath.Str::kebab(Str::lower($value)).'.php') => 'The name must be unique.',
                default => null
            }
        );

        $fileName = Str::kebab(Str::lower($name));

        if (File::missing($localVariantPath.$fileName.'.php')) {
            File::ensureDirectoryExists(dirname($localVariantPath.$fileName.'.php'), 0755, true);
            $fileContents = File::get($this->getStub());
            $fileContents = str_replace("{{ name }}", $fileName, $fileContents);
            File::put($localVariantPath.$fileName.'.php', $fileContents);
        }

        info('Variant created successfully. ' . $localVariantPath.$fileName.'.php');
    }
}