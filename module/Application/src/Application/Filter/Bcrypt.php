<?php
namespace Application\Filter;

use Zend\Filter\AbstractFilter;

class Bcrypt extends AbstractFilter
{
	function filter($value)
	{
		$bcrypt = new \Zend\Crypt\Password\Bcrypt();
		return $bcrypt->create($value);
	}	
}
