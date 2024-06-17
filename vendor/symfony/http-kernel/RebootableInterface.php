<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel;

/**
 * Allows the Kernel to be rebooted using a temporary cache directory.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface RebootableInterface
{
    /**
     * Reboots a kernel.
     *
     * The getBuildDir() method of a rebootable kernel should not be called
     * while building the container. Use the %kernel.build_dir% parameter instead.
     *
     * @param string|null $warmupDir pass null to reboot in the regular build directory
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function reboot(?string $warmupDir);
}
