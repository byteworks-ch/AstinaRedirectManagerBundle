<?php

namespace Astina\Bundle\RedirectManagerBundle\Entity;

/**
 * Astina\Bundle\RedirectManagerBundle\Entity\MapStats
 */
class MapStats
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var Map
     */
    private $map;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer $count
     */
    private $count = 0;


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
     * @return Map
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param Map $map
     *
     * @return $this
     */
    public function setMap(Map $map)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param $date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set count
     *
     * @param integer $count
     *
     * @return MapStats
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer
     */
    public function getCount()
    {
        return $this->count;
    }
}
