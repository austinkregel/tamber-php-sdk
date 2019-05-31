<?php


namespace Kregel\Tamber;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Kregel\Tamber\Exceptions\TamberException;

trait InteractsWithApi
{
    /**
     * The client variable use to make requests.
     *
     * @var Client
     */
    protected $client;

    /**
     * Initialize the client.
     *
     * @return void
     */
    private function init()
    {
        $this->client = new Client([
            'base_uri' => Tamber::getBaseUrl(),
            'auth' => [
                Tamber::getProjectKey(),
                Tamber::getEngineKey(),
            ]
        ]);
    }

    /**
     * Make the api request.
     *
     * @param $method
     * @param $url
     * @param array $params
     *
     * @return \Psr\Http\Message\StreamInterface
     */
    public function sendRequest($method, $url, $params = [])
    {
        if ($this->client == null) {
            $this->init();
        }

        try {
            $res = $this->client->request($method, $url, [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                ],
                'form_params' => $params,
            ]);
            return $res->getBody();
        } catch (ClientException $exception) {
            $response = json_decode($exception->getResponse()->getBody()->getContents());

            throw new TamberException($response->error, $params);
        }
    }

}
