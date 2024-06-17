<?php

namespace Illuminate\Session;

use BadMethodCallException;
use Illuminate\Contracts\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\Session\Storage\MetadataBag;

class SymfonySessionDecorator implements SessionInterface
{
    /**
     * The underlying Laravel session store.
     *
     * @var \Illuminate\Session\Store
     */
    protected $store;

    /**
     * Create a new session decorator.
     *
     * @param  \Illuminate\Contracts\Session\Session  $store
     * @return void
     */
    public function __construct(Session $store)
    {
        $this->store = $store;
    }

    /**
     * {@inheritdoc}
     */
    public function start(): bool
    {
        return $this->store->start();
    }

    /**
     * {@inheritdoc}
     */
    public function getId(): string
    {
        return $this->store->getId();
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function setId(string $id)
    {
        $this->store->setId($id);
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return $this->store->getName();
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function setName(string $name)
    {
        $this->store->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function invalidate(int $lifetime = null): bool
    {
        $this->store->invalidate();

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function migrate(bool $destroy = false, int $lifetime = null): bool
    {
        $this->store->migrate($destroy);

        return true;
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function save()
    {
        $this->store->save();
    }

    /**
     * {@inheritdoc}
     */
    public function has(string $name): bool
    {
        return $this->store->has($name);
    }

    /**
     * {@inheritdoc}
     */
    public function get(string $name, mixed $default = null): mixed
    {
        return $this->store->get($name, $default);
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function set(string $name, mixed $value)
    {
        $this->store->put($name, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function all(): array
    {
        return $this->store->all();
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function replace(array $attributes)
    {
        $this->store->replace($attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function remove(string $name): mixed
    {
        return $this->store->remove($name);
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function clear()
    {
        $this->store->flush();
    }

    /**
     * {@inheritdoc}
     */
    public function isStarted(): bool
    {
        return $this->store->isStarted();
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function registerBag(SessionBagInterface $bag)
    {
        throw new BadMethodCallException('Method not implemented by Laravel.');
    }

    /**
     * {@inheritdoc}
     */
    public function getBag(string $name): SessionBagInterface
    {
        throw new BadMethodCallException('Method not implemented by Laravel.');
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadataBag(): MetadataBag
    {
        throw new BadMethodCallException('Method not implemented by Laravel.');
    }
}
