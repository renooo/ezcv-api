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
	* @ORM\Column(type="string", nullable=false)
	*/
	protected $userName;

	/**
	* @ORM\Column(type="string", nullable=false)
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
	* @ORM\Column(type="boolean", nullable=true)
	*/
	protected $isCurrentlyEmployed;

	/**
	* @ORM\Column(type="string", nullable=true)
	*/
	protected $currentJobName;

	/**
	* @ORM\Column(type="boolean", nullable=true)
	*/
	protected $isLookingForAJob;	

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
	 * @ORM\OrderBy({"dateStart"="DESC"})
	 */
	protected $experiences;

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
		$this->isCurrentlyEmployed = false;
		$this->isLookingForAJob = false;
		$this->hasDriversLicence = false;
	}

	function getId()
	{
		return $this->id;
	}

	function getUserName()
	{
		return $this->userName;
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

	function getIsCurrentlyEmployed()
	{
		return $this->isCurrentlyEmployed;
	}

	function setIsCurrentlyEmployed($isCurrentlyEmployed)
	{
		$this->isCurrentlyEmployed = $isCurrentlyEmployed;
		return $this;
	}

	function isCurrentlyEmployed()
	{
		return $this->isCurrentlyEmployed();
	}	

	function getCurrentJobName()
	{
		return $this->currentJobName;
	}

	function setCurrentJobName($currentJobName)
	{
		$this->currentJobName = $currentJobName;
		return $this;
	}

	function getIsLookingForAJob()
	{
		return $this->isLookingForAJob;
	}

	function setIsLookingForAJob($isLookingForAJob)
	{
		$this->isLookingForAJob = $isLookingForAJob;
		return $this;
	}

	function isLookingForAJob()
	{
		return $this->isLookingForAJob();
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

	function setExperiences($experiences)
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
