<?php
//require_once 'src/autoload.php';
require_once 'vendor/autoload.php';

use \model\PDOEventRepository;
use \model\Event;
use \view\EventJsonView;
use \controller\EventsController;
$user = "root";
$password = "";
$db = "web-mob-project";
$hostname="localhost";
$pdo = null;
try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$db;", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $eventPDORepository = new PDOEventRepository($pdo);
    $eventJsonView = new EventJsonView();
    $eventsController = new EventsController($eventPDORepository, $eventJsonView);
    $router = new AltoRouter();
    $router->setBasePath('/');

    $router->map('GET', 'location/[i:id]',
        function ($id) use (&$locationsController) {
            $locationsController->handleFindLocationById($id);
        }
    );

    $router->map('GET', 'locations',
        function () use (&$locationsController) {
            $locationsController->handleFindLocation();
        }
    );

    $router->map('GET', 'events/person/[i:id]',
        function ($id) use (&$eventsController) {
            $eventsController->handleFindEventByPersonId($id);
        }
    );

    $router->map('GET', 'events/',
        function () use (&$eventsController) {
            $from = $_GET["from"];
            $until = $_GET["until"];
            $eventsController->handleFindEventByDate($from, $until);
        }
    );

    $router->map('GET', 'person/[i:id]/events/',
        function ($id) use (&$eventsController) {
            $from = $_GET["from"];
            $until = $_GET["until"];
            $eventsController->handleFindEventByPersonAndDate($id, $from, $until);
        }
    );

    $router->map('POST', 'insertevent' ,
        function() use (&$eventsController) {
            $data = json_decode(file_get_contents('php://input'));
            $data = (array)$data;
            var_dump($data);
            $insertedEvent = new Event();
            $insertedEvent->setEventName($data["eventName"]);
            $insertedEvent->setCost($data["eventCost"]);
            $insertedEvent->setEventLocation($data["eventLocation"]);
            $insertedEvent->setEventStart($data["eventStart"]);
            $insertedEvent->setEventEnd($data["eventEnd"]);
            $insertedEvent->setPersonId($data["personId"]);

            var_dump($insertedEvent);
            $eventsController->handleCreateEvent($insertedEvent);
    });

    $match = $router->match();
    if($match && is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    }

} catch(PDOException $e) {
    print $e->getMessage();
    var_dump($e);
}
