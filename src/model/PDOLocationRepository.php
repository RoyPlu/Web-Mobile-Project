<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 29/03/2017
 * Time: 14:28
 */

namespace model;

class PDOLocationRepository implements LocationRepository
{
    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function deleteLocation($id)
    {
        try {
            $statement = $this->connection->prepare('DELETE FROM events WHERE Id=?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $numberRows = $statement->execute();
            print("$numberRows rows modified");
            return $numberRows;
        } catch (PDOException $e) {
            print 'Exception!: ' . $e->getMessage();
        }
        $pdo = null;
    }

    public function findLocationById($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM events WHERE Id = ?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($results) > 0) {
                return new Event($results[0]['Id'], $results[0]['name'], $results[0]['start'], $results[0]['end'], $results[0]['location'], $results[0]['cost'], $results[0]['personId']);
            } else {
                throw new \Exception();
            }
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    public function findLocations()
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM events');
            $statement->execute();
            $eventArray = array();
            $result = $statement->fetchAll(\PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($result); $i++) {
                $eventArray[$i] = new Event($result[$i]['Id'], $result[$i]['name'], $result[$i]['start'], $result[$i]['end'], $result[$i]['location'], $result[$i]['cost'], $result[$i]['personId']);
            }
            return $eventArray;
        } catch (\Exception $ex) {
            return null;
        }
    }

    public function insertLocation(Location $location)
    {
        var_dump('NOK');
        try {
            $statement = $this->connection->prepare('INSERT INTO locations (name) VALUES(?)');
            $statement->bindParam(1, $location->getLocationName(), \PDO::PARAM_STR);

            $statement->execute();
            var_dump('OK');
        } catch (\Exception $ex) {
            return null;
        }
    }
}