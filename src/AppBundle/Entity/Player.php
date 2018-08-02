<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlayerRepository")
 */
class Player
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var int
     *
     * @ORM\Column(name="cost", type="integer")
     */
    private $cost;

    /**
     * @var int
     *
     * @ORM\Column(name="M", type="integer")
     */
    private $m;

    /**
     * @var int
     *
     * @ORM\Column(name="F", type="integer")
     */
    private $f;

    /**
     * @var int
     *
     * @ORM\Column(name="AG", type="integer")
     */
    private $aG;

    /**
     * @var int
     *
     * @ORM\Column(name="AR", type="integer")
     */
    private $aR;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return Player
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Player
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     *
     * @return Player
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set m
     *
     * @param integer $m
     *
     * @return Player
     */
    public function setM($m)
    {
        $this->m = $m;

        return $this;
    }

    /**
     * Get m
     *
     * @return int
     */
    public function getM()
    {
        return $this->m;
    }

    /**
     * Set f
     *
     * @param integer $f
     *
     * @return Player
     */
    public function setF($f)
    {
        $this->f = $f;

        return $this;
    }

    /**
     * Get f
     *
     * @return int
     */
    public function getF()
    {
        return $this->f;
    }

    /**
     * Set aG
     *
     * @param integer $aG
     *
     * @return Player
     */
    public function setAG($aG)
    {
        $this->aG = $aG;

        return $this;
    }

    /**
     * Get aG
     *
     * @return int
     */
    public function getAG()
    {
        return $this->aG;
    }

    /**
     * Set aR
     *
     * @param integer $aR
     *
     * @return Player
     */
    public function setAR($aR)
    {
        $this->aR = $aR;

        return $this;
    }

    /**
     * Get aR
     *
     * @return int
     */
    public function getAR()
    {
        return $this->aR;
    }
}

