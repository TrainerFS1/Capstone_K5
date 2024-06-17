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

use const FILTER_VALIDATE_EMAIL;
use function filter_var;

=======
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PharIo\Manifest;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Email {
    /** @var string */
    private $email;

    public function __construct(string $email) {
        $this->ensureEmailIsValid($email);

        $this->email = $email;
    }

    public function asString(): string {
        return $this->email;
    }

    private function ensureEmailIsValid(string $url): void {
<<<<<<< HEAD
        if (filter_var($url, FILTER_VALIDATE_EMAIL) === false) {
=======
        if (\filter_var($url, \FILTER_VALIDATE_EMAIL) === false) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            throw new InvalidEmailException;
        }
    }
}
