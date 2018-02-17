<?php

namespace MailMarketing\Action;

use Interop\Container\ContainerInterface;
use MailMarketing\Infrastructure\Bootstrap;


class BootstrapActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $bootstrap = new Bootstrap();
        return new BootstrapAction($bootstrap);
    }
}
