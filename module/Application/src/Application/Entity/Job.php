<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/
class Job
{
	/**
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	* @ORM\Column(type="integer")
	*/
	protected $id;

	/**
	* @ORM\Column(type="string", nullable=false)
	*/
	protected $name;

	/**
	* @ORM\Column(type="text", nullable=true)
	*/
	protected $description;

	function getId()
	{
		return $this->id;
	}

	function getName()
	{
		return $this->name;
	}

	function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	function getDescription()
	{
		return $this->description;
	}

	function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}
}
