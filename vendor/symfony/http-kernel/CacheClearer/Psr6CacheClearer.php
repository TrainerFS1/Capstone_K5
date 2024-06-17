<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\CacheClearer;

use Psr\Cache\CacheItemPoolInterface;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class Psr6CacheClearer implements CacheClearerInterface
{
    private array $pools = [];

    /**
     * @param array<string, CacheItemPoolInterface> $pools
     */
    public function __construct(array $pools = [])
    {
        $this->pools = $pools;
    }

    public function hasPool(string $name): bool
    {
        return isset($this->pools[$name]);
    }

    /**
     * @throws \InvalidArgumentException If the cache pool with the given name does not exist
     */
    public function getPool(string $name): CacheItemPoolInterface
    {
        if (!$this->hasPool($name)) {
            throw new \InvalidArgumentException(sprintf('Cache pool not found: "%s".', $name));
        }

        return $this->pools[$name];
    }

    /**
     * @throws \InvalidArgumentException If the cache pool with the given name does not exist
     */
    public function clearPool(string $name): bool
    {
        if (!isset($this->pools[$name])) {
            throw new \InvalidArgumentException(sprintf('Cache pool not found: "%s".', $name));
        }

        return $this->pools[$name]->clear();
    }

<<<<<<< HEAD
    /**
     * @return void
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function clear(string $cacheDir)
    {
        foreach ($this->pools as $pool) {
            $pool->clear();
        }
    }
}
