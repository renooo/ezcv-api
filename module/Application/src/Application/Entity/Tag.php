<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/
class Tag
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
	protected $label;

	/**
	* @ORM\Column(type="text", nullable=true)
	*/
	protected $description;

	/**
	* @ORM\ManyToMany(targetEntity="Mission", mappedBy="tags")
	*/
	protected $missions;

	function getId()
	{
		return $this->id;
	}

	function getLabel()
	{
		return $this->label;
	}

	function setLabel($label)
	{
		$this->label = $label;
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
