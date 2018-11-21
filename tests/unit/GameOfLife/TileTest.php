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

    public function testCanBeCreatedDead()
    {
        $tile = Tile::createDead();
        $this->assertEquals(Tile::DEAD, $tile->status());
    }

    public function testCanBeCreatedAlive()
    {
        $tile = Tile::createAlive();
        $this->assertEquals(Tile::ALIVE, $tile->status());
    }
}
