<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-05
 * Time: 08:44
 */
namespace Rabsanaco\UIManager\Events;

class PushScript
{
    public $script;

    public function __construct($script)
    {
        $this->script = $script;
    }
}
