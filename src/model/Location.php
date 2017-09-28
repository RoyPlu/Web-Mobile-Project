<?php
namespace model;

class Location
{
    private $locationId = null;
    private $locationName = "";

    public function __construct($id = null, $name = "")
    {
        $this->locationId = $id;
        $this->locationName = $name;

    }

    /**
     * @return null
     */
    public function getLocationId()
    {
        return $this->locationId;
    }
    /**
     * @param null $locationId
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }
    /**
     * @param string $locationName
     */
    public function setEventName($locationName)
    {
        $this->locationName = $locationName;
    }
}