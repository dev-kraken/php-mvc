<?php

namespace App\Exceptions\Container;

class NotFoundException
{

    /**
     * @param string $id
     */
    public function __construct(string $id)
    {
    }
}