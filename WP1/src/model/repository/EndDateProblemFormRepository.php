<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 5/11/2017
 * Time: 23:46
 */

namespace api\model\repository;


use api\model\entity\EndDateProblemForm;

interface EndDateProblemFormRepository
{

    function findEndDateProblemFormById($id);
    function findEndDateProblemForms();
    function insertEndDateProblemForm(EndDateProblemForm $endDateProblemForm);
    function findEndDateProblemFormsByProblemMessageId($id);

}