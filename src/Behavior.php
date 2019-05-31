<?php


namespace Kregel\Tamber;

use Kregel\Tamber\Contracts\Creatable;
use Kregel\Tamber\Contracts\Retrievable;

class Behavior implements Creatable, Retrievable
{
    use InteractsWithApi, TransformRequest;

    /**
     * Create a behavior
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create(array $params)
    {
        return $this->sendRequest('post', 'behavior/create', $params);
    }

    /**
     * Retrieve the given behavior
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve(array $params)
    {
        return $this->sendRequest('post', 'behavior/retrieve', $params);
    }
}
