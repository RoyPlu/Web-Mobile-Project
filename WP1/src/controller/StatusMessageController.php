<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 13/10/2017
 * Time: 22:38
 */

namespace api\controller;

use api\model\StatusMessage;
use api\model\StatusMessageRepository;
use api\view\View;

class StatusMessageController
{

    private $statusMessageRepository;
    private $view;

    public function __construct(StatusMessageRepository $statusMessageRepository, View $view)
    {
        $this->statusMessageRepository = $statusMessageRepository;
        $this->view = $view;
    }

    public function handleFindStatusMessageById($id = null)
    {
        $statusMessage = $this->statusMessageRepository->findStatusMessageById($id);
        $this->view->show(['statusmessage' => $statusMessage]);
    }

    public function handleFindStatusMessages() {
        $statusMessages = $this->statusMessageRepository->findStatusMessages();
        $this->view->show(['statusmessages' => $statusMessages]);
    }

    public function handleCreateStatusMessage(StatusMessage $statusMessage) {
        $this->statusMessageRepository->insertStatusMessage($statusMessage);
    }

    public function handleFindStatusMessagesByLocationId($id)
    {
        $statusMessages = $this->statusMessageRepository->findStatusMessagesByLocationId($id);
        $this->view->show(['statusmessages' => $statusMessages]);
    }

}