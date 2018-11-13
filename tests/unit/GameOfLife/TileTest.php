<?php

namespace GameOfLife;

use PHPUnit\Framework\TestCase;

final class TileTest extends TestCase
{
    public function testIsDeadByDefault()
    {
        $tile = Tile::create();
        $this->assertEquals('dead', $tile->status());
    }

    public function testShouldBeCreatedUsingBetterNamedConstructor()
    {
        $deadTile = Tile::dead();
        $this->assertEquals('dead', $deadTile->status());
    }
}
