<?php
namespace api\model\entity;

class Location
{
    private $LocationId = null;
    private $LocationName = "";

    public function __construct($id = null, $name = "")
    {
        $this->LocationId = $id;
        $this->LocationName = $name;
    }

    /**
     * @return null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }
    /**
     * @param null $LocationId
     */
    public function setLocationId($LocationId)
    {
        $this->LocationId = $LocationId;
    }

    /**
     * @return string
     */
    public function getLocationName()
    {
        return $this->LocationName;
    }
    /**
     * @param string $LocationName
     */
    public function setLocationName($LocationName)
    {
        $this->LocationName = $LocationName;
    }
}