<?php

namespace DeviceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devices
 */
class Device
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var int
     */
    private $devicetypeId;

    /**
     * @var string
     */
    private $icon;


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
     * @return Device
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
     * Set userId
     *
     * @param integer $userId
     * @return Device
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set devicetypeId
     *
     * @param integer $devicetypeId
     * @return Device
     */
    public function setDevicetypeId($devicetypeId)
    {
        $this->devicetypeId = $devicetypeId;

        return $this;
    }

    /**
     * Get devicetypeId
     *
     * @return integer 
     */
    public function getDevicetypeId()
    {
        return $this->devicetypeId;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return Device
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string 
     */
    public function getIcon()
    {
        return $this->icon;
    }
}
