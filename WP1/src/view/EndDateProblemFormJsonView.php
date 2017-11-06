<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 6/11/2017
 * Time: 0:29
 */

namespace api\view;

class EndDateProblemFormJsonView implements View
{

    public function show(array $data)
    {
        header('Content-Type: application/json');
        if (isset($data['enddateproblemform'])) {
            $event = $data['enddateproblemform'];
            echo json_encode(['id' => $event->getEndDateFormId(),
                'problem_id' => $event->getProblemId(),
                'end_date' => $event->getEndDate()]);

        } elseif (isset($data['enddateproblemforms'])){
            $endDateProblemForms = $data['enddateproblemforms'];

            $eventArr = [];
            foreach ($endDateProblemForms as $endDateProblemForm) {
                $s = json_encode(['id' => $endDateProblemForm->getEndDateFormId(),
                    'problem_id' => $endDateProblemForm->getProblemId(),
                    'end_date' => $endDateProblemForm->getEndDate()]);
                $eventArr[] = $s;
            }

            echo "[ " . implode(",", $eventArr) . " ]";
        }else {
            echo '{}';
        }

    }

}