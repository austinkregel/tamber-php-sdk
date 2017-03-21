<?php


namespace Kregel\Tamber;


class Discover
{
    use InteractsWithApi, TransformRequest;

    /**
     * Recommends a list of items similar to what's given
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function recommend(array $params)
    {
        return $this->sendRequest('post', 'discover/recommended_similar', $params);
    }

    /**
     * Gets items that are similar to what's given
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function similar(array $params)
    {
        return $this->sendRequest('post', 'discover/similar', $params);
    }

    /**
     * Gets items that are recommended to the given user
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function recommended(array $params)
    {
        return $this->sendRequest('post', 'discover/recommended', $params);
    }

    /**
     * Get the currently trending items in your engine.
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function hottest(array $params)
    {
        return $this->sendRequest('post', 'discover/hot', $params);
    }

    /**
     * This will grab the most popular items from your engine
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function popular(array $params)
    {
        return $this->sendRequest('post', 'discover/popular', $params);
    }
}
