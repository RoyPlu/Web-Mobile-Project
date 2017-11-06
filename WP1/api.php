<?php
//require_once 'src/autoload.php';
require './vendor/autoload.php';
require 'vendor/altorouter/altorouter/AltoRouter.php';

use api\controller\EndDateProblemFormController;
use api\controller\LocationsController;
use api\controller\ProblemMessageController;
use api\controller\ScoreController;
use api\model\entity\EndDateProblemForm;
use api\model\entity\Location;
use api\model\entity\ProblemMessage;
use api\model\entity\Score;
use api\model\entity\StatusMessage;
use api\model\repository\PDOEndDateProblemFormRepository;
use api\model\repository\PDOLocationRepository;
use api\model\repository\PDOProblemMessageRepository;
use api\model\repository\PDOScoreRepository;
use api\model\repository\PDOStatusMessageRepository;
use api\view\LocationJsonView;
use api\view\ProblemMessageJsonView;
use api\view\ScoreJsonView;
use api\view\StatusMessageJsonView;
use api\controller\StatusMessageController;
use api\view\EndDateProblemFormJsonView;

$user = "root";
$password = "";
$db = "web-mobile-project";
$hostname="localhost";
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

    //scores
    $scorePDORepository = new PDOScoreRepository($pdo);
    $scoreJsonView = new ScoreJsonView();
    $scoreController = new ScoreController($scorePDORepository, $scoreJsonView);

    //enddateproblems
    $endDateProblemPDORepository = new PDOEndDateProblemFormRepository($pdo);
    $endDateJsonView = new EndDateProblemFormJsonView();
    $endDateProblemFormController = new EndDateProblemFormController($endDateProblemPDORepository, $endDateJsonView);

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

    $router->map('GET', '/locations/[i:id]/problems',
        function ($id) use (&$problemMessageController) {
            $problemMessageController->handleFindProblemMessagesByLocationId($id);
        }
    );

    $router->map('GET', '/locations/[i:id]/status',
        function ($id) use (&$statusMessageController) {
            $statusMessageController->handleFindStatusMessagesByLocationId($id);
        }
    );

    $router->map('GET', '/locations/[i:id]/scores',
        function ($id) use (&$scoreController) {
            $scoreController->handleFindScoresByLocationId($id);
        }
    );

    $router->map('POST', '/locations/' ,
        function() use (&$locationsController) {
            $data = json_decode(file_get_contents('php://input'));
            $data = (array)$data[0];

            var_dump($data);

            $insertedLocation = new Location();
            $insertedLocation->setLocationName($data['name']);

            $locationsController->handleCreateLocation($insertedLocation);
        }
    );

    $router->map('GET', '/statusmessages/[i:id]',
        function ($id) use (&$statusMessageController) {
            $statusMessageController->handleFindStatusMessageById($id);
        }
    );

    $router->map('GET', '/statusmessages',
        function () use (&$statusMessageController) {
            $statusMessageController->handleFindStatusMessages();
        }
    );

    $router->map('POST', '/statusmessages/',
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

    $router->map('GET', '/problemmessages/[i:id]',
        function($id) use (&$problemMessageController) {
            $problemMessageController->handleFindProblemMessageById($id);
        }
    );

    $router->map('GET', '/problemmessages',
        function () use (&$problemMessageController) {
            $problemMessageController->handleFindProblemMessages();
        }
    );

    $router->map('POST', '/problemmessages/',
        function() use (&$problemMessageController) {
            $data = json_decode(file_get_contents('php://input'));
            $data = (array)$data[0];

            var_dump($data);

            $insertedProblemMessage = new ProblemMessage();
            $insertedProblemMessage->setLocationId($data['location_id']);
            $insertedProblemMessage->setProblem($data['problem']);
            $insertedProblemMessage->setSolved($data['solved']);
            $insertedProblemMessage->setDate($data['date']);
            $insertedProblemMessage->setSevere($data['severe']);

            $problemMessageController->handleCreateStatusMessage($insertedProblemMessage);
        }
    );

    $router->map('GET', '/problemmessages/[i:id]/enddate',
        function($id) use (&$endDateProblemFormController) {
            $endDateProblemFormController->handleFindEndDateProblemFormByProblemMessageId($id);
        }
    );

    $router->map('GET', '/scores',
        function () use (&$scoreController) {
            $scoreController->handleFindScores();
        }
    );

    $router->map('GET', '/scores/[i:id]',
        function($id) use (&$scoreController) {
            $scoreController->handleFindScoreById($id);
        }
    );

    $router->map('POST', '/scores/',
        function() use (&$scoreController) {
            $data = json_decode(file_get_contents('php://input'));
            $data = (array)$data[0];

            var_dump($data);

            $insertedScore = new Score();
            $insertedScore->setLocationId($data['location_id']);
            $insertedScore->setScore($data['score']);
            $insertedScore->setDate($data['date']);

            $scoreController->handleCreateScore($insertedScore);
        }
    );

    $router->map('GET', '/enddateproblems',
        function () use (&$endDateProblemFormController) {
            $endDateProblemFormController->handleFindEndDateProblemForms();
        }
    );

    $router->map('GET', '/enddateproblems/[i:id]',
        function($id) use (&$endDateProblemFormController) {
            $endDateProblemFormController->handleFindEndDateProblemFormById($id);
        }
    );

    $router->map('POST', '/enddateproblems/',
        function() use (&$endDateProblemFormController) {
            $data = json_decode(file_get_contents('php://input'));
            $data = (array)$data[0];

            var_dump($data);

            $insertedEndDateProblem = new EndDateProblemForm();
            $insertedEndDateProblem->setProblemId($data['problemmessage_id']);
            $insertedEndDateProblem->setEndDate($data['end_date']);

            $endDateProblemFormController->handleCreateEndDateProblemForm($insertedEndDateProblem);
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
