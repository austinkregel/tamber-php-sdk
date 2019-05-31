<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Removable
{
    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function remove(array $params);
}
