<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

namespace GuzzleHttp\Promise;

=======
namespace GuzzleHttp\Promise;

use Exception;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
namespace GuzzleHttp\Promise;

use Exception;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Generator;
use Throwable;

/**
 * Creates a promise that is resolved using a generator that yields values or
 * promises (somewhat similar to C#'s async keyword).
 *
 * When called, the Coroutine::of method will start an instance of the generator
 * and returns a promise that is fulfilled with its final yielded value.
 *
 * Control is returned back to the generator when the yielded promise settles.
 * This can lead to less verbose code when doing lots of sequential async calls
 * with minimal processing in between.
 *
 *     use GuzzleHttp\Promise;
 *
 *     function createPromise($value) {
 *         return new Promise\FulfilledPromise($value);
 *     }
 *
 *     $promise = Promise\Coroutine::of(function () {
 *         $value = (yield createPromise('a'));
 *         try {
 *             $value = (yield createPromise($value . 'b'));
<<<<<<< HEAD
<<<<<<< HEAD
 *         } catch (\Throwable $e) {
=======
 *         } catch (\Exception $e) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
 *         } catch (\Exception $e) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 *             // The promise was rejected.
 *         }
 *         yield $value . 'c';
 *     });
 *
 *     // Outputs "abc"
 *     $promise->then(function ($v) { echo $v; });
 *
 * @param callable $generatorFn Generator function to wrap into a promise.
 *
 * @return Promise
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @see https://github.com/petkaantonov/bluebird/blob/master/API.md#generators inspiration
=======
 * @link https://github.com/petkaantonov/bluebird/blob/master/API.md#generators inspiration
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
 * @link https://github.com/petkaantonov/bluebird/blob/master/API.md#generators inspiration
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class Coroutine implements PromiseInterface
{
    /**
     * @var PromiseInterface|null
     */
    private $currentPromise;

    /**
     * @var Generator
     */
    private $generator;

    /**
     * @var Promise
     */
    private $result;

    public function __construct(callable $generatorFn)
    {
        $this->generator = $generatorFn();
<<<<<<< HEAD
<<<<<<< HEAD
        $this->result = new Promise(function (): void {
=======
        $this->result = new Promise(function () {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->result = new Promise(function () {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            while (isset($this->currentPromise)) {
                $this->currentPromise->wait();
            }
        });
        try {
            $this->nextCoroutine($this->generator->current());
<<<<<<< HEAD
<<<<<<< HEAD
=======
        } catch (\Exception $exception) {
            $this->result->reject($exception);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        } catch (\Exception $exception) {
            $this->result->reject($exception);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } catch (Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }

    /**
     * Create a new coroutine.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public static function of(callable $generatorFn): self
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return self
     */
    public static function of(callable $generatorFn)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return new self($generatorFn);
    }

    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
<<<<<<< HEAD
<<<<<<< HEAD
    ): PromiseInterface {
        return $this->result->then($onFulfilled, $onRejected);
    }

    public function otherwise(callable $onRejected): PromiseInterface
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ) {
        return $this->result->then($onFulfilled, $onRejected);
    }

    public function otherwise(callable $onRejected)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->result->otherwise($onRejected);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function wait(bool $unwrap = true)
=======
    public function wait($unwrap = true)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function wait($unwrap = true)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->result->wait($unwrap);
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
        return $this->result->getState();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function resolve($value): void
=======
    public function resolve($value)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function resolve($value)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->result->resolve($value);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function reject($reason): void
=======
    public function reject($reason)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function reject($reason)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->result->reject($reason);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function cancel(): void
=======
    public function cancel()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function cancel()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->currentPromise->cancel();
        $this->result->cancel();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    private function nextCoroutine($yielded): void
=======
    private function nextCoroutine($yielded)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function nextCoroutine($yielded)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->currentPromise = Create::promiseFor($yielded)
            ->then([$this, '_handleSuccess'], [$this, '_handleFailure']);
    }

    /**
     * @internal
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function _handleSuccess($value): void
=======
    public function _handleSuccess($value)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function _handleSuccess($value)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        unset($this->currentPromise);
        try {
            $next = $this->generator->send($value);
            if ($this->generator->valid()) {
                $this->nextCoroutine($next);
            } else {
                $this->result->resolve($value);
            }
<<<<<<< HEAD
<<<<<<< HEAD
=======
        } catch (Exception $exception) {
            $this->result->reject($exception);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        } catch (Exception $exception) {
            $this->result->reject($exception);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } catch (Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }

    /**
     * @internal
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function _handleFailure($reason): void
=======
    public function _handleFailure($reason)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function _handleFailure($reason)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        unset($this->currentPromise);
        try {
            $nextYield = $this->generator->throw(Create::exceptionFor($reason));
            // The throw was caught, so keep iterating on the coroutine
            $this->nextCoroutine($nextYield);
<<<<<<< HEAD
<<<<<<< HEAD
=======
        } catch (Exception $exception) {
            $this->result->reject($exception);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        } catch (Exception $exception) {
            $this->result->reject($exception);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } catch (Throwable $throwable) {
            $this->result->reject($throwable);
        }
    }
}
