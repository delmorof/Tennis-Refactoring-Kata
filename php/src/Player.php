<?php

namespace TennisGame;

class Player
{
    private readonly Score $score;


    public function __construct(private readonly string $name)
    {
        $this->score = new Score();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function point(): void
    {
        $this->score->increment();
    }

    public function getScore(): Score
    {
        return $this->score;
    }
}