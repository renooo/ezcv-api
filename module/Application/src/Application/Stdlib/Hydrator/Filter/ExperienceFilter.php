<?php

namespace Application\Stdlib\Hydrator\Filter;

use Zend\Stdlib\Hydrator\Filter\FilterInterface;

class ExperienceFilter implements FilterInterface
{
    public function filter($fieldName)
    {
        return !in_array($fieldName, array('employee'));
    }
}