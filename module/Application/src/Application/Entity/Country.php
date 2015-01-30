<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/
class Country
{
	/**
	* @ORM\Id
	* @ORM\Column(type="string", length=2, nullable=false)
	*/
	protected $id;

	/**
	* @ORM\Column(type="string", nullable=false)
	*/
	protected $name;

	function getId()
	{
		return $this->id;
	}

	function getName()
	{
		return $this->name;
	}
}
