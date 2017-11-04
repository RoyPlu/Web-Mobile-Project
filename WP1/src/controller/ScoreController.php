<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 13/10/2017
 * Time: 22:38
 */

namespace api\controller;

use api\model\Score;
use api\model\ScoreRepository;
use api\view\View;

class ScoreController
{

    private $scoreRepository;
    private $view;

    public function __construct(ScoreRepository $scoreRepository, View $view)
    {
        $this->scoreRepository = $scoreRepository;
        $this->view = $view;
    }

    public function handleFindScoreById($id = null)
    {
        $score = $this->scoreRepository->findScoreById($id);
        $this->view->show(['score' => $score]);
    }

    public function handleFindScores() {
        $scores = $this->scoreRepository->findScores();
        $this->view->show(['scores' => $scores]);
    }

    public function handleCreateScore(Score $score) {
        $this->scoreRepository->insertScore($score);
    }

    public function handleFindScoresByLocationId($id)
    {
        $scores = $this->scoreRepository->findScoresByLocationId($id);
        $this->view->show(['scores' => $scores]);
    }

}