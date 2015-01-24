<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/
class Experience
{
	/**
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	* @ORM\Column(type="integer")
	*/
	protected $id;

	/**
	* @ORM\ManyToOne(targetEntity="Company")
	*/
	protected $company;

	/**
	* @ORM\ManyToOne(targetEntity="Employee")
	*/
	protected $employee;

	/**
	* @ORM\ManyToOne(targetEntity="Job")
	*/
	protected $job;

	/**
	* @ORM\Column(type="date", nullable=false)
	*/
	protected $dateStart;

	/**
	* @ORM\Column(type="date", nullable=true)
	*/
	protected $dateEnd;

	/**
	* @ORM\Column(type="text", nullable=false)
	*/
	protected $description;

	/**
	 * @ORM\OneToMany(targetEntity="Mission", mappedBy="experience", cascade={"persist", "remove"}, orphanRemoval=true)
	 */
	protected $missions;

	function __construct()
	{
		$this->missions = new ArrayCollection();
	}

	function getId()
	{
		return $this->id;
	}

	function getCompany()
	{
		return $this->company;
	}

	function setCompany(Company $company)
	{
		$this->company = $company;
		return $this;
	}

	function getEmployee()
	{
		return $this->employee;
	}

	function setEmployee(Employee $employee)
	{
		$this->employee = $employee;
		return $this;
	}

	function getJob()
	{
		return $this->job;
	}

	function setJob(Job $job)
	{
		$this->job = $job;
		return $this;
	}

	function getDateStart()
	{
		return $this->dateStart;
	}

	function setDateStart($dateStart)
	{
		$this->dateStart = $dateStart;
		return $this;
	}

	function getDateEnd()
	{
		return $this->dateEnd;
	}

	function setDateEnd($dateEnd)
	{
		$this->dateEnd = $dateEnd;
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

	function getMissions()
	{
		return $this->missions;
	}

	function setMissions(ArrayCollection $missions)
	{
		$this->missions = $missions;
		return $this;
	}

	function addMission(Mission $mission)
	{
		if(!$this->missions->contains($mission))
			$this->missions->add($mission);
		return $this;
	}

	function removeMission(Mission $mission)
	{
		if ($this->missions->contains($mission))
			$this->missions->removeElement($mission);
		return $this;
	}

	function addMissions($missions)
	{
		foreach($missions as $mission)
			$this->addMission($mission);
		return $this;
	}

	function removeMissions($missions)
	{
		foreach($missions as $mission)
			$this->removeMission($mission);
		return $this;
	}
}
