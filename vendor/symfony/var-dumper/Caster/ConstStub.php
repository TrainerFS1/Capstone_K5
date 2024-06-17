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
 * Represents a PHP constant and its value.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ConstStub extends Stub
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(string $name, string|int|float|null $value = null)
=======
    public function __construct(string $name, string|int|float $value = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(string $name, string|int|float $value = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->class = $name;
        $this->value = 1 < \func_num_args() ? $value : $name;
    }

    public function __toString(): string
    {
        return (string) $this->value;
    }
}
