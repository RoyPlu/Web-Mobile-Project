<?php

namespace api\model\repository;


use api\model\entity\Location;

interface LocationRepository
{
    function findLocationById($id);
    function findLocations();
    function insertLocation(Location $location);
}