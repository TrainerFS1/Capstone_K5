<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Loader;

use Psr\Container\ContainerInterface;

/**
 * A route loader that executes a service from a PSR-11 container to load the routes.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class ContainerLoader extends ObjectLoader
{
    private ContainerInterface $container;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(ContainerInterface $container, ?string $env = null)
=======
    public function __construct(ContainerInterface $container, string $env = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(ContainerInterface $container, string $env = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->container = $container;
        parent::__construct($env);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function supports(mixed $resource, ?string $type = null): bool
=======
    public function supports(mixed $resource, string $type = null): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function supports(mixed $resource, string $type = null): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return 'service' === $type && \is_string($resource);
    }

    protected function getObject(string $id): object
    {
        return $this->container->get($id);
    }
}
