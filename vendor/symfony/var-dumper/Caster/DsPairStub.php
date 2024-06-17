<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Caster;

use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class DsPairStub extends Stub
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(mixed $key, mixed $value)
=======
    public function __construct(string|int $key, mixed $value)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(string|int $key, mixed $value)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->value = [
            Caster::PREFIX_VIRTUAL.'key' => $key,
            Caster::PREFIX_VIRTUAL.'value' => $value,
        ];
    }
}
