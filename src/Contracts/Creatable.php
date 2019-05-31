<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Creatable
{
    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function create(array $params);
}
