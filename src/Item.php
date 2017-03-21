<?php


namespace Kregel\Tamber;


class Item
{
    use InteractsWithApi, TransformRequest;

    /**
     * Create a new Item Object
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function create(array $params)
    {
        return $this->sendRequest('post', 'item/create', $params);
    }

    /**
     * Updates work by upserting the given item
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function update(array $params)
    {
        return $this->sendRequest('post', 'item/update', $params);
    }

    /**
     * Retrieves the item with the given id
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve(array $params)
    {
        return $this->sendRequest('post', 'item/retrieve', $params);
    }

    /**
     * Removes an existing item with the given identifier.
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function remove(array $params)
    {
        return $this->sendRequest('post', 'item/remove', $params);
    }
}
