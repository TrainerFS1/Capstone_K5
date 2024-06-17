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
 */
namespace PharIo\Manifest;

use function sprintf;

=======
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PharIo\Manifest;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Author {
    /** @var string */
    private $name;

<<<<<<< HEAD
    /** @var null|Email */
    private $email;

    public function __construct(string $name, ?Email $email = null) {
=======
    /** @var Email */
    private $email;

    public function __construct(string $name, Email $email) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->name  = $name;
        $this->email = $email;
    }

    public function asString(): string {
<<<<<<< HEAD
        if (!$this->hasEmail()) {
            return $this->name;
        }

        return sprintf(
=======
        return \sprintf(
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            '%s <%s>',
            $this->name,
            $this->email->asString()
        );
    }

    public function getName(): string {
        return $this->name;
    }

<<<<<<< HEAD
    /**
     * @psalm-assert-if-true Email $this->email
     */
    public function hasEmail(): bool {
        return $this->email !== null;
    }

    public function getEmail(): Email {
        if (!$this->hasEmail()) {
            throw new NoEmailAddressException();
        }

=======
    public function getEmail(): Email {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->email;
    }
}
