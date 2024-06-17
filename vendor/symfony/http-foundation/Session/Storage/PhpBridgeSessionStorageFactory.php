<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Storage\Proxy\AbstractProxy;

// Help opcache.preload discover always-needed symbols
class_exists(PhpBridgeSessionStorage::class);

/**
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
class PhpBridgeSessionStorageFactory implements SessionStorageFactoryInterface
{
    private AbstractProxy|\SessionHandlerInterface|null $handler;
    private ?MetadataBag $metaBag;
    private bool $secure;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(AbstractProxy|\SessionHandlerInterface|null $handler = null, ?MetadataBag $metaBag = null, bool $secure = false)
=======
    public function __construct(AbstractProxy|\SessionHandlerInterface $handler = null, MetadataBag $metaBag = null, bool $secure = false)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(AbstractProxy|\SessionHandlerInterface $handler = null, MetadataBag $metaBag = null, bool $secure = false)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->handler = $handler;
        $this->metaBag = $metaBag;
        $this->secure = $secure;
    }

    public function createStorage(?Request $request): SessionStorageInterface
    {
        $storage = new PhpBridgeSessionStorage($this->handler, $this->metaBag);
        if ($this->secure && $request?->isSecure()) {
            $storage->setOptions(['cookie_secure' => true]);
        }

        return $storage;
    }
}
