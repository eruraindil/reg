<?php
namespace Stikmen\RegBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Event
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $name;

    /**
     * @ORM\Column(type="datetimetz")
     */
    protected $starttime;

    /**
     * @ORM\Column(type="datetimetz")
     */
    protected $endtime;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $cost;

    /**
     * @ORM\Column(type="integer")
     */
    protected $curAttendance;

    /**
     * @ORM\Column(type="integer")
     */
    protected $maxAttendance;

    /**
     * @ORM\Column(type="string", length=128)
     */
    protected $location;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Event
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
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return Event
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;

        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set endtime
     *
     * @param \DateTime $endtime
     * @return Event
     */
    public function setEndtime($endtime)
    {
        $this->endtime = $endtime;

        return $this;
    }

    /**
     * Get endtime
     *
     * @return \DateTime 
     */
    public function getEndtime()
    {
        return $this->endtime;
    }

    /**
     * Set cost
     *
     * @param string $cost
     * @return Event
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set curAttendance
     *
     * @param integer $curAttendance
     * @return Event
     */
    public function setCurAttendance($curAttendance)
    {
        $this->curAttendance = $curAttendance;

        return $this;
    }

    /**
     * Get curAttendance
     *
     * @return integer 
     */
    public function getCurAttendance()
    {
        return $this->curAttendance;
    }

    /**
     * Set maxAttendance
     *
     * @param integer $maxAttendance
     * @return Event
     */
    public function setMaxAttendance($maxAttendance)
    {
        $this->maxAttendance = $maxAttendance;

        return $this;
    }

    /**
     * Get maxAttendance
     *
     * @return integer 
     */
    public function getMaxAttendance()
    {
        return $this->maxAttendance;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Event
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
