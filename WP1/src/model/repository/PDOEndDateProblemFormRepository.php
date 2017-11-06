<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 5/11/2017
 * Time: 23:51
 */

namespace api\model\repository;


use api\model\entity\EndDateProblemForm;

class PDOEndDateProblemFormRepository implements EndDateProblemFormRepository
{

    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    function findEndDateProblemFormById($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM enddateproblemforms WHERE id = ?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($results) > 0) {
                return new EndDateProblemForm($results[0]['id'], $results[0]['problemmessage_id'], $results[0]['end_date']);
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    function findEndDateProblemForms()
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM enddateproblemforms');
            $statement->execute();
            $eventArray = array();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($results); $i++) {
                $eventArray[$i] = new EndDateProblemForm($results[$i]['id'], $results[$i]['problemmessage_id'], $results[$i]['end_date']);
            }
            return $eventArray;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    function insertEndDateProblemForm(EndDateProblemForm $endDateProblemForm)
    {
        try {
            $problemMessageId = $endDateProblemForm->getProblemId();
            $endDate = $endDateProblemForm->getEndDate();

            $statement = $this->connection->prepare('INSERT INTO enddateproblemforms (problemmessage_id, end_date)
                                                        VALUES(?,?)');

            $statement->bindParam(1, $problemMessageId, \PDO::PARAM_INT);
            $statement->bindParam(2, $endDate);

            $statement->execute();
            return $endDateProblemForm;
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
            return null;
        }
    }

    function findEndDateProblemFormsByProblemMessageId($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM enddateproblemforms WHERE problemmessage_id = ?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($results) > 0) {
                return new EndDateProblemForm($results[0]['id'], $results[0]['problemmessage_id'], $results[0]['end_date']);
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            throw $ex;
        }
    }
}