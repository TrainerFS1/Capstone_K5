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
 * Interface for nodes.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
<<<<<<< HEAD
interface NodeInterface extends \Stringable
=======
interface NodeInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    public function getNodeName(): string;

    public function getSpecificity(): Specificity;
<<<<<<< HEAD
=======

    public function __toString(): string;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
