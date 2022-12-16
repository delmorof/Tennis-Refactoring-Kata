<?php

namespace TennisGame;

class Score
{
    private int $score = 0;
    public function __construct()
    {
    }

    public function increment(): void
    {
        ++$this->score;
    }

    public function getScore(): int
    {
        return $this->score;
    }
}