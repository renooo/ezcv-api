<?php

namespace Application\Stdlib\Hydrator\Strategy;

use DoctrineModule\Stdlib\Hydrator\Strategy\AllowRemoveByValue;
use ZF\Hal\Collection;


class UpdatableHalCollection extends AllowRemoveByValue
{
	public function extract($value)
    {
        $value = ($value)?: array();

        $halCollection = new Collection($value);

        return $halCollection;
    }
}
