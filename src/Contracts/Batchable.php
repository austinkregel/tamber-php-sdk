<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Batchable
{
    /**
     * @param array $params
     * @return StreamInterface
     */
    public function batch(array $params);
}