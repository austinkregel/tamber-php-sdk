<?php

namespace Kregel\Tamber\Exceptions;

use Throwable;

class TamberException extends \RuntimeException
{
    protected $context;

    public function __construct($message, $context = [], Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->context = $context;
    }

    public function getContext()
    {
        return $this->context;
    }
}
