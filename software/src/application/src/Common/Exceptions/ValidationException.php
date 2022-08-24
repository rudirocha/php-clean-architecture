<?php

namespace PhpCleanArchitecture\Application\Common\Exceptions;

use Exception;

class ValidationException extends Exception
{
    private array $errors = [];

    public function addError(string $error) : ValidationException
    {
        $this->errors[] = $error;

        return $this;
    }
}