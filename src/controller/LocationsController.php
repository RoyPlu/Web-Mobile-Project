<?php
namespace api\controller;

use api\model\entity\Location;
use api\model\repository\LocationRepository;
use api\view\View;

class LocationsController
{
    private $locationRepository;
    private $view;

    /**
     * LocationsController constructor.
     * @param LocationRepository $locationRepository
     * @param View $view
     */
    public function __construct(LocationRepository $locationRepository, View $view)
    {
        $this->locationRepository = $locationRepository;
        $this->view = $view;
    }

    public function handleFindLocationById($id = null)
    {
        $location = $this->locationRepository->findLocationById($id);
        $this->view->show(['location' => $location]);
    }

    public function handleFindLocations()
    {
        $locations = $this->locationRepository->FindLocations();
        $this->view->show(['locations' => $locations]);
    }

    public function handleCreateLocation(Location $location)
    {
        $this->locationRepository->insertLocation($location);
    }

}