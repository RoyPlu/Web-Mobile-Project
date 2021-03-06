<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 17/10/2017
 * Time: 10:17
 */

namespace api\model\repository;

use api\model\entity\ProblemMessage;

class PDOProblemMessageRepository implements ProblemMessageRepository
{

    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    function findProblemMessageById($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM problemmessages WHERE id = ?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($results) > 0) {
                return new ProblemMessage($results[0]['id'], $results[0]['location_id'], $results[0]['problem'], $results[0]['solved'],
                    $results[0]['date'], $results[0]['severe']);
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    function findProblemMessages()
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM problemmessages ORDER BY severe DESC');
            $statement->execute();
            $eventArray = array();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($results); $i++) {
                $eventArray[$i] = new ProblemMessage($results[$i]['id'], $results[$i]['location_id'], $results[$i]['problem'],
                    $results[$i]['solved'], $results[$i]['date'], $results[$i]['severe']);
            }
            return $eventArray;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    function insertProblemMessage(ProblemMessage $problemMessage)
    {
        try {
            $locationId = $problemMessage->getLocationId();
            $problem = $problemMessage->getProblem();
            $solved = $problemMessage->isSolved();
            $date = $problemMessage->getDate();
            $severe = $problemMessage->isSevere();

            $statement = $this->connection->prepare('INSERT INTO problemmessages (location_id, problem, solved, date, severe)
                                                      VALUES(?,?,?,?,?)');

            $statement->bindParam(1, $locationId, \PDO::PARAM_INT);
            $statement->bindParam(2, $problem, \PDO::PARAM_STR);
            $statement->bindParam(3, $solved, \PDO::PARAM_BOOL);
            $statement->bindParam(4, $date);
            $statement->bindParam(5, $severe, \PDO::PARAM_BOOL);

            $statement->execute();
            return $problemMessage;
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
            return null;
        }
    }

    function findProblemMessagesByLocationId($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM problemmessages WHERE location_id = ? ORDER BY severe DESC');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $eventArray = array();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($results); $i++) {
                $eventArray[$i] = new ProblemMessage($results[$i]['id'], $results[$i]['location_id'], $results[$i]['problem'],
                    $results[$i]['solved'], $results[$i]['date'], $results[$i]['severe']);
            }
            return $eventArray;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

}