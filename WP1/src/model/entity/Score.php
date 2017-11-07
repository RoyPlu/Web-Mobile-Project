<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 13/10/2017
 * Time: 22:28
 */

namespace api\model\entity;


class Score
{

    private $ScoreId = null;
    private $NumericScore = null;
    private $LocationId = null;
    private $Date = null;

    public function __construct($scoreId = null, $locationId = null, $score = null, $date = null)
    {
        $this->ScoreId = $scoreId;
        $this->NumericScore = $score;
        $this->LocationId = $locationId;
        $this->Date = $date;
    }

    /**
     * @return null
     */
    public function getScoreId()
    {
        return $this->ScoreId;
    }

    /**
     * @param null $scoreId
     */
    public function setScoreId($scoreId)
    {
        $this->ScoreId = $scoreId;
    }

    /**
     * @return null
     */
    public function getNumericScore()
    {
        return $this->NumericScore;
    }

    /**
     * @param null $score
     */
    public function setNumericScore($score)
    {
        $this->NumericScore = $score;
    }

    /**
     * @return null
     */
    public function getLocationId()
    {
        return $this->LocationId;
    }

    /**
     * @param null $locationId
     */
    public function setLocationId($locationId)
    {
        $this->LocationId = $locationId;
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

}