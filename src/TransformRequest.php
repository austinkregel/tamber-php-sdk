<?php


namespace Kregel\Tamber;


trait TransformRequest
{
    // This trait will transform the PSR-7 request a php class
    protected $status = 0;

    public $data = [];

    public function __call($name, $arguments)
    {
        $response = call_user_func_array([$this, $name], $arguments);
        $this->status = $response->getStatusCode();
        return $this->data = json_decode($response->getBody());
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        } else if (property_exists($this->data, $name)) {
            return $this->data->$name;
        } else if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }
}
