<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Hottestable
{
    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function hottest(array $params);
}
