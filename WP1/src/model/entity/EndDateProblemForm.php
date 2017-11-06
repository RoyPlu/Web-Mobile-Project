<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 5/11/2017
 * Time: 23:37
 */

namespace api\model\entity;


class EndDateProblemForm
{

    private $endDateFormId = null;
    private $ProblemId = null;
    private $EndDate = null;

    public function __construct($id = null, $problemId = null, $endDate = null)
    {
        $this->endDateFormId = $id;
        $this->ProblemId = $problemId;
        $this->EndDate = $endDate;
    }

    /**
     * @return null
     */
    public function getEndDateFormId()
    {
        return $this->endDateFormId;
    }

    /**
     * @param null $endDateFormId
     */
    public function setEndDateFormId($endDateFormId)
    {
        $this->endDateFormId = $endDateFormId;
    }

    /**
     * @return null
     */
    public function getProblemId()
    {
        return $this->ProblemId;
    }

    /**
     * @param null $ProblemId
     */
    public function setProblemId($ProblemId)
    {
        $this->ProblemId = $ProblemId;
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