<?php
namespace controller;
use model\EventRepository;
use view\View;
use \model\Event;

class LocationsController
{
    private $locationRepository;
    private $view;

    public function __construct(LocationRepository $locationRepository, View $view)
    {
        $this->locationRepository = $locationRepository;
        $this->view = $view;
    }

    public function handleFindLocationById($id = null)
    {
        $location = $this->locationRepository->findLocationById($id);
        $this->view->show(['location'=>$location]);
    }

    public function handleFindLocations()
    {
        $locations = $this->locationRepository->FindLocations();
        $this->view->show(['locations'=>$locations]);
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