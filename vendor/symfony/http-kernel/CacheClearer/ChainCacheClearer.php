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

/**
 * ChainCacheClearer.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 *
 * @final
 */
class ChainCacheClearer implements CacheClearerInterface
{
    private iterable $clearers;

    /**
     * @param iterable<mixed, CacheClearerInterface> $clearers
     */
    public function __construct(iterable $clearers = [])
    {
        $this->clearers = $clearers;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function clear(string $cacheDir): void
=======
    public function clear(string $cacheDir)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function clear(string $cacheDir)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        foreach ($this->clearers as $clearer) {
            $clearer->clear($cacheDir);
        }
    }
}
