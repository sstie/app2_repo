<?php

namespace DeviceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Positions
 */
class Positions
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $utctime;

    /**
     * @var int
     */
    private $deviceId;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $state;


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
     * Set utctime
     *
     * @param \DateTime $utctime
     * @return Positions
     */
    public function setUtctime($utctime)
    {
        $this->utctime = $utctime;

        return $this;
    }

    /**
     * Get utctime
     *
     * @return \DateTime 
     */
    public function getUtctime()
    {
        return $this->utctime;
    }

    /**
     * Set deviceId
     *
     * @param integer $deviceId
     * @return Positions
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * Get deviceId
     *
     * @return integer 
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Positions
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Positions
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Positions
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return Positions
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }
}
