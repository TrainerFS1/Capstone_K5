<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Manifest.
 *
<<<<<<< HEAD
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
=======
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
namespace PharIo\Manifest;

use DOMElement;
use DOMNodeList;
<<<<<<< HEAD
use Iterator;
use ReturnTypeWillChange;
use function count;
use function get_class;
use function sprintf;

/** @template-implements Iterator<int,DOMElement> */
abstract class ElementCollection implements Iterator {
=======

abstract class ElementCollection implements \Iterator {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /** @var DOMElement[] */
    private $nodes = [];

    /** @var int */
    private $position;

    public function __construct(DOMNodeList $nodeList) {
        $this->position = 0;
        $this->importNodes($nodeList);
    }

<<<<<<< HEAD
    #[ReturnTypeWillChange]
=======
    #[\ReturnTypeWillChange]
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    abstract public function current();

    public function next(): void {
        $this->position++;
    }

    public function key(): int {
        return $this->position;
    }

    public function valid(): bool {
<<<<<<< HEAD
        return $this->position < count($this->nodes);
=======
        return $this->position < \count($this->nodes);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function rewind(): void {
        $this->position = 0;
    }

    protected function getCurrentElement(): DOMElement {
        return $this->nodes[$this->position];
    }

    private function importNodes(DOMNodeList $nodeList): void {
        foreach ($nodeList as $node) {
            if (!$node instanceof DOMElement) {
                throw new ElementCollectionException(
<<<<<<< HEAD
                    sprintf('\DOMElement expected, got \%s', get_class($node))
=======
                    \sprintf('\DOMElement expected, got \%s', \get_class($node))
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            $this->nodes[] = $node;
        }
    }
}
