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

use Symfony\Component\Cache\Marshaller\MarshallerInterface;

/**
 * @author Ahmed TAILOULOUTE <ahmed.tailouloute@gmail.com>
 */
class MarshallingSessionHandler implements \SessionHandlerInterface, \SessionUpdateTimestampHandlerInterface
{
    private AbstractSessionHandler $handler;
    private MarshallerInterface $marshaller;

    public function __construct(AbstractSessionHandler $handler, MarshallerInterface $marshaller)
    {
        $this->handler = $handler;
        $this->marshaller = $marshaller;
    }

    public function open(string $savePath, string $name): bool
    {
        return $this->handler->open($savePath, $name);
    }

    public function close(): bool
    {
        return $this->handler->close();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function destroy(#[\SensitiveParameter] string $sessionId): bool
=======
    public function destroy(string $sessionId): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function destroy(string $sessionId): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->handler->destroy($sessionId);
    }

    public function gc(int $maxlifetime): int|false
    {
        return $this->handler->gc($maxlifetime);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function read(#[\SensitiveParameter] string $sessionId): string
=======
    public function read(string $sessionId): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function read(string $sessionId): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->marshaller->unmarshall($this->handler->read($sessionId));
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function write(#[\SensitiveParameter] string $sessionId, string $data): bool
=======
    public function write(string $sessionId, string $data): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function write(string $sessionId, string $data): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $failed = [];
        $marshalledData = $this->marshaller->marshall(['data' => $data], $failed);

        if (isset($failed['data'])) {
            return false;
        }

        return $this->handler->write($sessionId, $marshalledData['data']);
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
        return $this->handler->validateId($sessionId);
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
        return $this->handler->updateTimestamp($sessionId, $data);
    }
}
