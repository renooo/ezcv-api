<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collection\ArrayCollection as ArrayCollection;

/**
* @ORM\Entity
*/
class Employee
{
	/**
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	* @ORM\Column(type="integer")
	*/
	protected $id;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $email;

	/**
	* @ORM\Column(type="string", nullable=false)
	*/
	protected $firstName;

	/**
	* @ORM\Column(type="string", nullable=false)
	*/
	protected $lastName;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $fullName;

	/**
	* @ORM\Column(type="text", nullable=true)
	*/
	protected $description;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $avatarUrl;

	/**
	 * @ORM\OneToMany(targetEntity="Experience", mappedBy="employee", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
	protected $experiences;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $city;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $zipCode;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $country;

	/**
	* @ORM\Column(type="date", nullable=false)
	*/
	protected $birthdate;

	/**
	* @ORM\Column(type="boolean", nullable=false)
	*/
	protected $hasDriversLicence; 


	function __construct()
	{
		$this->experiences = new ArrayCollection();
		$this->hasDriversLicence = false;
	}

	function getId()
	{
		return $this->id;
	}

	function getEmail()
	{
		return $this->email;
	}

	function setEmail($email)
	{
		$this->email = $email;
		return $this;
	}

	function getFirstName()
	{
		return $this->firstName;
	}

	function setFirstName($firstName)
	{
		$this->firstName = $firstName;
		return $this;
	}

	function getLastName()
	{
		return $this->lastName;
	}

	function setLastName($lastName)
	{
		$this->lastName = $lastName;
		return $this;
	}

	function getFullName()
	{
		return $this->fullName;
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

	function getAvatarUrl()
	{
		return $this->avatarUrl;
	}

	function setAvatarUrl($avatarUrl)
	{
		$this->avatarUrl = $avatarUrl;
		return $this;
	}

	function getExperiences()
	{
		return $this->experiences;
	}

	function setExperiences(ArrayCollection $experiences)
	{
		$this->experiences = $experiences;
		return $this;
	}

	function addExperience(Experience $experience)
	{
		if(!$this->experiences->contains($experience))
			$this->experiences->add($experience);
		return $this;
	}

	function removeExperience(Experience $experience)
	{
		if ($this->experiences->contains($experience))
			$this->experiences->removeElement($experience);
		return $this;
	}

	function addExperiences($experiences)
	{
		foreach($experiences as $experience)
			$this->addExperience($experience);
		return $this;
	}

	function removeExperiences($experiences)
	{
		foreach($experiences as $experience)
			$this->removeExperience($experience);
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

	function getBirthdate()
	{
		return $this->birthdate;
	}

	function setBirthdate($birthdate)
	{
		$this->birthdate = $birthdate;
		return $this;
	}

	function getHasDriversLicence()
	{
		return $this->hasDriversLicence;
	}

	function setHasDriversLicence($hasDriversLicence)
	{
		$this->hasDriversLicence = $hasDriversLicence;
		return $this;
	}

	function hasDriversLicence()
	{
		return $this->getHasDriversLicence();
	}		
}