<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 14/10/2017
 * Time: 1:10
 */

namespace api\view;


class ScoreJsonView implements View
{

    public function show(array $data)
    {

        header('Content-Type: application/json');
        if (isset($data['score'])) {
            $event = $data['score'];

            echo json_encode(['id' => $event->getScoreId(),
                'location_id' => $event->getLocationId(),
                    'score' => $event->getNumericScore(),
                        'date' => $event->getDate()]);
        } elseif (isset($data['scores'])){
            $scores = $data['scores'];
            $eventArr = [];

            foreach ($scores as $score) {

                $s = json_encode(['id' => $score->getScoreId(),
                    'location_id' => $score->getLocationId(),
                        'score' => $score->getNumericScore(),
                            'date' => $score->getDate()]);
                $eventArr[] = $s;

            }

            echo "[ " . implode(",", $eventArr) . " ]";
        }else {
            echo '{}';
        }

    }
}