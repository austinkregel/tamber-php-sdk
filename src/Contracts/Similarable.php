<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Similarable
{
    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function similar(array $params);
}