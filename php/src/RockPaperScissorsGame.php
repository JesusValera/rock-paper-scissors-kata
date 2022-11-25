<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissorsGame
{
    public const PAPER = 'paper';
    public const ROCK = 'rock';
    public const SCISSORS = 'scissors';
    private const RULES =
        [
            self::ROCK => [
                self::SCISSORS => 'Rock wins',
                self::PAPER => 'Paper wins',
                self::ROCK => 'Draw',
            ],
        ];

    public function play(string $playerOneMove, string $playerTwoMove): string
    {
        if ($playerOneMove === self::ROCK) {
            return self::RULES[$playerOneMove][$playerTwoMove];
        }

        if ($playerOneMove === $playerTwoMove) {
            return 'Draw';
        }

        if ($playerOneMove === self::PAPER && $playerTwoMove === self::ROCK) {
            return 'Paper wins';
        }

        if ($playerOneMove === self::SCISSORS && $playerTwoMove === self::PAPER) {
            return 'Scissors wins';
        }

        return 'Rock wins';
    }
}
