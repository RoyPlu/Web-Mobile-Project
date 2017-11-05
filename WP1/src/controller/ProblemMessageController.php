<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 17/10/2017
 * Time: 10:19
 */

namespace api\controller;

use api\model\entity\ProblemMessage;
use api\model\repository\ProblemMessageRepository;
use api\view\View;

class ProblemMessageController
{

    private $problemMessageRepository;
    private $view;

    public function __construct(ProblemMessageRepository $problemMessageRepository, View $view)
    {
        $this->problemMessageRepository = $problemMessageRepository;
        $this->view = $view;
    }

    public function handleFindProblemMessageById($id = null) {
        $problemMessage = $this->problemMessageRepository->findProblemMessageById($id);
        $this->view->show(['problemmessage' => $problemMessage]);
    }

    public function handleFindProblemMessages() {
        $problemMessages = $this->problemMessageRepository->findProblemMessages();
        $this->view->show(['problemmessages' => $problemMessages]);
    }

    public function handleCreateStatusMessage(ProblemMessage $problemMessage) {
        $this->problemMessageRepository->insertProblemMessage($problemMessage);
    }

    public function handleFindProblemMessagesByLocationId($id)
    {
        $problemMessages = $this->problemMessageRepository->findProblemMessagesByLocationId($id);
        $this->view->show(['problemmessages' => $problemMessages]);
    }

}