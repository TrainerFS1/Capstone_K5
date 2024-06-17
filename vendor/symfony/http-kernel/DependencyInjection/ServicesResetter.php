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

<<<<<<< HEAD
use ProxyManager\Proxy\LazyLoadingInterface;
use Symfony\Component\VarExporter\LazyObjectInterface;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Symfony\Contracts\Service\ResetInterface;

/**
 * Resets provided services.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 * @author Nicolas Grekas <p@tchwork.com>
 *
 * @internal
 */
class ServicesResetter implements ResetInterface
{
    private \Traversable $resettableServices;
    private array $resetMethods;

    /**
     * @param \Traversable<string, object>   $resettableServices
     * @param array<string, string|string[]> $resetMethods
     */
    public function __construct(\Traversable $resettableServices, array $resetMethods)
    {
        $this->resettableServices = $resettableServices;
        $this->resetMethods = $resetMethods;
    }

<<<<<<< HEAD
    public function reset(): void
    {
        foreach ($this->resettableServices as $id => $service) {
            if ($service instanceof LazyObjectInterface && !$service->isLazyObjectInitialized(true)) {
                continue;
            }

            if ($service instanceof LazyLoadingInterface && !$service->isProxyInitialized()) {
                continue;
            }

=======
    public function reset()
    {
        foreach ($this->resettableServices as $id => $service) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            foreach ((array) $this->resetMethods[$id] as $resetMethod) {
                if ('?' === $resetMethod[0] && !method_exists($service, $resetMethod = substr($resetMethod, 1))) {
                    continue;
                }

                $service->$resetMethod();
            }
        }
    }
}
