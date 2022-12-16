<?php

namespace TennisGame;

class TennisGame1 implements TennisGame
{
    private Player $firstPlayer;
    private Player $secondPlayer;

    public function __construct(string $player1Name, string $player2Name)
    {
        $this->firstPlayer = new Player($player1Name);
        $this->secondPlayer = new Player($player2Name);
    }

    public function wonPoint($playerName)
    {
        if ($playerName === $this->firstPlayer->getName()) {
            $this->firstPlayer->point();
        } else {
            $this->secondPlayer->point();
        }
    }

    public function getScore()
    {
        return (new MatchScore())->getScore($this->firstPlayer->getScore(), $this->secondPlayer->getScore());
    }
}
