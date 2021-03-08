<?php


namespace Arielmejiadev\Jetbar\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Process\Process;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'jetbar:install
                            {--inertia : Indicates that the Inertia stack should be installed}
                            {--composer=global : Absolute path to the Composer binary which should be used to install packages}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Jetbar resources';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->option('inertia')) {
            return $this->installInertiaStack();
        }

        (new Filesystem)->ensureDirectoryExists(resource_path('views/layouts'));
        (new Filesystem)->ensureDirectoryExists(resource_path('views/components'));

        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/views/layouts', resource_path('views/layouts'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/resources/views/components', resource_path('views/components'));

        copy(__DIR__.'/../../stubs/default/resources/views/dashboard.blade.php', resource_path('views/dashboard.blade.php'));
//
//        // Components...
//        (new Filesystem)->ensureDirectoryExists(app_path('View/Components'));
//        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/default/App/View/Components', app_path('View/Components'));

        $this->info('Jetbar blade dashboard installed successfully.');
        $this->comment('Please execute the "npm install && npm run dev" command to build your assets.');
    }

    /**
     * Install the Inertia Breeze stack.
     *
     * @return void
     */
    protected function installInertiaStack()
    {
        // Components + Pages...
        (new Filesystem)->ensureDirectoryExists(resource_path('js/Components'));
        (new Filesystem)->ensureDirectoryExists(resource_path('js/Layouts'));

        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/inertia/resources/js/Components', resource_path('js/Components'));
        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/inertia/resources/js/Layouts', resource_path('js/Layouts'));

        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/inertia/resources/js/Pages', resource_path('js/Pages'));

        $this->info('Jetbar VueJS dashboard installed successfully.');
        $this->comment('Please execute the "npm run dev" command to build your assets or "npm run watch".');
    }

    /**
     * Update the "package.json" file.
     *
     * @param  callable  $callback
     * @param  bool  $dev
     * @return void
     */
    protected static function updateNodePackages(callable $callback, $dev = true)
    {
        if (! file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).PHP_EOL
        );
    }

//    /**
//     * Replace a given string within a given file.
//     *
//     * @param  string  $search
//     * @param  string  $replace
//     * @param  string  $path
//     * @return void
//     */
//    protected function replaceInFile($search, $replace, $path)
//    {
//        file_put_contents($path, str_replace($search, $replace, file_get_contents($path)));
//    }
}
