<?php

namespace Illuminate\Http\Client;

use GuzzleHttp\Utils;

/**
 * @mixin \Illuminate\Http\Client\Factory
 */
class Pool
{
    /**
     * The factory instance.
     *
     * @var \Illuminate\Http\Client\Factory
     */
    protected $factory;

    /**
     * The handler function for the Guzzle client.
     *
     * @var callable
     */
    protected $handler;

    /**
     * The pool of requests.
     *
     * @var array
     */
    protected $pool = [];

    /**
     * Create a new requests pool.
     *
     * @param  \Illuminate\Http\Client\Factory|null  $factory
     * @return void
     */
    public function __construct(Factory $factory = null)
    {
        $this->factory = $factory ?: new Factory();
<<<<<<< HEAD
<<<<<<< HEAD
        $this->handler = Utils::chooseHandler();
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        if (method_exists(Utils::class, 'chooseHandler')) {
            $this->handler = Utils::chooseHandler();
        } else {
            $this->handler = \GuzzleHttp\choose_handler();
        }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Add a request to the pool with a key.
     *
     * @param  string  $key
     * @return \Illuminate\Http\Client\PendingRequest
     */
    public function as(string $key)
    {
        return $this->pool[$key] = $this->asyncRequest();
    }

    /**
     * Retrieve a new async pending request.
     *
     * @return \Illuminate\Http\Client\PendingRequest
     */
    protected function asyncRequest()
    {
        return $this->factory->setHandler($this->handler)->async();
    }

    /**
     * Retrieve the requests in the pool.
     *
     * @return array
     */
    public function getRequests()
    {
        return $this->pool;
    }

    /**
     * Add a request to the pool with a numeric index.
     *
     * @param  string  $method
     * @param  array  $parameters
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \Illuminate\Http\Client\PendingRequest|\GuzzleHttp\Promise\Promise
=======
     * @return \Illuminate\Http\Client\PendingRequest
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @return \Illuminate\Http\Client\PendingRequest
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __call($method, $parameters)
    {
        return $this->pool[] = $this->asyncRequest()->$method(...$parameters);
    }
}
