<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

class RockPaperScissorsGameTest extends TestCase
{
    /** @test */
    public function rocks_beats_scissors(): void
    {
        $game = new RockPaperScissorsGame();

        $result = $game->play('rock', 'scissor');

        self::assertSame('Rock wins', $result);
    }

    /** @test */
    public function paper_beats_rocks(): void
    {
        $game = new RockPaperScissorsGame();

        $result = $game->play('paper', 'rock');

        self::assertSame('Paper wins', $result);
    }
}
