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

    private const WIN_MOVEMENTS = [
        self::ROCK => self::SCISSORS,
        self::SCISSORS => self::PAPER,
        self::PAPER => self::ROCK,
    ];

    public function play(string $playerOneMove, string $playerTwoMove): string
    {
        // Possibility one
        // return self::RULES[$playerOneMove][$playerTwoMove];

        // Possibility two
        if ($playerOneMove === $playerTwoMove) {
            return 'Draw';
        }

        return $this->whoWins($playerOneMove, $playerTwoMove);
    }

    private function whoWins(string $playerOneMove, string $playerTwoMove): string
    {
        $winner = self::WIN_MOVEMENTS[$playerOneMove] === $playerTwoMove
            ? ucfirst($playerOneMove)
            : ucfirst($playerTwoMove);

        return $winner . ' wins';
    }
}
