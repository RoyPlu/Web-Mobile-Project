<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 14/10/2017
 * Time: 0:37
 */

namespace api\model\repository;


use api\model\entity\StatusMessage;

class PDOStatusMessageRepository implements StatusMessageRepository
{

    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function findStatusMessageById($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM statusmessages WHERE id = ?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($results) > 0) {
                return new StatusMessage($results[0]['id'], $results[0]['location_id'], $results[0]['status'], $results[0]['date']);
            } else {
                throw new \Exception();
            }
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    function findStatusMessages()
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM statusmessages');
            $statement->execute();
            $eventArray = array();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($results); $i++) {
                $eventArray[$i] = new StatusMessage($results[$i]['id'], $results[$i]['location_id'],
                    $results[$i]['status'], $results[$i]['date']);
            }
            return $eventArray;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    function insertStatusMessage(StatusMessage $statusMessage)
    {
        try {
            $status = $statusMessage->getStatus();
            $locationId = $statusMessage->getLocationId();
            $date = $statusMessage->getDate();

            $statement = $this->connection->prepare('INSERT INTO statusmessages (status, location_id, date) VALUES(?,?,?)');

            $statement->bindParam(1, $status, \PDO::PARAM_STR);
            $statement->bindParam(2, $locationId, \PDO::PARAM_INT);
            $statement->bindParam(3, $date);

            $statement->execute();
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
            return null;
        }
    }
}