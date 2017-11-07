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
    private $Score = null;
    private $LocationId = null;
    private $Date = null;

    public function __construct($scoreId = null, $locationId = null, $score = null, $date = null)
    {
        $this->ScoreId = $scoreId;
        $this->LocationId = $locationId;
        $this->Score = $score;
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
     * @param null $ScoreId
     */
    public function setScoreId($ScoreId)
    {
        $this->ScoreId = $ScoreId;
    }

    /**
     * @return null
     */
    public function getScore()
    {
        return $this->Score;
    }

    /**
     * @param null $Score
     */
    public function setScore($Score)
    {
        $this->Score = $Score;
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