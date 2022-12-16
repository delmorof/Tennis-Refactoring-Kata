<?php

namespace TennisGame;

class MatchScore
{

    private const MATCH_POINT = 4;
    public function getScore(Score $firstScore, Score $secondScore): string
    {
        $minusResult = $firstScore->getScore() - $secondScore->getScore();

        if(0 === $minusResult){
            return $this->getDrawString($firstScore->getScore());
        }else{
            if($this->checkMatchPoint($firstScore, $secondScore)){
                if ($minusResult === 1) {
                    $score = "Advantage player1";
                } elseif ($minusResult === -1) {
                    $score = "Advantage player2";
                } elseif ($minusResult >= 2) {
                    $score = "Win for player1";
                } else {
                    $score = "Win for player2";
                }
                return $score;
            }else{
                return $this->decodingScoreName($firstScore->getScore()) . '-' . $this->decodingScoreName($secondScore->getScore());
            }
        }
    }
    private function checkMatchPoint(Score $score1, Score $score2): bool
    {
        return $score1->getScore() >= self::MATCH_POINT || $score2->getScore() >= self::MATCH_POINT;
    }

    /**
     * @return string
     */
    private function getDrawString(int $score): string
    {
        switch ($score) {
            case 0:
                $score = "Love-All";
                break;
            case 1:
                $score = "Fifteen-All";
                break;
            case 2:
                $score = "Thirty-All";
                break;
            default:
                $score = "Deuce";
                break;
        }
        return $score;
    }

    /**
     * @param int $tempScore
     * @param string $score
     * @return string
     */
    private function decodingScoreName(int $tempScore): string
    {
        switch ($tempScore) {
            case 0:
                return "Love";
            case 1:
                return "Fifteen";
            case 2:
                return "Thirty";
            case 3:
                return "Forty";
            default:
                return '';
        }
    }
}