<?php

require_once '../../../../src/model/repository/LocationRepository.php';
require_once '../../../../src/model/entity/Location.php';
require_once '../../../../src/model/repository/PDOLocationRepository.php';

use api\model\entity\Location;
use api\model\repository\PDOLocationRepository;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 24/10/2017
 * Time: 14:58
 */
class PDOLocationRepositoryTest extends TestCase
{

    public function setUp()
    {
        $this->connection = new PDO('sqlite::memory:');
        $this->connection->exec('CREATE TABLE locations (
                        id INT, 
                        name VARCHAR(255),
                        PRIMARY KEY (id)
                   )');
    }

    public function tearDown()
    {
        $this->connection=null;
    }

    public function testHandleFindAllLocations()
    {
        $id = 1;
        $name = "testname";
        $location = new Location($id, $name);

        $this->connection->exec("INSERT INTO locations(id, name) VALUES ($id, '$name')");
        $LocationRepository = new PDOLocationRepository($this->connection);

        $actualLocation = $LocationRepository->findLocations();

        $this->assertEquals([$location], $actualLocation);
    }

    public function testFindById_idExists_LocationObject()
    {
        $name = "testname";
        $id = 9;
        $location = new Location($id, $name);
        $this->connection->exec("INSERT INTO locations (id, name) VALUES ($id,'$name');");
        $locationRepository = new PDOLocationRepository($this->connection);
        $actualLocation = $locationRepository->findLocationById($id);
        $this->assertEquals($location, $actualLocation);
    }

    public function testFindById_idDoesNotExist_Null()
    {
        $id = 1;
        $locationRepository = new PDOLocationRepository($this->connection);
        $actualLocation = $locationRepository->findLocationById($id);
        $this->assertNull($actualLocation);
    }

    public function testInsertLocation_insertsLocationObject()
    {
        $name = "testname";
        $id = 9;
        $location = new Location($id, $name);
        $locationRepository = new PDOLocationRepository($this->connection);
        $insertedLocation = $locationRepository->insertLocation($location);
        $this->assertEquals($location->getLocationName(), $insertedLocation->getLocationName());
    }

}