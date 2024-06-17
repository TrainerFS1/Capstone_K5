<?php declare(strict_types=1);

namespace PhpParser\Node;

<<<<<<< HEAD
class IntersectionType extends ComplexType {
    /** @var (Identifier|Name)[] Types */
    public array $types;
=======
use PhpParser\NodeAbstract;

class IntersectionType extends ComplexType
{
    /** @var (Identifier|Name)[] Types */
    public $types;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs an intersection type.
     *
<<<<<<< HEAD
     * @param (Identifier|Name)[] $types Types
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param (Identifier|Name)[] $types      Types
     * @param array               $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $types, array $attributes = []) {
        $this->attributes = $attributes;
        $this->types = $types;
    }

<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['types'];
    }

    public function getType(): string {
=======
    public function getSubNodeNames() : array {
        return ['types'];
    }

    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'IntersectionType';
    }
}
