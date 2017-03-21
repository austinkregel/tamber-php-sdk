<?php


namespace Kregel\Tamber;


class Tamber
{
    /**
     * This is the API Token which you can retriever from the Tamber dashboard.
     *
     * @url https://dashboard.tamber.com/
     *
     * @var
     */
    public static $apiToken;

    /**
     * This is the base API URL.
     *
     * @var string
     */
    public static $apiBase = 'https://api.tamber.com/v1/';

    /**
     * Return the api key.
     *
     * @return string
     */
    public static function getApiToken()
    {
        return self::$apiToken;
    }

    /**
     * Set the api key.
     *
     * @param $apiToken
     */
    public static function setApiToken($apiToken)
    {
        self::$apiToken = $apiToken;
    }

    /**
     * Get the base URL.
     *
     * @return string
     */
    public static function getBaseUrl()
    {
        return self::$apiBase;
    }
}
