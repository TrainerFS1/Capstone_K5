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

use function preg_match;
use function sprintf;

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PharIo\Manifest;

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class ApplicationName {
    /** @var string */
    private $name;

    public function __construct(string $name) {
        $this->ensureValidFormat($name);
        $this->name = $name;
    }

    public function asString(): string {
        return $this->name;
    }

    public function isEqual(ApplicationName $name): bool {
        return $this->name === $name->name;
    }

    private function ensureValidFormat(string $name): void {
<<<<<<< HEAD
<<<<<<< HEAD
        if (!preg_match('#\w/\w#', $name)) {
            throw new InvalidApplicationNameException(
                sprintf('Format of name "%s" is not valid - expected: vendor/packagename', $name),
=======
        if (!\preg_match('#\w/\w#', $name)) {
            throw new InvalidApplicationNameException(
                \sprintf('Format of name "%s" is not valid - expected: vendor/packagename', $name),
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if (!\preg_match('#\w/\w#', $name)) {
            throw new InvalidApplicationNameException(
                \sprintf('Format of name "%s" is not valid - expected: vendor/packagename', $name),
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                InvalidApplicationNameException::InvalidFormat
            );
        }
    }
}
