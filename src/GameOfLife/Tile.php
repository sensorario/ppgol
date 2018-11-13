<?php

namespace GameOfLife;

class Tile
{
    const STATUS_DEAD = 'dead';
    const STATUS_ALIVE = 'alice';
    private $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    public static function create($status)
    {
        return new self($status);
    }

    public function status()
    {
        return $this->status;
    }
}
