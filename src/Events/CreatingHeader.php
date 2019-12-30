<?php
/**
 * Created by PhpStorm.
 * User: bikasoon
 * Date: 2019-10-05
 * Time: 08:44
 */
namespace Rabsanaco\UIManager\Events;

use Rabsanaco\Contracts\UI\Widgets\Graphic;

class CreatingHeader
{
    public $graphic;

    public function __construct(Graphic $graphic)
    {
        $this->graphic = $graphic;
    }
}
