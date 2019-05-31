<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Trackable
{
    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function track(array $params);
}