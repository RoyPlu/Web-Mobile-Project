<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 14/10/2017
 * Time: 0:37
 */

namespace api\model\repository;


use api\model\entity\Score;

class PDOScoreRepository implements ScoreRepository
{

    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function findScoreById($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM scores WHERE id = ?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($results) > 0) {
                return new score($results[0]['id'], $results[0]['location_id'], $results[0]['score'], $results[0]['date']);
            } else {
                return null;
            }
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    function findScores()
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM scores');
            $statement->execute();
            $eventArray = array();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($results); $i++) {
                $eventArray[$i] = new score($results[$i]['id'], $results[$i]['location_id'],
                    $results[$i]['score'], $results[$i]['date']);
            }
            return $eventArray;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    function insertScore(Score $score)
    {
        try {

            $numericalScore = $score->getNumericScore();
            $locationId = $score->getLocationId();
            $date = $score->getDate();

            $statement = $this->connection->prepare('INSERT INTO scores (location_id, score , date) VALUES(?,?,?)');

            $statement->bindParam(1, $locationId, \PDO::PARAM_INT);
            $statement->bindParam(2, $numericalScore, \PDO::PARAM_INT);
            $statement->bindParam(3, $date);

            $statement->execute();
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
            return null;
        }
    }

    function findScoresByLocationId($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM scores WHERE location_id = ?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $eventArray = array();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($results); $i++) {
                $eventArray[$i] = new score($results[$i]['id'], $results[$i]['location_id'], $results[$i]['score'], $results[$i]['date']);
            }
            return $eventArray;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }
}