<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DependencyInjection;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Log\Logger;

/**
 * Registers the default logger if necessary.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoggerPass implements CompilerPassInterface
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return void
     */
    public function process(ContainerBuilder $container)
    {
        $container->setAlias(LoggerInterface::class, 'logger');
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function process(ContainerBuilder $container)
    {
        $container->setAlias(LoggerInterface::class, 'logger')
            ->setPublic(false);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        if ($container->has('logger')) {
            return;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if ($debug = $container->getParameter('kernel.debug')) {
            $debug = $container->hasParameter('kernel.runtime_mode.web')
                ? $container->getParameter('kernel.runtime_mode.web')
                : !\in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true);
        }

        $container->register('logger', Logger::class)
            ->setArguments([null, null, null, new Reference(RequestStack::class), $debug]);
=======
        $container->register('logger', Logger::class)
            ->setArguments([null, null, null, new Reference(RequestStack::class)])
            ->setPublic(false);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $container->register('logger', Logger::class)
            ->setArguments([null, null, null, new Reference(RequestStack::class)])
            ->setPublic(false);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
