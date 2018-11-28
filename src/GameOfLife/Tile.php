<?php

namespace GameOfLife;

class Tile
{
    private $status = 'dead';

    const DEAD = 'dead';

    const ALIVE = 'alive';

    private function __construct($status)
    {
        $this->status = $status;
    }

    public static function create()
    {
        return new self(Tile::DEAD);
    }

    public function status()
    {
        return $this->status;
    }

    public static function createDead()
    {
        return new self(Tile::DEAD);
    }

    public static function createAlive()
    {
        return new self(Tile::ALIVE);
    }
}
