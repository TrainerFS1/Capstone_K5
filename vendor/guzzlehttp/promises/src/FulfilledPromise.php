<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
namespace GuzzleHttp\Promise;

/**
 * A promise that has been fulfilled.
 *
 * Thenning off of this promise will invoke the onFulfilled callback
 * immediately and ignore other callbacks.
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @final
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
class FulfilledPromise implements PromiseInterface
{
    private $value;

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param mixed $value
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct($value)
    {
        if (is_object($value) && method_exists($value, 'then')) {
            throw new \InvalidArgumentException(
                'You cannot create a FulfilledPromise with a promise.'
            );
        }

        $this->value = $value;
    }

    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
<<<<<<< HEAD
<<<<<<< HEAD
    ): PromiseInterface {
=======
    ) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    ) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        // Return itself if there is no onFulfilled function.
        if (!$onFulfilled) {
            return $this;
        }

        $queue = Utils::queue();
        $p = new Promise([$queue, 'run']);
        $value = $this->value;
<<<<<<< HEAD
<<<<<<< HEAD
        $queue->add(static function () use ($p, $value, $onFulfilled): void {
=======
        $queue->add(static function () use ($p, $value, $onFulfilled) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $queue->add(static function () use ($p, $value, $onFulfilled) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            if (Is::pending($p)) {
                try {
                    $p->resolve($onFulfilled($value));
                } catch (\Throwable $e) {
                    $p->reject($e);
<<<<<<< HEAD
<<<<<<< HEAD
=======
                } catch (\Exception $e) {
                    $p->reject($e);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                } catch (\Exception $e) {
                    $p->reject($e);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                }
            }
        });

        return $p;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function otherwise(callable $onRejected): PromiseInterface
=======
    public function otherwise(callable $onRejected)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function otherwise(callable $onRejected)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->then(null, $onRejected);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function wait(bool $unwrap = true)
=======
    public function wait($unwrap = true, $defaultDelivery = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function wait($unwrap = true, $defaultDelivery = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $unwrap ? $this->value : null;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getState(): string
=======
    public function getState()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getState()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return self::FULFILLED;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function resolve($value): void
    {
        if ($value !== $this->value) {
            throw new \LogicException('Cannot resolve a fulfilled promise');
        }
    }

    public function reject($reason): void
    {
        throw new \LogicException('Cannot reject a fulfilled promise');
    }

    public function cancel(): void
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function resolve($value)
    {
        if ($value !== $this->value) {
            throw new \LogicException("Cannot resolve a fulfilled promise");
        }
    }

    public function reject($reason)
    {
        throw new \LogicException("Cannot reject a fulfilled promise");
    }

    public function cancel()
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        // pass
    }
}
