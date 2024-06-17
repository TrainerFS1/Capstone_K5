<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Manifest.
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace PharIo\Manifest;

use Countable;
use IteratorAggregate;
use function count;

/** @template-implements IteratorAggregate<int,Author> */
class AuthorCollection implements Countable, IteratorAggregate {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PharIo\Manifest;

class AuthorCollection implements \Countable, \IteratorAggregate {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /** @var Author[] */
    private $authors = [];

    public function add(Author $author): void {
        $this->authors[] = $author;
    }

    /**
     * @return Author[]
     */
    public function getAuthors(): array {
        return $this->authors;
    }

    public function count(): int {
<<<<<<< HEAD
<<<<<<< HEAD
        return count($this->authors);
=======
        return \count($this->authors);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return \count($this->authors);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getIterator(): AuthorCollectionIterator {
        return new AuthorCollectionIterator($this);
    }
}
