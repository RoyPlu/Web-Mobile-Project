<?php

require_once '../../../../src/model/repository/StatusMessageRepository.php';
require_once '../../../../src/model/entity/StatusMessage.php';
require_once '../../../../src/model/repository/PDOStatusMessageRepository.php';
require_once '../../../../src/view/View.php';
require_once '../../../../src/controller/StatusMessageController.php';

use api\controller\StatusMessageController;
use api\model\entity\StatusMessage;
use api\model\repository\StatusMessageRepository;
use api\view\View;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 3/11/2017
 * Time: 14:24
 */
class StatusMessageControllerTest extends TestCase
{

    /**
     * @var StatusMessageRepository|PHPUnit_Framework_MockObject_MockObject $mockStatusMessageRepo
     */
    private $mockStatusMessageRepo;

    /**
     * @var View|PHPUnit_Framework_MockObject_MockObject $mockView
     */
    private $mockView;

    private $statusMessage;

    public function setUp()
    {
        $this->mockStatusMessageRepo = $this->getMockBuilder('api\model\repository\StatusMessageRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $this->mockView = $this->getMockBuilder('\api\view\View')->getMock();
        $this->statusMessage = new StatusMessage(5, 5, 'goed', null);
    }

    public function tearDown()
    {
        $this->mockStatusMessageRepo = null;
    }

    public function testFindStatusMessageById_idExists_StatusMessageObject()
    {
        $this->mockStatusMessageRepo->expects($this->atLeastOnce())
            ->method('findStatusMessageById')
            ->will($this->returnValue($this->statusMessage));

        $this->mockView->expects($this->once())
            ->method('show')
            ->with($this->equalTo(['statusmessage' => $this->statusMessage]))
            ->will($this->returnCallback(function ($object) {
                /** @var StatusMessage $sm */
                $sm = $object['statusmessage'];
                $this->assertEquals($this->statusMessage, $sm);
            }));

        $statusMessageController = new StatusMessageController($this->mockStatusMessageRepo, $this->mockView);
        $statusMessageController->handleFindStatusMessageById();
    }

    public function testFindStatusMessageById_idDoesNotExist_Null() {
        $this->mockStatusMessageRepo->expects($this->atLeastOnce())
            ->method('findStatusMessageById')
            ->will($this->returnValue(null));

        $this->mockView->expects($this->once())
            ->method('show')
            ->with($this->equalTo(['statusmessage' => null]))
            ->will($this->returnCallback(function ($object) {
                /** @var StatusMessage $sm */
                $sm = $object['statusmessage'];
                $this->assertNull($sm);
            }));

        $statusMessageController = new StatusMessageController($this->mockStatusMessageRepo, $this->mockView);
        $statusMessageController->handleFindStatusMessageById();
    }


}