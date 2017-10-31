<?php
//require_once 'src/autoload.php';
require './vendor/autoload.php';
require 'vendor/altorouter/altorouter/AltoRouter.php';

use api\controller\LocationsController;
use api\controller\ProblemMessageController;
use api\model\Location;
use api\model\PDOLocationRepository;
use api\model\PDOProblemMessageRepository;
use api\model\PDOStatusMessageRepository;
use api\model\ProblemMessage;
use api\model\StatusMessage;
use api\view\LocationJsonView;
use api\view\ProblemMessageJsonView;
use api\view\StatusMessageJsonView;
use api\controller\StatusMessageController;

$user = "root";
$password = "";
$db = "web-mobile-project-wp1";
$hostname="localhost:7777";
$pdo = null;

try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$db;", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //locations
    $locationPDORepository = new PDOLocationRepository($pdo);
    $locationJsonView = new LocationJsonView();
    $locationsController = new LocationsController($locationPDORepository, $locationJsonView);

    //status messages
    $statusMessagePDORepository = new PDOStatusMessageRepository($pdo);
    $statusMessageJsonView = new StatusMessageJsonView();
    $statusMessageController = new StatusMessageController($statusMessagePDORepository, $statusMessageJsonView);

    //problem messages
    $problemMessagePDORepository = new PDOProblemMessageRepository($pdo);
    $problemMessageJsonView = new ProblemMessageJsonView();
    $problemMessageController = new ProblemMessageController($problemMessagePDORepository, $problemMessageJsonView);

    $router = new AltoRouter();
    $router->setBasePath('/Web-Mobile-Project/api.php');

    $router->map('GET', '/locations/[i:id]',
        function ($id) use (&$locationsController) {
            $locationsController->handleFindLocationById($id);
        }
    );

    $router->map('GET', '/locations',
        function () use (&$locationsController) {
            $locationsController->handleFindLocations();
        }
    );

    $router->map('POST', '/insertlocation/' ,
        function() use (&$locationsController) {
            $data = json_decode(file_get_contents('php://input'));
            $data = (array)$data[0];

            var_dump($data);

            $insertedLocation = new Location();
            $insertedLocation->setLocationName($data['name']);

            $locationsController->handleCreateLocation($insertedLocation);
        }
    );

    $router->map('GET', '/statusmessage/[i:id]',
        function ($id) use (&$statusMessageController) {
            $statusMessageController->handleFindStatusMessageById($id);
        }
    );

    $router->map('GET', '/statusmessages',
        function () use (&$statusMessageController) {
            $statusMessageController->handleFindStatusMessages();
        }
    );

    $router->map('POST', '/insertstatusmessage/',
        function() use (&$statusMessageController) {
            $data = json_decode(file_get_contents('php://input'));
            $data = (array)$data[0];

            var_dump($data);

            $insertedStatusMessage = new StatusMessage();
            $insertedStatusMessage->setStatus($data['status']);
            $insertedStatusMessage->setLocationId($data['location_id']);
            $insertedStatusMessage->setDate($data['date']);

            $statusMessageController->handleCreateStatusMessage($insertedStatusMessage);
        }
    );

    $router->map('GET', '/problemmessage/[i:id]',
        function($id) use (&$problemMessageController) {
            $problemMessageController->handleFindProblemMessageById($id);
        }
    );

    $router->map('GET', '/problemmessages',
        function () use (&$problemMessageController) {
            $problemMessageController->handleFindProblemMessages();
        }
    );

    $router->map('POST', '/insertproblemmessage/',
        function() use (&$problemMessageController) {
            $data = json_decode(file_get_contents('php://input'));
            $data = (array)$data[0];

            var_dump($data);

            $insertedProblemMessage = new ProblemMessage();
            $insertedProblemMessage->setLocationId($data['location_id']);
            $insertedProblemMessage->setProblem($data['problem']);
            $insertedProblemMessage->setSolved($data['solved']);
            $insertedProblemMessage->setDate($data['date']);

            $problemMessageController->handleCreateStatusMessage($insertedProblemMessage);
        }
    );

    $match = $router->match();
    if($match && is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    }

} catch(PDOException $e) {
    print $e->getMessage();
    var_dump($e);
}
