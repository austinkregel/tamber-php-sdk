<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Popularable
{
    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function popular(array $params);
}