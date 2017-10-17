<?php

namespace api\model;


interface LocationRepository
{
    function findLocationById($id);
    function findLocations();
    function insertLocation(Location $location);
    function deleteLocation($id);
}