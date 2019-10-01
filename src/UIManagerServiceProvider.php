<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:49
 */

namespace Rabsanaco\UIManager;


use Illuminate\Support\ServiceProvider;

class UIManagerServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('Rabsanaco\Contracts\Builder', function ($app){
           return new GraphicBuilder($app->make('Rabsanaco\Contracts\Kit'));
        });
    }
}
