<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\CssSelector\Node;

/**
 * Represents a "<selector>#<id>" node.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class HashNode extends AbstractNode
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        private NodeInterface $selector,
        private string $id,
    ) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private NodeInterface $selector;
    private string $id;

    public function __construct(NodeInterface $selector, string $id)
    {
        $this->selector = $selector;
        $this->id = $id;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getSelector(): NodeInterface
    {
        return $this->selector;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getSpecificity(): Specificity
    {
        return $this->selector->getSpecificity()->plus(new Specificity(1, 0, 0));
    }

    public function __toString(): string
    {
        return sprintf('%s[%s#%s]', $this->getNodeName(), $this->selector, $this->id);
    }
}
