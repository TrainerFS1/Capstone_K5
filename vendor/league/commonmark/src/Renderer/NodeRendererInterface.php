<?php

declare(strict_types=1);

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Renderer;

<<<<<<< HEAD
use League\CommonMark\Exception\InvalidArgumentException;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use League\CommonMark\Node\Node;

interface NodeRendererInterface
{
    /**
     * @return \Stringable|string|null
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException if the wrong type of Node is provided
=======
     * @throws \InvalidArgumentException if the wrong type of Node is provided
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function render(Node $node, ChildNodeRendererInterface $childRenderer);
}
