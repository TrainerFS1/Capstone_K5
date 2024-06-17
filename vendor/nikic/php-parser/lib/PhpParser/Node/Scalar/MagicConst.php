<?php declare(strict_types=1);

namespace PhpParser\Node\Scalar;

use PhpParser\Node\Scalar;

<<<<<<< HEAD
<<<<<<< HEAD
abstract class MagicConst extends Scalar {
    /**
     * Constructs a magic constant node.
     *
     * @param array<string, mixed> $attributes Additional attributes
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
abstract class MagicConst extends Scalar
{
    /**
     * Constructs a magic constant node.
     *
     * @param array $attributes Additional attributes
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $attributes = []) {
        $this->attributes = $attributes;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
=======
    public function getSubNodeNames() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getSubNodeNames() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return [];
    }

    /**
     * Get name of magic constant.
     *
     * @return string Name of magic constant
     */
<<<<<<< HEAD
<<<<<<< HEAD
    abstract public function getName(): string;
=======
    abstract public function getName() : string;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    abstract public function getName() : string;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
