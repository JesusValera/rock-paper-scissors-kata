<?php

declare(strict_types=1);

namespace KataTests;

use Kata\RockPaperScissorsGame;
use PHPUnit\Framework\TestCase;

final class RockPaperScissorsGameTest extends TestCase
{
    /**
     * @test
     * @dataProvider gameMovementsProvider
     */
    public function game_movements(string $playerOneMove, string $playerTwoMove, string $expected): void
    {
        $game = new RockPaperScissorsGame();

        $result = $game->play($playerOneMove, $playerTwoMove);

        self::assertSame($expected, $result);
    }

    public function gameMovementsProvider(): array
    {
        return [
            'rocks_beats_scissors' => [RockPaperScissorsGame::ROCK, RockPaperScissorsGame::SCISSORS, 'Rock wins'],
            'rock_lose_paper ' => [RockPaperScissorsGame::ROCK, RockPaperScissorsGame::PAPER, 'Paper wins'],
            'rock_draw' => [RockPaperScissorsGame::ROCK, RockPaperScissorsGame::ROCK, 'Draw'],
            'paper_beats_rocks' => [RockPaperScissorsGame::PAPER, RockPaperScissorsGame::ROCK, 'Paper wins'],
            'paper_lose_scissors' => [RockPaperScissorsGame::PAPER, RockPaperScissorsGame::SCISSORS, 'Scissors wins'],
            'paper_draw' => [RockPaperScissorsGame::PAPER, RockPaperScissorsGame::PAPER, 'Draw'],
            'scissors_beats_paper' => [RockPaperScissorsGame::SCISSORS, RockPaperScissorsGame::PAPER, 'Scissors wins'],
            'scissors_lose_rock' => [RockPaperScissorsGame::SCISSORS, RockPaperScissorsGame::ROCK, 'Rock wins'],
            'scissors_draw' => [RockPaperScissorsGame::SCISSORS, RockPaperScissorsGame::SCISSORS, 'Draw'],
        ];
    }
}
