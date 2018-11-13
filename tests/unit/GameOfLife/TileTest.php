<?php

namespace GameOfLife;

use PHPUnit\Framework\TestCase;

final class TileTest extends TestCase
{
    /** @dataProvider statuses */
    public function testIsDeadByDefault($status)
    {
        $tile = Tile::create($status);
        $this->assertEquals($status, $tile->status());
    }

    public function statuses()
    {
        return [
            ['dead'],
            ['alive'],
        ];
    }
}
