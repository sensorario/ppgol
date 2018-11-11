<?php

namespace GameOfLife;

class Tile
{
    private $status = 'dead';

    public static function create()
    {
        return new self();
    }

    public function status()
    {
        return $this->status;
    }
}
