<?php

require_once '../../../../src/model/repository/ProblemMessageRepository.php';
require_once '../../../../src/model/entity/ProblemMessage.php';
require_once '../../../../src/model/repository/PDOProblemMessageRepository.php';

use api\model\entity\ProblemMessage;
use api\model\repository\PDOProblemMessageRepository;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 27/10/2017
 * Time: 11:28
 */
class PDOProblemMessageRepositoryTest extends TestCase
{

    public function setUp()
    {
        $this->connection = new PDO('sqlite::memory:');
        $this->connection->exec('CREATE TABLE problemmessages (id INT, location_id INT, problem VARCHAR(255),
                                  solved INT, date DATE, severe INT, PRIMARY KEY (id))');
    }

    public function tearDown()
    {
        $this->connection = null;
    }

    public function testHandleFindAllProblemMessages()
    {
        $id = 1;
        $locationId = 1;
        $problem = 'Banken verouderd';
        $date = null;
        $solved = 1;
        $severe = true;

        $problemMessage = new ProblemMessage($id, $locationId, $problem, $solved, $date, $severe);

        $this->connection->exec("INSERT INTO problemmessages(id, location_id, problem, solved, date, severe)
                                  VALUES ($id, $locationId, '$problem', $solved, '$date', '$severe')");
        $problemMessageRepository = new PDOProblemMessageRepository($this->connection);

        $actualProblemMessage = $problemMessageRepository->findProblemMessages();

        $this->assertEquals([$problemMessage], $actualProblemMessage);
    }

    public function testHandleFindProblemMessageByIdFound()
    {
        $id = 1;
        $locationId = 101;
        $problem = 'Alessio is aan het vodden.';
        $solved = 0;
        $date = '2017-03-12';
        $severe = true;

        $problemMessage = new ProblemMessage($id, $locationId, $problem, $solved, $date, $severe);

        $this->connection->exec("INSERT INTO problemmessages (id, location_id, problem, solved, date, severe)
                                  VALUES ($id, $locationId, '$problem', $solved, '$date', $severe)");
        $PDOProblemMessageRepository = new PDOProblemMessageRepository($this->connection);

        $actualProblemMessage = $PDOProblemMessageRepository->findProblemMessageById($id);

     var_dump($problemMessage);
     var_dump($actualProblemMessage);

        $this->assertEquals($problemMessage, $actualProblemMessage);
    }

    public function testFindById_idDoesNotExist_Null()
    {
        $id = 1;
        $problemMessageRepository = new PDOProblemMessageRepository($this->connection);
        $actualProblemMessage = $problemMessageRepository->findProblemMessageById($id);
        $this->assertNull($actualProblemMessage);
    }

    public function testHandleInsertProblemMessageSucceeds()
    {
        $id = null;
        $locationId = 101;
        $problem = 'banken verouderd';
        $date = '24-09-2017';
        $solved = 1;
        $severe = true;
        $problemMessage = new ProblemMessage($id, $locationId, $problem, $solved, $date, $severe);

        $problemMessageRepository = new PDOProblemMessageRepository($this->connection);

        $insertedProblemMessage = $problemMessageRepository->insertProblemMessage($problemMessage);

        $this->assertEquals($problemMessage->getProblem(), $insertedProblemMessage->getProblem());
    }

}