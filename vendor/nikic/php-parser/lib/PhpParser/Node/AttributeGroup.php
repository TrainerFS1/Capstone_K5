<?php declare(strict_types=1);

namespace PhpParser\Node;

<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\NodeAbstract;

class AttributeGroup extends NodeAbstract {
    /** @var Attribute[] Attributes */
    public array $attrs;

    /**
     * @param Attribute[] $attrs PHP attributes
     * @param array<string, mixed> $attributes Additional node attributes
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node;
use PhpParser\NodeAbstract;

class AttributeGroup extends NodeAbstract
{
    /** @var Attribute[] Attributes */
    public $attrs;

    /**
     * @param Attribute[] $attrs PHP attributes
     * @param array $attributes Additional node attributes
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $attrs, array $attributes = []) {
        $this->attributes = $attributes;
        $this->attrs = $attrs;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['attrs'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['attrs'];
    }

    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'AttributeGroup';
    }
}
