<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsGameTest extends TestCase
{
    /** @test */
    public function rocks_beats_scissors(): void
    {
        $game = new RockPaperScissorsGame();

        $result = $game->play(RockPaperScissorsGame::ROCK, RockPaperScissorsGame::SCISSORS);

        self::assertSame('Rock wins', $result);
    }

    /** @test */
    public function paper_beats_rocks(): void
    {
        $game = new RockPaperScissorsGame();

        $result = $game->play(RockPaperScissorsGame::PAPER, RockPaperScissorsGame::ROCK);

        self::assertSame('Paper wins', $result);
    }

    /** @test */
    public function scissors_beats_paper(): void
    {
        $game = new RockPaperScissorsGame();

        $result = $game->play(RockPaperScissorsGame::SCISSORS, RockPaperScissorsGame::PAPER);

        self::assertSame('Scissors wins', $result);
    }

    /** @test */
    public function same_movement_is_draw(): void
    {
        $game = new RockPaperScissorsGame();

        $result = $game->play(RockPaperScissorsGame::ROCK, RockPaperScissorsGame::ROCK);

        self::assertSame('Draw', $result);
    }
}
