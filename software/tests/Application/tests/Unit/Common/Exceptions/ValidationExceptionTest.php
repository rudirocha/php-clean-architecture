<?php

use PhpCleanArchitecture\Application\Common\Exceptions\ValidationException;

it('validates class is Exception', function() {
    $exception = new ValidationException();
    expect($exception)->toBeInstanceOf(Exception::class);
});