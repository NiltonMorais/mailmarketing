<?php
namespace MailMarketing\Infrastructure;

use MailMarketing\Service\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{

    public function create()
    {
        require __DIR__ . '/config/doctrine.php';
    }
}