<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-10
 * Time: 11:11
 */
namespace Rabsanaco\UIManager\Listeners;

use Rabsanaco\UIManager\Facades\Builder;

class PushScriptHandler
{
    public function handle($e){
        Builder::getPage()->pushScript($e->script);
    }
}
