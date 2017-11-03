<?php
namespace api\controller;

use api\model\LocationRepository;
use api\view\View;
use api\model\Location;

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

    public function handleDeleteLocation($id)
    {
        $this->locationRepository->deleteLocation($id);
        $this->view->show(['deleteMessage'=>$id]);
    }
}