<?php
namespace PhpCleanArchitecture\Application\Commands;

use Symfony\Polyfill\Intl\Icu\Exception\NotImplementedException;

final class CreateConference implements CommandInterface
{
    public function execute() : void
    {
        throw new NotImplementedException("YEY");
    }
}