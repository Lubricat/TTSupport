<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Race
 *
 * @ORM\Table(name="race")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RaceRepository")
 */
class Race
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="rr_price", type="integer")
     */
    private $rrPrice;

    /**
     * @var int
     *
     * @ORM\Column(name="apo_price", type="integer")
     */
    private $apoPrice;


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
     * Set name
     *
     * @param string $name
     *
     * @return Race
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set rrPrice
     *
     * @param integer $rrPrice
     *
     * @return Race
     */
    public function setRrPrice($rrPrice)
    {
        $this->rrPrice = $rrPrice;

        return $this;
    }

    /**
     * Get rrPrice
     *
     * @return int
     */
    public function getRrPrice()
    {
        return $this->rrPrice;
    }

    /**
     * Set apoPrice
     *
     * @param integer $apoPrice
     *
     * @return Race
     */
    public function setApoPrice($apoPrice)
    {
        $this->apoPrice = $apoPrice;

        return $this;
    }

    /**
     * Get apoPrice
     *
     * @return int
     */
    public function getApoPrice()
    {
        return $this->apoPrice;
    }
}

