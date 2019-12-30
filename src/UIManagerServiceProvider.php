<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:49
 */

namespace Rabsanaco\UIManager;


use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class UIManagerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('Rabsanaco\Contracts\UI\Builder', function ($app){
           return new GraphicBuilder($app->make('Rabsanaco\Contracts\UI\Kit'));
        });
    }

    public function boot(){

        Event::listen('Rabsanaco\UIManager\Events\PushScript', 'Rabsanaco\UIManager\Listeners\PushScriptHandler');
        Event::listen('Rabsanaco\UIManager\Events\PushStyle', 'Rabsanaco\UIManager\Listeners\PushStyleHandler');
    }
}
