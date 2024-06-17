<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Header;

/**
 * A MIME Header.
 *
 * @author Chris Corbyn
 */
interface HeaderInterface
{
    /**
     * Sets the body.
     *
     * The type depends on the Header concrete class.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function setBody(mixed $body);

    /**
     * Gets the body.
     *
     * The return type depends on the Header concrete class.
     */
    public function getBody(): mixed;

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return void
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function setCharset(string $charset);

    public function getCharset(): ?string;

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return void
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function setLanguage(string $lang);

    public function getLanguage(): ?string;

    public function getName(): string;

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return void
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function setMaxLineLength(int $lineLength);

    public function getMaxLineLength(): int;

    /**
     * Gets this Header rendered as a compliant string.
     */
    public function toString(): string;

    /**
     * Gets the header's body, prepared for folding into a final header value.
     *
     * This is not necessarily RFC 2822 compliant since folding white space is
     * not added at this stage (see {@link toString()} for that).
     */
    public function getBodyAsString(): string;
}
