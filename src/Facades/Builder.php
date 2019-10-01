<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-01
 * Time: 15:58
 */

namespace Rabsanaco\UIManager\Facades;


use Illuminate\Support\Facades\Facade;

class Builder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Rabsanaco\Contracts\Builder';
    }
}
