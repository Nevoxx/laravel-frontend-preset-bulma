<?php

namespace Nevoxx\FrontendPresetBulma;

use Artisan;
use Illuminate\Support\Arr;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\Presets\Preset;

class BulmaPreset extends Preset
{
    public static function install($auth = false)
    {
        static::updatePackages();
        static::updateSass();
        static::updateBootstrapping();

        if ($auth) {
            static::addAuthTemplates();
        } else {
            static::updateWelcomePage();
        }

        static::removeNodeModules();
    }

    protected static function updatePackageArray(array $packages)
    {
        return [
            'bulma' => '^0.7',
            'font-awesome' => '^4.7',
        ] + Arr::except($packages, ['bootstrap', 'popper.js']);
    }

    protected static function updateSass()
    {
        $sassFiles = glob(resource_path('/sass/*.*'));

        foreach ($sassFiles as $sassFile) {
            (new Filesystem)->delete($sassFile);
        }

        copy(__DIR__.'/stubs/resources/assets/sass/app.scss', resource_path('sass/app.scss'));
    }

    protected static function updateBootstrapping()
    {
        (new Filesystem)->delete(
            resource_path('assets/js/bootstrap.js')
        );

        copy(__DIR__.'/stubs/resources/assets/js/bootstrap.js', resource_path('js/bootstrap.js'));
    }

    protected static function updateWelcomePage()
    {
        (new Filesystem)->delete(
            resource_path('views/welcome.blade.php')
        );

        copy(__DIR__.'/stubs/resources/views/welcome.blade.php', resource_path('views/welcome.blade.php'));
    }

    protected static function addAuthTemplates()
    {
        $routesFile = './routes/web.php';

        $routes = file_get_contents($routesFile);

        if (! stristr($routes, "Auth::routes();")) {
            file_put_contents($routesFile, "\nAuth::routes();", FILE_APPEND);
        }

        if (! stristr($routes, "Route::get('/home', 'HomeController@index')->name('home');")) {
            file_put_contents($routesFile, "\nRoute::get('/home', 'HomeController@index')->name('home');", FILE_APPEND);
        }

        (new Filesystem)->copyDirectory(__DIR__.'/stubs/resources/views', resource_path('views'));

        copy(__DIR__.'/stubs/app/Http/Controllers/HomeController.php', base_path('app/Http/Controllers/HomeController.php'));
    }
}
