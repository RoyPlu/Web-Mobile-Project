<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 14/10/2017
 * Time: 0:27
 */

namespace api\model\repository;


use api\model\entity\StatusMessage;

interface StatusMessageRepository
{

    function findStatusMessageById($id);
    function findStatusMessages();
    function insertStatusMessage(StatusMessage $statusMessage);

}