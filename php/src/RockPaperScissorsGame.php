<?php

declare(strict_types=1);

namespace Kata;

final class RockPaperScissorsGame
{
    public const PAPER = 'paper';
    public const ROCK = 'rock';
    public const SCISSORS = 'scissors';

    public function play(string $playerOneMove, string $playerTwoMove): string
    {
        if ($playerOneMove === $playerTwoMove) {
            return 'Draw';
        }

        if ($playerOneMove === self::PAPER && $playerTwoMove === self::ROCK) {
            return 'Paper wins';
        }

        if ($playerOneMove === self::SCISSORS && $playerTwoMove === self::PAPER) {
            return 'Scissors wins';
        }

        if ($playerOneMove === self::ROCK && $playerTwoMove === self::PAPER) {
            return 'Paper wins';
        }

        return 'Rock wins';
    }
}
