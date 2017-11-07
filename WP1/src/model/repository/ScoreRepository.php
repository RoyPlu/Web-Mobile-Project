<?php
/**
 * Created by PhpStorm.
 * User: 11502021
 * Date: 14/10/2017
 * Time: 0:27
 */

namespace api\model\repository;


use api\model\entity\Score;

interface ScoreRepository
{

    function findScoreById($id);
    function findScores();
    function insertScore(Score $score);
    function findScoresByLocationId($id);
    function findCountOfScoresbyLocationId($id);
}