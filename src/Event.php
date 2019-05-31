<?php


namespace Kregel\Tamber;


use Kregel\Tamber\Contracts\Retrievable;
use Kregel\Tamber\Contracts\Trackable;
use Kregel\Tamber\Contracts\Batchable;

class Event implements Trackable, Retrievable, Batchable
{
    use InteractsWithApi, TransformRequest;

    /**
     * Record any actions your users preform.
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function track(array $params)
    {
        return $this->sendRequest('post', 'event/track', $params);
    }

    /**
     * Find events associated with a given user or item, within a given time
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function retrieve(array $params)
    {
        return $this->sendRequest('post', 'event/retrieve', $params);
    }

    /**
     * Track up to 1000 events in a single call.
     *
     * @param array $params
     * @return \Psr\Http\Message\StreamInterface
     */
    public function batch(array $params)
    {
        return $this->sendRequest('post', 'event/batch', $params);
    }
}
