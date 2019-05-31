<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Retrievable
{
    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function retrieve(array $params);
}