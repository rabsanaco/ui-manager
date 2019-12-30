<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-05
 * Time: 08:44
 */
namespace Rabsanaco\UIManager\Events;

class PushStyle
{
    public $style;

    public function __construct($style)
    {
        $this->style = $style;
    }
}
