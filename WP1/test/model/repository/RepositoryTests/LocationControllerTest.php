<?php

require_once '../../../../src/model/repository/LocationRepository.php';
require_once '../../../../src/model/entity/Location.php';
require_once '../../../../src/model/repository/PDOLocationRepository.php';
require_once '../../../../src/view/View.php';
require_once '../../../../src/controller/LocationsController.php';

use api\controller\LocationsController;
use api\model\entity\Location;
use api\model\repository\LocationRepository;
use api\view\View;
use PHPUnit\Framework\TestCase;
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 31/10/2017
 * Time: 13:35
 */
class LocationControllerTest extends TestCase
{
    /**
     * @var LocationRepository|PHPUnit_Framework_MockObject_MockObject $mockLocationRepo
     */
    private $mockLocationRepo;

    /**
     * @var View|PHPUnit_Framework_MockObject_MockObject $mockView
     */
    private $mockView;
    /**
     * @var Location $location
     */
    private $location;

    public function setUp()
    {
        $this->mockLocationRepo = $this->getMockBuilder('api\model\repository\LocationRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $this->mockView = $this->getMockBuilder('\api\view\View')->getMock();
        $this->location = new Location(123, 'BE-123');
    }

    public function tearDown()
    {
        $this->mockLocationRepo = null;
    }

    public function testFindLocationById_idExists_LocationObject()
    {
        $this->mockLocationRepo->expects($this->atLeastOnce())
            ->method('findLocationById')
            ->will($this->returnValue($this->location));

        $this->mockView->expects($this->once())
            ->method('show')
            ->with($this->equalTo(['location' => $this->location]))
            ->will($this->returnCallback(function ($object) {
                /** @var Location $l */
                $l = $object['location'];
                $this->assertEquals($this->location, $l);
            }));

        $locationController = new LocationsController($this->mockLocationRepo, $this->mockView);
        $locationController->handleFindLocationById();
    }

    public function testFindLocationById_idDoesNotExist_Null() {
        $this->mockLocationRepo->expects($this->atLeastOnce())
            ->method('findLocationById')
            ->will($this->returnValue(null));

        $this->mockView->expects($this->once())
            ->method('show')
            ->with($this->equalTo(['location' => null]))
            ->will($this->returnCallback(function ($object) {
                /** @var Location $l */
                $l = $object['location'];
                $this->assertNull($l);
            }));

        $locationController = new LocationsController($this->mockLocationRepo, $this->mockView);
        $locationController->handleFindLocationById();
    }

}