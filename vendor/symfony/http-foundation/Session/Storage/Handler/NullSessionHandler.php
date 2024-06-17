<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Handler;

/**
 * Can be used in unit testing or in a situations where persisted sessions are not desired.
 *
 * @author Drak <drak@zikula.org>
 */
class NullSessionHandler extends AbstractSessionHandler
{
    public function close(): bool
    {
        return true;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function validateId(#[\SensitiveParameter] string $sessionId): bool
=======
    public function validateId(string $sessionId): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function validateId(string $sessionId): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return true;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    protected function doRead(#[\SensitiveParameter] string $sessionId): string
=======
    protected function doRead(string $sessionId): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected function doRead(string $sessionId): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return '';
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function updateTimestamp(#[\SensitiveParameter] string $sessionId, string $data): bool
=======
    public function updateTimestamp(string $sessionId, string $data): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function updateTimestamp(string $sessionId, string $data): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return true;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    protected function doWrite(#[\SensitiveParameter] string $sessionId, string $data): bool
=======
    protected function doWrite(string $sessionId, string $data): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected function doWrite(string $sessionId, string $data): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return true;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    protected function doDestroy(#[\SensitiveParameter] string $sessionId): bool
=======
    protected function doDestroy(string $sessionId): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected function doDestroy(string $sessionId): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return true;
    }

    public function gc(int $maxlifetime): int|false
    {
        return 0;
    }
}
