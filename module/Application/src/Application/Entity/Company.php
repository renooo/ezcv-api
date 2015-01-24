<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/
class Company
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

	/**
	* @ORM\Column(type="string", nullable=false)
	*/
	protected $city;

	/**
	* @ORM\Column(type="string", nullable=false)
	*/
	protected $zipCode;

	/**
	* @ORM\Column(type="string", nullable=false)
	*/
	protected $country;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $website;

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

	function getCity()
	{
		return $this->city;
	}

	function setCity($city)
	{
		$this->city = $city;
		return $this;
	}

	function getZipCode()
	{
		return $this->zipCode;
	}

	function setZipCode($zipCode)
	{
		$this->zipCode = $zipCode;
		return $this;
	}

	function getCountry()
	{
		return $this->country;
	}

	function setCountry($country)
	{
		$this->country = $country;
		return $this;
	}

	function getWebsite()
	{
		return $this->website;
	}

	function setWebsite($website)
	{
		$this->website = $website;
		return $this;
	}
}
