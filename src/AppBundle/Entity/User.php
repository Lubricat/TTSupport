<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity()
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $playername;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $roles;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $token;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $result;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pic;

    /**
     * @ORM\Column(type="integer")
     */
    private $count = 0;

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;

        return $this;
    }

    public function getRoles()
    {
        return json_decode($this->roles);
    }

    public function setRoles(array $roles)
    {
        $this->roles = json_encode($roles);

        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function setToken(string $token)
    {
        $this->token = $token;

        return $this;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function setResult(string $result)
    {
        $this->result = $result;

        return $this;
    }

    public function getDice()
    {
        return $this->dice;
    }

    public function setDice(string $dice)
    {
        $this->dice = $dice;

        return $this;
    }

    public function getCount()
    {
        return $this->count;
    }

    public function setCount(int $count)
    {
        $this->count = $count;

        return $this;
    }
    
    public function getPic()
    {
        return $this->pic;
    }

    public function setPic($pic)
    {
        $this->pic = $pic;

        return $this;
    }
    
    public function getPlayername()
    {
        return $this->playername;
    }

    public function setPlayername($p)
    {
        $this->playername = $p;

        return $this;
    }

    public function getSalt()
    {
    }
    
    public function eraseCredentials()
    {
    }
}
