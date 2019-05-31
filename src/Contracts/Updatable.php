<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Updatable
{
    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function update(array $params);
}
