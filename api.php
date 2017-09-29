<?php
//require_once 'src/autoload.php';
require_once 'vendor/autoload.php';

use \model\PDOEventRepository;
use \model\Event;
use \view\LocationJsonView;
use \controller\EventsController;
$user = "root";
$password = "vagrant";
$db = "web-mobile-project";
$hostname="localhost";
$pdo = null;
try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$db;", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $locationPDORepository = new PDOLocationRepository($pdo);
    $locationJsonView = new LocationJsonView();
    $locationsController = new LocationsController($locationPDORepository, $locationJsonView);
    $router = new AltoRouter();
    $router->setBasePath('/');

    $router->map('GET', 'locations/[i:id]',
        function ($id) use (&$locationsController) {
            $locationsController->handleFindLocationById($id);
        }
    );

    $router->map('GET', 'locations',
        function () use (&$locationsController) {
            $locationsController->handleFindLocations();
        }
    );


    $router->map('POST', 'insertlocation' ,
        function() use (&$locationsController) {
            $data = json_decode(file_get_contents('php://input'));
            $data = (array)$data;
            var_dump($data);
            $insertedLocation = new Location();
            $insertedLocation->setLocationName($data["locationName"]);

            var_dump($insertedLocation);
            $locationsController->handleCreateLocation($insertedLocation);
        });

    $match = $router->match();
    if($match && is_callable($match['target'])) {
        call_user_func_array($match['target'], $match['params']);
    }

} catch(PDOException $e) {
    print $e->getMessage();
    var_dump($e);
}
