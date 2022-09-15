<?php
namespace PhpCleanArchitecture\Application\Commands;

interface CommandInterface
{
    public function execute() : void;
}