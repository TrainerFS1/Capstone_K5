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
 * Adds basic `SessionUpdateTimestampHandlerInterface` behaviors to another `SessionHandlerInterface`.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class StrictSessionHandler extends AbstractSessionHandler
{
    private \SessionHandlerInterface $handler;
    private bool $doDestroy;

    public function __construct(\SessionHandlerInterface $handler)
    {
        if ($handler instanceof \SessionUpdateTimestampHandlerInterface) {
            throw new \LogicException(sprintf('"%s" is already an instance of "SessionUpdateTimestampHandlerInterface", you cannot wrap it with "%s".', get_debug_type($handler), self::class));
        }

        $this->handler = $handler;
    }

    /**
     * Returns true if this handler wraps an internal PHP session save handler using \SessionHandler.
     *
     * @internal
     */
    public function isWrapper(): bool
    {
        return $this->handler instanceof \SessionHandler;
    }

    public function open(string $savePath, string $sessionName): bool
    {
        parent::open($savePath, $sessionName);

        return $this->handler->open($savePath, $sessionName);
    }

<<<<<<< HEAD
    protected function doRead(#[\SensitiveParameter] string $sessionId): string
=======
    protected function doRead(string $sessionId): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->handler->read($sessionId);
    }

<<<<<<< HEAD
    public function updateTimestamp(#[\SensitiveParameter] string $sessionId, string $data): bool
=======
    public function updateTimestamp(string $sessionId, string $data): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->write($sessionId, $data);
    }

<<<<<<< HEAD
    protected function doWrite(#[\SensitiveParameter] string $sessionId, string $data): bool
=======
    protected function doWrite(string $sessionId, string $data): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->handler->write($sessionId, $data);
    }

<<<<<<< HEAD
    public function destroy(#[\SensitiveParameter] string $sessionId): bool
=======
    public function destroy(string $sessionId): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->doDestroy = true;
        $destroyed = parent::destroy($sessionId);

        return $this->doDestroy ? $this->doDestroy($sessionId) : $destroyed;
    }

<<<<<<< HEAD
    protected function doDestroy(#[\SensitiveParameter] string $sessionId): bool
=======
    protected function doDestroy(string $sessionId): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->doDestroy = false;

        return $this->handler->destroy($sessionId);
    }

    public function close(): bool
    {
        return $this->handler->close();
    }

    public function gc(int $maxlifetime): int|false
    {
        return $this->handler->gc($maxlifetime);
    }
}
