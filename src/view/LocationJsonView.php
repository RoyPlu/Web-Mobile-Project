<?php

namespace view;

class EventJsonView implements View
{
    public function show(array $data)
    {
        header('Content-Type: application/json');
        if (isset($data['location'])) {
            $event = $data['location'];
            echo json_encode(['id' => $event->getLocationId(),
                'name' => $event->getLocationName()]);

        } elseif (isset($data['locations'])){
            $locations = $data['locations'];

            $eventArr = [];
            foreach ($locations as $location) {
                $s = json_encode(['id' => $location->getLocationId(),
                    'name' => $location->getLocationName()]);
                $eventArr[] = $s;
            }
            echo "[" . implode(",", $eventArr) . "]";
        }else {
            echo '{}';
        }

    }

}