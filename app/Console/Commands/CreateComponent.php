<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class CreateComponent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:component {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Luvi-UI Component';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $component = str($this->argument('name'))->lower();

        $viewPath = resource_path("views/components/{$component}/index.blade.php");
        $this->ensureDirectoryExists($viewPath);
        File::put($viewPath, '');

        $viewPath = resource_path("views/docs/{$component}/preview.blade.php");
        $this->ensureDirectoryExists($viewPath);
        File::put($viewPath, '');

        $viewPath = resource_path("views/docs/{$component}/usage.blade.php");
        $this->ensureDirectoryExists($viewPath);
        File::put($viewPath, '');

        $viewPath = resource_path("views/pages/docs/components/{$component}.blade.php");
        $this->ensureDirectoryExists($viewPath);
        $stub = File::get(resource_path('stubs/page.blade.php.stub'));

        $stub = str($stub)
            ->replace('{{ $ucfComponent }}', str($component)->ucfirst())
            ->replace('{{ $component }}', $component);

        File::put($viewPath, $stub);

    }

    protected function ensureDirectoryExists($path)
    {
        if (! File::isDirectory(dirname($path))) {
            File::makeDirectory(dirname($path), 0777, $recursive = true, $force = true);
        }
    }
}
