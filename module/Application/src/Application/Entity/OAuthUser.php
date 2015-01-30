<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="oauth_users")
 */
class OAuthUser
{
	/**
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="NONE")
	 * @ORM\Column(type="string", name="username")
	 */
	protected $userName;
	
	/**
	 * @ORM\Column(type="string")
	 */
	protected $password;
	
	/**
	 * @ORM\Column(type="string", name="first_name")
	 */
	protected $firstName;
	
	/**
	 * @ORM\Column(type="string", name="last_name")
	 */
	protected $lastName;

	public function getUserName()
	{
		return $this->userName;
	}
	
	public function setUserName($userName)
	{
		$this->userName = $userName;
		return $this;
	}
	
	public function getFirstName() 
	{
		return $this->firstName;
	}

	public function setFirstName($firstName) 
	{
		$this->firstName = $firstName;
		return $this;
	}

	public function getLastName() 
	{
		return $this->lastName;
	}

	public function setLastName($lastName) 
	{
		$this->lastName = $lastName;
		return $this;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}
}
