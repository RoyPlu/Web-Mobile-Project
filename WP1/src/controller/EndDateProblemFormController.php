<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 6/11/2017
 * Time: 0:14
 */

namespace api\controller;


use api\model\entity\EndDateProblemForm;
use api\model\repository\EndDateProblemFormRepository;
use api\view\View;

class EndDateProblemFormController
{

    private $endDateProblemFormRepository;
    private $view;

    public function __construct(EndDateProblemFormRepository $endDateProblemFormRepository, View $view)
    {
        $this->endDateProblemFormRepository = $endDateProblemFormRepository;
        $this->view = $view;
    }

    public function handleFindEndDateProblemFormById($id = null)
    {
        $endDateProblemForm = $this->endDateProblemFormRepository->findEndDateProblemFormById($id);
        $this->view->show(['enddateproblemform' => $endDateProblemForm]);
    }

    public function handleFindEndDateProblemForms()
    {
        $endDateProblemForms = $this->endDateProblemFormRepository->findEndDateProblemForms();
        $this->view->show(['enddateproblemforms' => $endDateProblemForms]);
    }

    public function handleCreateEndDateProblemForm(EndDateProblemForm $endDateProblemForm)
    {
        $this->endDateProblemFormRepository->insertEndDateProblemForm($endDateProblemForm);
    }

    public function handleFindEndDateProblemFormByProblemMessageId($id = null)
    {
        $endDateProblemForm = $this->endDateProblemFormRepository->findEndDateProblemFormsByProblemMessageId($id);
        $this->view->show(['enddateproblemform' => $endDateProblemForm]);
    }

}