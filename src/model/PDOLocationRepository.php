<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 29/03/2017
 * Time: 14:28
 */

namespace api\model;

class PDOLocationRepository implements LocationRepository
{
    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
    }

    public function deleteLocation($id)
    {
        /*try {
            $statement = $this->connection->prepare('DELETE FROM locations WHERE id=?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $numberRows = $statement->execute();
            print("$numberRows rows modified");
            return $numberRows;
        } catch (PDOException $e) {
            print 'Exception!: ' . $e->getMessage();
        }
        $pdo = null;
        */
    }

    public function findLocationById($id)
    {
        try {
            $statement = $this->connection->prepare('SELECT * FROM locations WHERE id = ?');
            $statement->bindParam(1, $id, \PDO::PARAM_INT);
            $statement->execute();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            if (count($results) > 0) {
                return new Location($results[0]['id'], $results[0]['name']);
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
            $statement = $this->connection->prepare('SELECT * FROM locations');
            $statement->execute();
            $eventArray = array();
            $results = $statement->fetchAll(\PDO::FETCH_ASSOC);
            for ($i = 0; $i < count($results); $i++) {
                $eventArray[$i] = new Location($results[$i]['id'], $results[$i]['name']);
            }
            return $eventArray;
        } catch (\Exception $ex) {
            throw $ex;
        }
    }

    public function insertLocation(Location $location)
    {
        try {
            $locName = $location->getLocationName();
            $statement = $this->connection->prepare('INSERT INTO locations (name) VALUES(?)');
            $statement->bindParam(1, $locName, \PDO::PARAM_STR);

            $statement->execute();
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
            return null;
        }
    }
}