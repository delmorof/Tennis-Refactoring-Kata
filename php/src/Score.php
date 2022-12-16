<?php

namespace TennisGame;

class Score
{
    private int $score = 0;
    private const LOVE = 'LOVE';
    private const FIFTEEN = 'FIFTEEN';
    private const THIRTY = 'THIRTY';
    private const FORTY = 'FORTY';
    private const DEUCE = 'DEUCE';
    private const ADVANTAGE = 'ADVANTAGE';
    private const WIN = 'WIN';

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