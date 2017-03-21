<?php


namespace Kregel\Tamber;

class Behavior
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
     * @param string $behavior_name
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve(string $behavior_name)
    {
        return $this->sendRequest('post', 'behavior/retrieve', ['name' => $behavior_name]);
    }
}
