<?php

namespace Kregel\Tamber\Contracts;

use Psr\Http\Message\StreamInterface;

interface Recommendable
{
    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function recommend(array $params);

    /**
     * @param  array  $params
     * @return StreamInterface
     */
    public function recommended(array $params);
}