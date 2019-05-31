<?php

namespace Kregel\Tamber;

class Tamber
{
    /**
     * This is the Project Key which you can retriever from the Tamber dashboard.
     *
     * @url https://dashboard.tamber.com/
     *
     * @var
     */
    public static $projectKey;

    /**
     * This is the base API URL.
     *
     * @var string
     */
    public static $apiBase = 'https://api.tamber.com/v1/';

    /**
     *
     * @var string|null
     */
    public static $engineKey;

    /**
     * Return the project key.
     *
     * @return string
     */
    public static function getProjectKey()
    {
        return self::$projectKey;
    }

    /**
     * Set the project key.
     *
     * @param $projectKey
     */
    public static function setProjectKey($projectKey)
    {
        self::$projectKey = $projectKey;
    }

    /**
     * Return the engine key.
     *
     * @return string
     */
    public static function getEngineKey()
    {
        return self::$engineKey;
    }

    /**
     * Set the engine key.
     *
     * @param $projectKey
     */
    public static function setEngineKey($engineKey)
    {
        self::$engineKey = $engineKey;
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
