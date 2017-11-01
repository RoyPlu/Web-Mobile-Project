<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 17/10/2017
 * Time: 10:14
 */

namespace api\model;


interface ProblemMessageRepository
{

    function findProblemMessageById($id);
    function findProblemMessages();
    function insertProblemMessage(ProblemMessage $problemMessage);
    function findProblemMessagesByLocationId($id);

}