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

use Predis\Response\ErrorInterface;
<<<<<<< HEAD
<<<<<<< HEAD
use Relay\Relay;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * Redis based session storage handler based on the Redis class
 * provided by the PHP redis extension.
 *
 * @author Dalibor Karlović <dalibor@flexolabs.io>
 */
class RedisSessionHandler extends AbstractSessionHandler
{
    /**
     * Key prefix for shared environments.
     */
    private string $prefix;

    /**
     * Time to live in seconds.
     */
    private int|\Closure|null $ttl;

    /**
     * List of available options:
     *  * prefix: The prefix to use for the keys in order to avoid collision on the Redis server
     *  * ttl: The time to live in seconds.
     *
     * @throws \InvalidArgumentException When unsupported client or options are passed
     */
    public function __construct(
<<<<<<< HEAD
<<<<<<< HEAD
        private \Redis|Relay|\RedisArray|\RedisCluster|\Predis\ClientInterface $redis,
=======
        private \Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface $redis,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        private \Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface $redis,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        array $options = [],
    ) {
        if ($diff = array_diff(array_keys($options), ['prefix', 'ttl'])) {
            throw new \InvalidArgumentException(sprintf('The following options are not supported "%s".', implode(', ', $diff)));
        }

        $this->prefix = $options['prefix'] ?? 'sf_s';
        $this->ttl = $options['ttl'] ?? null;
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
        return $this->redis->get($this->prefix.$sessionId) ?: '';
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
        $ttl = ($this->ttl instanceof \Closure ? ($this->ttl)() : $this->ttl) ?? \ini_get('session.gc_maxlifetime');
        $result = $this->redis->setEx($this->prefix.$sessionId, (int) $ttl, $data);

        return $result && !$result instanceof ErrorInterface;
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
        static $unlink = true;

        if ($unlink) {
            try {
                $unlink = false !== $this->redis->unlink($this->prefix.$sessionId);
            } catch (\Throwable) {
                $unlink = false;
            }
        }

        if (!$unlink) {
            $this->redis->del($this->prefix.$sessionId);
        }

        return true;
    }

    #[\ReturnTypeWillChange]
    public function close(): bool
    {
        return true;
    }

    public function gc(int $maxlifetime): int|false
    {
        return 0;
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
        $ttl = ($this->ttl instanceof \Closure ? ($this->ttl)() : $this->ttl) ?? \ini_get('session.gc_maxlifetime');

        return $this->redis->expire($this->prefix.$sessionId, (int) $ttl);
    }
}
