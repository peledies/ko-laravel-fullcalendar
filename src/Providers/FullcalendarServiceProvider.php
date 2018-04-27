<?php
namespace KO\FullCalendar\Providers;

use Illuminate\Support\ServiceProvider;

class FullcalendarServiceProvider extends ServiceProvider {
    public function register()
    {
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('FullCalendar', 'KO\Fullcalendar\Calendar');
    }

    public function boot()
    {
        //$this->loadRoutesFrom(__DIR__.'/../routes/fullcalendar.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'Fullcalendar');
        //$this->loadMigrationsFrom(__DIR__.'/../Database/migrations');

        $this->publishes([
          __DIR__.'/../config/Fullcalendar.php' => config_path('Fullcalendar.php'),
        ], 'config');

        $this->publishes([
          __DIR__.'/../Database/migrations' => database_path('migrations'),
        ], 'migrations');

        $this->publishes([
          __DIR__.'/../resources/views' => resource_path('views/files'),
        ], 'views');

        $this->publishes([
          __DIR__.'/../public/css' => public_path('fullcalendar/css'),
        ], 'css');

        $this->publishes([
          __DIR__.'/../public/img' => public_path('fullcalendar/img'),
        ], 'img');

        $this->registerEloquentFactoriesFrom(__DIR__.'/../Database/factories');
    }

    /**
     * Register factories.
     *
     * @param  string  $path
     * @return void
     */
    protected function registerEloquentFactoriesFrom($path)
    {
        $this->app->make('Illuminate\Database\Eloquent\Factory')->load($path);
    }

}
