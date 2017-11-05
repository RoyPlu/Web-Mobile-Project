<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 29/03/2017
 * Time: 14:28
 */

namespace api\model\repository;

use api\model\entity\Location;

class PDOLocationRepository implements LocationRepository
{
    private $connection = null;

    public function __construct(\PDO $connection)
    {
        $this->connection = $connection;
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
                return null;
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
            return $location;
        } catch (\Exception $ex) {
            var_dump($ex->getMessage());
            return null;
        }
    }
}