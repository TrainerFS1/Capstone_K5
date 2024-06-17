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
 * A promise that has been rejected.
 *
 * Thenning off of this promise will invoke the onRejected callback
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
class RejectedPromise implements PromiseInterface
{
    private $reason;

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param mixed $reason
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct($reason)
    {
        if (is_object($reason) && method_exists($reason, 'then')) {
            throw new \InvalidArgumentException(
                'You cannot create a RejectedPromise with a promise.'
            );
        }

        $this->reason = $reason;
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
        // If there's no onRejected callback then just return self.
        if (!$onRejected) {
            return $this;
        }

        $queue = Utils::queue();
        $reason = $this->reason;
        $p = new Promise([$queue, 'run']);
<<<<<<< HEAD
<<<<<<< HEAD
        $queue->add(static function () use ($p, $reason, $onRejected): void {
=======
        $queue->add(static function () use ($p, $reason, $onRejected) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $queue->add(static function () use ($p, $reason, $onRejected) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            if (Is::pending($p)) {
                try {
                    // Return a resolved promise if onRejected does not throw.
                    $p->resolve($onRejected($reason));
                } catch (\Throwable $e) {
                    // onRejected threw, so return a rejected promise.
                    $p->reject($e);
<<<<<<< HEAD
<<<<<<< HEAD
=======
                } catch (\Exception $e) {
                    // onRejected threw, so return a rejected promise.
                    $p->reject($e);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                } catch (\Exception $e) {
                    // onRejected threw, so return a rejected promise.
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
        if ($unwrap) {
            throw Create::exceptionFor($this->reason);
        }

        return null;
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
        return self::REJECTED;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function resolve($value): void
    {
        throw new \LogicException('Cannot resolve a rejected promise');
    }

    public function reject($reason): void
    {
        if ($reason !== $this->reason) {
            throw new \LogicException('Cannot reject a rejected promise');
        }
    }

    public function cancel(): void
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function resolve($value)
    {
        throw new \LogicException("Cannot resolve a rejected promise");
    }

    public function reject($reason)
    {
        if ($reason !== $this->reason) {
            throw new \LogicException("Cannot reject a rejected promise");
        }
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
