<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 17/10/2017
 * Time: 10:28
 */

namespace api\view;


class ProblemMessageJsonView implements View
{
    public function show(array $data)
    {

        header('Content-Type: application/json');
        if (isset($data['problemmessage'])) {
            $event = $data['problemmessage'];

            echo json_encode(['id' => $event->getProblemMessageId(),
                'location_id' => $event->getLocationId(),
                'problem' => $event->getProblem(),
                'solved' => $event->isSolved(),
                'date' => $event->getDate()]);
        } elseif (isset($data['problemmessages'])){
            $problemMessages = $data['problemmessages'];
            $eventArr = [];

            foreach ($problemMessages as $problemMessage) {

                $s = json_encode(['id' => $problemMessage->getProblemMessageId(),
                    'location_id' => $problemMessage->getLocationId(),
                    'problem' => $problemMessage->getProblem(),
                    'solved' => $problemMessage->isSolved(),
                    'date' => $problemMessage->getDate()]);
                $eventArr[] = $s;

            }

            echo "[ " . implode(",", $eventArr) . " ]";
        }else {
            echo '{}';
        }

    }

}