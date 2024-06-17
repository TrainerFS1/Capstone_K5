<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Yaml\Tag;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Guilhem N. <egetick@gmail.com>
 */
final class TaggedValue
{
<<<<<<< HEAD
    public function __construct(
        private string $tag,
        private mixed $value,
    ) {
=======
    private string $tag;
    private mixed $value;

    public function __construct(string $tag, mixed $value)
    {
        $this->tag = $tag;
        $this->value = $value;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getTag(): string
    {
        return $this->tag;
    }

<<<<<<< HEAD
    public function getValue(): mixed
=======
    public function getValue()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->value;
    }
}
