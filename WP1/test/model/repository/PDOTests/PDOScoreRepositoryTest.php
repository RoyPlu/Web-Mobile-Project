<?php
require_once '../../../../src/model/repository/ScoreRepository.php';
require_once '../../../../src/model/entity/Score.php';
require_once '../../../../src/model/repository/PDOScoreRepository.php';

use api\model\entity\Score;
use api\model\repository\PDOScoreRepository;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 7/11/2017
 * Time: 9:54
 */
class PDOScoreRepositoryTest extends TestCase
{

    public function setUp()
    {
        $this->connection = new PDO('sqlite::memory:');
        $this->connection->exec('CREATE TABLE scores (
                        id INT, 
                        location_id INT,
                        score VARCHAR(255),
                        date DATE,
                        PRIMARY KEY (id)
                   )');
    }

    public function tearDown()
    {
        $this->connection=null;
    }


    public function testHandleFindAllScores()
    {
        $id = 1;
        $locationId = 1;
        $score = 'goed';
        $date = null;
        $scoreObj = new Score($id, $locationId, $score, $date);

        $this->connection->exec("INSERT INTO scores(id, location_id, score, date)
                                  VALUES ($id, $locationId, '$score', '$date')");
        $scoreRepository = new PDOScoreRepository($this->connection);

        $actualScore = $scoreRepository->findScores();

        $this->assertEquals([$scoreObj], $actualScore);
    }

    public function testHandleFindScoreById()
    {
        $id = 1;
        $locationId = 1;
        $score = 'goed';
        $date = null;
        $scoreObj = new Score($id, $locationId, $score, $date);

        $this->connection->exec("INSERT INTO scores(id, location_id, score, date)
                                  VALUES ($id, $locationId, '$score', '$date')");
        $scoreRepository = new PDOScoreRepository($this->connection);

        $actualScore = $scoreRepository->findScoreById($id);

        $this->assertEquals($scoreObj, $actualScore);
    }

    public function testFindById_idDoesNotExist_Null()
    {
        $id = 1;
        $scoreRepository = new PDOScoreRepository($this->connection);
        $actualScore = $scoreRepository->findScoreById($id);
        $this->assertNull($actualScore);
    }

    public function testHandleInsertScoreSucceeds()
    {
        $id = null;
        $locationId = 101;
        $score = 'goed';
        $date = '24-09-2017';
        $scoreObj = new Score($id, $locationId, $score, $date);

        $scoreRepository = new PDOScoreRepository($this->connection);

        $insertedScore = $scoreRepository->insertScore($scoreObj);

        $this->assertEquals($scoreObj->getDate(), $insertedScore->getDate());
    }

    public function testHandleFindScoresByLocationId() {

        $id = 1;
        $locationId = 1;
        $score = 'goed';
        $date = null;
        $scoreObj = new Score($id, $locationId, $score, $date);

        $this->connection->exec("INSERT INTO scores(id, location_id, score, date)
                                  VALUES ($id, $locationId, '$score', '$date')");
        $scoreRepository = new PDOScoreRepository($this->connection);

        $actualScore = $scoreRepository->findScoresByLocationId($locationId);

        $this->assertEquals([$scoreObj], $actualScore);

    }

}