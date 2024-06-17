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

use Symfony\Component\Config\Loader\FileLoader;
use Symfony\Component\Routing\RouteCollection;

/**
 * GlobFileLoader loads files from a glob pattern.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class GlobFileLoader extends FileLoader
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function load(mixed $resource, ?string $type = null): mixed
=======
    public function load(mixed $resource, string $type = null): mixed
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function load(mixed $resource, string $type = null): mixed
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $collection = new RouteCollection();

        foreach ($this->glob($resource, false, $globResource) as $path => $info) {
            $collection->addCollection($this->import($path));
        }

        $collection->addResource($globResource);

        return $collection;
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
        return 'glob' === $type;
    }
}
