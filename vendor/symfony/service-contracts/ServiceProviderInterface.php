<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Contracts\Service;

use Psr\Container\ContainerInterface;

/**
 * A ServiceProviderInterface exposes the identifiers and the types of services provided by a container.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Mateusz Sip <mateusz.sip@gmail.com>
 *
<<<<<<< HEAD
 * @template-covariant T of mixed
=======
 * @template T of mixed
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
interface ServiceProviderInterface extends ContainerInterface
{
    /**
     * @return T
     */
    public function get(string $id): mixed;

    public function has(string $id): bool;

    /**
     * Returns an associative array of service types keyed by the identifiers provided by the current container.
     *
     * Examples:
     *
     *  * ['logger' => 'Psr\Log\LoggerInterface'] means the object provides a service named "logger" that implements Psr\Log\LoggerInterface
     *  * ['foo' => '?'] means the container provides service name "foo" of unspecified type
     *  * ['bar' => '?Bar\Baz'] means the container provides a service "bar" of type Bar\Baz|null
     *
<<<<<<< HEAD
     * @return array<string, string> The provided service types, keyed by service names
=======
     * @return string[] The provided service types, keyed by service names
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function getProvidedServices(): array;
}
