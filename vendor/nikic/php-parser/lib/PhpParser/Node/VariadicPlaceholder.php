<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\NodeAbstract;

/**
 * Represents the "..." in "foo(...)" of the first-class callable syntax.
 */
class VariadicPlaceholder extends NodeAbstract {
    /**
     * Create a variadic argument placeholder (first-class callable syntax).
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param array $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param array $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $attributes = []) {
        $this->attributes = $attributes;
    }

    public function getType(): string {
        return 'VariadicPlaceholder';
    }

    public function getSubNodeNames(): array {
        return [];
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
