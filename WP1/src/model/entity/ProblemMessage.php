<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 17/10/2017
 * Time: 10:08
 */

namespace api\model\entity;


class ProblemMessage
{

    private $ProblemMessageId = null;
    private $LocationId = null;
    private $Problem = "";
    private $Solved = false;
    private $Date = null;

    public function __construct($problemMessageId = null, $locationId = null, $problem = "", $solved = false, $date = null)
    {
        $this->setProblemMessageId($problemMessageId);
        $this->setLocationId($locationId);
        $this->setProblem($problem);
        $this->setSolved($solved);
        $this->setDate($date);
    }

    /**
     * @return null
     */
    public function getProblemMessageId()
    {
        return $this->ProblemMessageId;
    }

    /**
     * @param null $ProblemMessageId
     */
    public function setProblemMessageId($ProblemMessageId)
    {
        $this->ProblemMessageId = $ProblemMessageId;
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
    public function getProblem(): string
    {
        return $this->Problem;
    }

    /**
     * @param string $Problem
     */
    public function setProblem(string $Problem)
    {
        $this->Problem = $Problem;
    }

    /**
     * @return bool
     */
    public function isSolved(): bool
    {
        return $this->Solved;
    }

    /**
     * @param bool $Solved
     */
    public function setSolved(bool $Solved)
    {
        $this->Solved = $Solved;
    }

    /**
     * @return null
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param null $Date
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
    }

}