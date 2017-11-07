<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 14/10/2017
 * Time: 1:10
 */

namespace api\view;


use PHPUnit\Framework\Error\Warning;

class StatusMessageJsonView implements View
{

    public function show(array $data)
    {

        header('Content-Type: application/json');
        if (isset($data['statusmessage'])) {
            $event = $data['statusmessage'];

            echo json_encode(['id' => $event->getStatusMessageId(),
                'location_id' => $event->getLocationId(),
                    'status' => $event->getStatus(),
                        'date' => $event->getDate()]);
        } elseif (isset($data['statusmessages'])){
            $statusMessages = $data['statusmessages'];
            $eventArr = [];

            foreach ($statusMessages as $statusMessage) {

                $s = json_encode(['id' => $statusMessage->getStatusMessageId(),
                    'location_id' => $statusMessage->getLocationId(),
                        'status' => $statusMessage->getStatus(),
                            'date' => $statusMessage->getDate()]);
                $eventArr[] = $s;

            }

            echo "[ " . implode(",", $eventArr) . " ]";
        }else {
            echo '{}';
        }

    }
}