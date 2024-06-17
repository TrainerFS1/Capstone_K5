<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Loader\Configurator\Traits;

use Symfony\Component\Routing\RouteCollection;

/**
 * @internal
 */
trait HostTrait
{
<<<<<<< HEAD
<<<<<<< HEAD
    final protected function addHost(RouteCollection $routes, string|array $hosts): void
=======
    final protected function addHost(RouteCollection $routes, string|array $hosts)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    final protected function addHost(RouteCollection $routes, string|array $hosts)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (!$hosts || !\is_array($hosts)) {
            $routes->setHost($hosts ?: '');

            return;
        }

        foreach ($routes->all() as $name => $route) {
            if (null === $locale = $route->getDefault('_locale')) {
                $routes->remove($name);
                foreach ($hosts as $locale => $host) {
                    $localizedRoute = clone $route;
                    $localizedRoute->setDefault('_locale', $locale);
                    $localizedRoute->setRequirement('_locale', preg_quote($locale));
                    $localizedRoute->setDefault('_canonical_route', $name);
                    $localizedRoute->setHost($host);
                    $routes->add($name.'.'.$locale, $localizedRoute);
                }
            } elseif (!isset($hosts[$locale])) {
                throw new \InvalidArgumentException(sprintf('Route "%s" with locale "%s" is missing a corresponding host in its parent collection.', $name, $locale));
            } else {
                $route->setHost($hosts[$locale]);
                $route->setRequirement('_locale', preg_quote($locale));
                $routes->add($name, $route);
            }
        }
    }
}
