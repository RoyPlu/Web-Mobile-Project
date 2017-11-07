<?php
require_once '../../../../src/model/repository/EndDateProblemFormRepository.php';
require_once '../../../../src/model/entity/EndDateProblemForm.php';
require_once '../../../../src/model/repository/PDOEndDateProblemFormRepository.php';

use api\model\entity\EndDateProblemForm;
use api\model\repository\PDOEndDateProblemFormRepository;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 7/11/2017
 * Time: 10:34
 */
class PDOEndDateProblemFormRepositoryTest extends TestCase
{

    public function setUp()
    {
        $this->connection = new PDO('sqlite::memory:');
        $this->connection->exec('CREATE TABLE enddateproblemforms (
                        id INT, 
                        problemmessage_id INT,
                        end_date DATE,
                        PRIMARY KEY (id)
                   )');
    }

    public function tearDown()
    {
        $this->connection=null;
    }

    public function testHandleFindAllEndDateProblemForms()
    {
        $id = 1;
        $problemMessageId = 1;
        $endDate = null;
        $endDateProblemForm = new EndDateProblemForm($id, $problemMessageId, $endDate);

        $this->connection->exec("INSERT INTO enddateproblemforms(id, problemmessage_id, end_date)
                                  VALUES ($id, $problemMessageId, '$endDate')");
        $endDateProblemFormRepository = new PDOEndDateProblemFormRepository($this->connection);

        $actualEndDateProblemForm = $endDateProblemFormRepository->findEndDateProblemForms();

        $this->assertEquals([$endDateProblemForm], $actualEndDateProblemForm);
    }

    public function testHandleFindEndDateProblemFormById()
    {
        $id = 1;
        $problemMessageId = 1;
        $endDate = null;
        $endDateProblemForm = new EndDateProblemForm($id, $problemMessageId, $endDate);

        $this->connection->exec("INSERT INTO enddateproblemforms(id, problemmessage_id, end_date)
                                  VALUES ($id, $problemMessageId, '$endDate')");
        $endDateProblemFormRepository = new PDOEndDateProblemFormRepository($this->connection);

        $actualEndDateProblemForm = $endDateProblemFormRepository->findEndDateProblemFormById($id);

        $this->assertEquals($endDateProblemForm, $actualEndDateProblemForm);
    }

    public function testFindById_idDoesNotExist_Null()
    {
        $id = 1;
        $endDateProblemFormRepository = new PDOEndDateProblemFormRepository($this->connection);
        $actualEndDateProblemFormRepository = $endDateProblemFormRepository->findEndDateProblemFormById($id);
        $this->assertNull($actualEndDateProblemFormRepository);
    }

    public function testHandleInsertEndDateProblemFormSucceeds()
    {
        $id = null;
        $problemMessageId = 101;
        $endDate = '24-09-2017';
        $endDateProblemForm = new EndDateProblemForm($id, $problemMessageId, $endDate);

        $endDateProblemFormRepository = new PDOEndDateProblemFormRepository($this->connection);

        $insertedEndDateProblemForm = $endDateProblemFormRepository->insertEndDateProblemForm($endDateProblemForm);

        $this->assertEquals($endDateProblemForm->getEndDate(), $insertedEndDateProblemForm->getEndDate());
    }

}