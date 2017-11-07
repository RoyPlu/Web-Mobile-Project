<?php

require_once '../../../../src/model/repository/StatusMessageRepository.php';
require_once '../../../../src/model/entity/StatusMessage.php';
require_once '../../../../src/model/repository/PDOStatusMessageRepository.php';

use api\model\entity\StatusMessage;
use api\model\repository\PDOStatusMessageRepository;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 27/10/2017
 * Time: 9:53
 */
class PDOStatusMessageRepositoryTest extends TestCase
{

    public function setUp()
    {
        $this->connection = new PDO('sqlite::memory:');
        $this->connection->exec('CREATE TABLE statusmessages (id INT, location_id INT, status VARCHAR(255), date DATE, PRIMARY KEY (id))');
    }

    public function tearDown()
    {
        $this->connection = null;
    }

    public function testHandleFindAllStatusMessages()
    {
        $id = 1;
        $locationId = 1;
        $status = 'goed';
        $date = null;
        $statusMessage = new StatusMessage($id, $locationId, $status, $date);

        $this->connection->exec("INSERT INTO statusmessages(id, location_id, status, date)
                                  VALUES ($id, $locationId, '$status', '$date')");
        $statusMessageRepository = new PDOStatusMessageRepository($this->connection);

        $actualStatusMessage = $statusMessageRepository->findStatusMessages();

        $this->assertEquals([$statusMessage], $actualStatusMessage);
    }

    public function testHandleFindStatusMessageByIdFound()
    {
        $id = 1;
        $locationId = 101;
        $status = 'Goed';
        $date = '2017-03-12';
        $statusMessage = new StatusMessage($id, $locationId, $status, $date);

        $this->connection->exec("INSERT INTO statusmessages (id, location_id, status, date) 
                                  VALUES ($id, $locationId, '$status', '$date')");
        $StatusMessageRepository = new PDOStatusMessageRepository($this->connection);

        $actualStatusMessage = $StatusMessageRepository->findStatusMessageById($id);

        $this->assertEquals($statusMessage, $actualStatusMessage);
    }

    public function testFindById_idDoesNotExist_Null()
    {
        $id = 1;
        $statusMessageRepository = new PDOStatusMessageRepository($this->connection);
        $actualStatusMessage = $statusMessageRepository->findStatusMessageById($id);
        $this->assertNull($actualStatusMessage);
    }

    public function testHandleInsertStatusMessageSucceeds()
    {
        $id = null;
        $locationId = 101;
        $status = 'goed';
        $date = '24-09-2017';
        $statusMessage = new StatusMessage($id, $locationId, $status, $date);

        $statusMessageRepository = new PDOStatusMessageRepository($this->connection);

        $insertedStatusMessage = $statusMessageRepository->insertStatusMessage($statusMessage);

        $this->assertEquals($statusMessage->getStatus(), $insertedStatusMessage->getStatus());
    }

}