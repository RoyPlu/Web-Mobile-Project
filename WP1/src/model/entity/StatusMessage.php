<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 13/10/2017
 * Time: 22:28
 */

namespace api\model\entity;


class StatusMessage
{

    private $StatusMessageId = null;
    private $LocationId = null;
    private $Status = "";
    private $Date = null;
    private $EndDate = null;

    public function __construct($statusMessageId = null, $locationId = null, $status = "", $date = null, $endDate = null)
    {
        $this->StatusMessageId = $statusMessageId;
        $this->LocationId = $locationId;
        $this->Status = $status;
        $this->Date = $date;
        $this->EndDate = $endDate;
    }

    /**
     * @return null
     */
    public function getStatusMessageId()
    {
        return $this->StatusMessageId;
    }

    /**
     * @param null $StatusMessageId
     */
    public function setStatusMessageId($StatusMessageId)
    {
        $this->StatusMessageId = $StatusMessageId;
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
    public function getStatus(): string
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     */
    public function setStatus(string $Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return null
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param null $date
     */
    public function setDate($date)
    {
        $this->Date = $date;
    }

    /**
     * @return null
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param null $EndDate
     */
    public function setEndDate($EndDate)
    {
        $this->EndDate = $EndDate;
    }

}