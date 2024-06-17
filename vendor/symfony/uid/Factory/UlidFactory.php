<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Uid\Factory;

use Symfony\Component\Uid\Ulid;

class UlidFactory
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function create(?\DateTimeInterface $time = null): Ulid
=======
    public function create(\DateTimeInterface $time = null): Ulid
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function create(\DateTimeInterface $time = null): Ulid
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return new Ulid(null === $time ? null : Ulid::generate($time));
    }
}
