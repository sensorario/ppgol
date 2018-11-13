<?php

namespace GameOfLife;

class Tile
{
    const STATUS_ALIVE = 'alive';
    const STATUS_DEAD = 'dead';
    private $status;

    public function __construct($status)
    {
        $this->status = $status;
    }

    public static function dead()
    {
        return new self(static::STATUS_DEAD);
    }

    public static function create()
    {
        return static::dead();
    }

    public function status()
    {
        return $this->status;
    }
}
