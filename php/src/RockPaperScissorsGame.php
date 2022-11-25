<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissorsGame
{
    public const PAPER = 'paper';
    public const ROCK = 'rock';
    public const SCISSORS = 'scissors';

    private const RULES = [
        self::ROCK => [
            self::ROCK => 'Draw',
            self::PAPER => 'Paper wins',
            self::SCISSORS => 'Rock wins',
        ],
        self::PAPER => [
            self::ROCK => 'Paper wins',
            self::PAPER => 'Draw',
            self::SCISSORS => 'Scissors wins',
        ],
        self::SCISSORS => [
            self::ROCK => 'Rock wins',
            self::PAPER => 'Scissors wins',
            self::SCISSORS => 'Draw',
        ],
    ];

    public function play(string $playerOneMove, string $playerTwoMove): string
    {
        return self::RULES[$playerOneMove][$playerTwoMove];
    }
}
