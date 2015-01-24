<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*/
class Mission
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
	* @ORM\ManyToOne(targetEntity="Experience")
	*/
	protected $experience;

	/**
	* @ORM\ManyToMany(targetEntity="Tag", inversedBy="missions")
	*/
	protected $tags;

	function __construct()
	{
		$this->tags = new ArrayCollection();
	}

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

	function getExperience()
	{
		return $this->experience;
	}

	function setExperience($experience)
	{
		$this->experience = $experience;
		return $this;
	}

	function getTags()
	{
		return $this->tags;
	}

	function setTags(ArrayCollection $tags)
	{
		$this->tags = $tags;
		return $this;
	}

	function addTag(Tag $tag)
	{
		if(!$this->tags->contains($tag))
			$this->tags->add($tag);
		return $this;
	}

	function removeTag(Tag $tag)
	{
		if ($this->tags->contains($tag))
			$this->tags->removeElement($tag);
		return $this;
	}

	function addTags($tags)
	{
		foreach($tags as $tag)
			$this->addTag($tag);
		return $this;
	}

	function removeTags($tags)
	{
		foreach($tags as $tag)
			$this->removeTag($tag);
		return $this;
	}
}
