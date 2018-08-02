<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class Team
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="tresor_init", type="integer")
     */
    private $tresorInit;

    /**
     * @var int
     *
     * @ORM\Column(name="tresor", type="integer")
     */
    private $tresor;

    /**
     * @var int
     *
     * @ORM\Column(name="team_value", type="integer")
     */
    private $teamValue;

    /**
     * @var int
     *
     * @ORM\Column(name="reroll", type="integer")
     */
    private $reroll;

    /**
     * @var int
     *
     * @ORM\Column(name="pompo", type="integer")
     */
    private $pompo;

    /**
     * @var int
     *
     * @ORM\Column(name="assist", type="integer")
     */
    private $assist;

    /**
     * @var int
     *
     * @ORM\Column(name="pop", type="integer")
     */
    private $pop;

    /**
     * @var bool
     *
     * @ORM\Column(name="apo", type="boolean")
     */
    private $apo;


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
     * @return Team
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
     * Set tresorInit
     *
     * @param integer $tresorInit
     *
     * @return Team
     */
    public function setTresorInit($tresorInit)
    {
        $this->tresorInit = $tresorInit;

        return $this;
    }

    /**
     * Get tresorInit
     *
     * @return int
     */
    public function getTresorInit()
    {
        return $this->tresorInit;
    }

    /**
     * Set tresor
     *
     * @param integer $tresor
     *
     * @return Team
     */
    public function setTresor($tresor)
    {
        $this->tresor = $tresor;

        return $this;
    }

    /**
     * Get tresor
     *
     * @return int
     */
    public function getTresor()
    {
        return $this->tresor;
    }

    /**
     * Set teamValue
     *
     * @param integer $teamValue
     *
     * @return Team
     */
    public function setTeamValue($teamValue)
    {
        $this->teamValue = $teamValue;

        return $this;
    }

    /**
     * Get teamValue
     *
     * @return int
     */
    public function getTeamValue()
    {
        return $this->teamValue;
    }

    /**
     * Set reroll
     *
     * @param integer $reroll
     *
     * @return Team
     */
    public function setReroll($reroll)
    {
        $this->reroll = $reroll;

        return $this;
    }

    /**
     * Get reroll
     *
     * @return int
     */
    public function getReroll()
    {
        return $this->reroll;
    }

    /**
     * Set pompo
     *
     * @param integer $pompo
     *
     * @return Team
     */
    public function setPompo($pompo)
    {
        $this->pompo = $pompo;

        return $this;
    }

    /**
     * Get pompo
     *
     * @return int
     */
    public function getPompo()
    {
        return $this->pompo;
    }

    /**
     * Set assist
     *
     * @param integer $assist
     *
     * @return Team
     */
    public function setAssist($assist)
    {
        $this->assist = $assist;

        return $this;
    }

    /**
     * Get assist
     *
     * @return int
     */
    public function getAssist()
    {
        return $this->assist;
    }

    /**
     * Set pop
     *
     * @param integer $pop
     *
     * @return Team
     */
    public function setPop($pop)
    {
        $this->pop = $pop;

        return $this;
    }

    /**
     * Get pop
     *
     * @return int
     */
    public function getPop()
    {
        return $this->pop;
    }

    /**
     * Set apo
     *
     * @param boolean $apo
     *
     * @return Team
     */
    public function setApo($apo)
    {
        $this->apo = $apo;

        return $this;
    }

    /**
     * Get apo
     *
     * @return bool
     */
    public function getApo()
    {
        return $this->apo;
    }
}

