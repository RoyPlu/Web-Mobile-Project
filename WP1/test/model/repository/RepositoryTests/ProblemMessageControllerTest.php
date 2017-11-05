<?php

require_once '../../../../src/model/repository/ProblemMessageRepository.php';
require_once '../../../../src/model/entity/ProblemMessage.php';
require_once '../../../../src/model/repository/PDOProblemMessageRepository.php';
require_once '../../../../src/view/View.php';
require_once '../../../../src/controller/ProblemMessageController.php';

use api\controller\ProblemMessageController;
use api\model\entity\ProblemMessage;
use api\model\repository\ProblemMessageRepository;
use api\view\View;
use PHPUnit\Framework\TestCase;

/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 3/11/2017
 * Time: 13:10
 */
class ProblemMessageControllerTest extends TestCase
{
    /**
     * @var ProblemMessageRepository|PHPUnit_Framework_MockObject_MockObject $mockProblemMessageRepo
     */
    private $mockProblemMessageRepo;

    /**
     * @var View|PHPUnit_Framework_MockObject_MockObject $mockView
     */
    private $mockView;

    private $problemMessage;

    public function setUp()
    {
        $this->mockProblemMessageRepo = $this->getMockBuilder('api\model\repository\ProblemMessageRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $this->mockView = $this->getMockBuilder('\api\view\View')->getMock();
        $this->problemMessage = new ProblemMessage(5, 5, 'banken verouderd', 0, null);
    }

    public function tearDown()
    {
        $this->mockLocationRepo = null;
    }

    public function testFindProblemMessageById_idExists_ProblemMessageObject()
    {
        $this->mockProblemMessageRepo->expects($this->atLeastOnce())
            ->method('findProblemMessageById')
            ->will($this->returnValue($this->problemMessage));

        $this->mockView->expects($this->once())
            ->method('show')
            ->with($this->equalTo(['problemmessage' => $this->problemMessage]))
            ->will($this->returnCallback(function ($object) {
                /** @var ProblemMessage $pm */
                $pm = $object['problemmessage'];
                $this->assertEquals($this->problemMessage, $pm);
            }));

        $problemMessageController = new ProblemMessageController($this->mockProblemMessageRepo, $this->mockView);
        $problemMessageController->handleFindProblemMessageById();
    }

    public function testFindProblemMessageById_idDoesNotExist_Null() {
        $this->mockProblemMessageRepo->expects($this->atLeastOnce())
            ->method('findProblemMessageById')
            ->will($this->returnValue(null));

        $this->mockView->expects($this->once())
            ->method('show')
            ->with($this->equalTo(['problemmessage' => null]))
            ->will($this->returnCallback(function ($object) {
                /** @var ProblemMessage $pm */
                $pm = $object['problemmessage'];
                $this->assertNull($pm);
            }));

        $problemMessageController = new ProblemMessageController($this->mockProblemMessageRepo, $this->mockView);
        $problemMessageController->handleFindProblemMessageById();
    }

}