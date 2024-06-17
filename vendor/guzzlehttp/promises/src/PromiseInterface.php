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
 * A promise represents the eventual result of an asynchronous operation.
 *
 * The primary way of interacting with a promise is through its then method,
 * which registers callbacks to receive either a promise’s eventual value or
 * the reason why the promise cannot be fulfilled.
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * @see https://promisesaplus.com/
 */
interface PromiseInterface
{
    public const PENDING = 'pending';
    public const FULFILLED = 'fulfilled';
    public const REJECTED = 'rejected';
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * @link https://promisesaplus.com/
 */
interface PromiseInterface
{
    const PENDING = 'pending';
    const FULFILLED = 'fulfilled';
    const REJECTED = 'rejected';
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Appends fulfillment and rejection handlers to the promise, and returns
     * a new promise resolving to the return value of the called handler.
     *
     * @param callable $onFulfilled Invoked when the promise fulfills.
     * @param callable $onRejected  Invoked when the promise is rejected.
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @return PromiseInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     *
     * @return PromiseInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function then(
        callable $onFulfilled = null,
        callable $onRejected = null
<<<<<<< HEAD
<<<<<<< HEAD
    ): PromiseInterface;
=======
    );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    );
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Appends a rejection handler callback to the promise, and returns a new
     * promise resolving to the return value of the callback if it is called,
     * or to its original fulfillment value if the promise is instead
     * fulfilled.
     *
     * @param callable $onRejected Invoked when the promise is rejected.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function otherwise(callable $onRejected): PromiseInterface;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return PromiseInterface
     */
    public function otherwise(callable $onRejected);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Get the state of the promise ("pending", "rejected", or "fulfilled").
     *
     * The three states can be checked against the constants defined on
     * PromiseInterface: PENDING, FULFILLED, and REJECTED.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function getState(): string;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return string
     */
    public function getState();
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Resolve the promise with the given value.
     *
     * @param mixed $value
     *
     * @throws \RuntimeException if the promise is already resolved.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function resolve($value): void;
=======
    public function resolve($value);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function resolve($value);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Reject the promise with the given reason.
     *
     * @param mixed $reason
     *
     * @throws \RuntimeException if the promise is already resolved.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function reject($reason): void;
=======
    public function reject($reason);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function reject($reason);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Cancels the promise if possible.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @see https://github.com/promises-aplus/cancellation-spec/issues/7
     */
    public function cancel(): void;
=======
     * @link https://github.com/promises-aplus/cancellation-spec/issues/7
     */
    public function cancel();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @link https://github.com/promises-aplus/cancellation-spec/issues/7
     */
    public function cancel();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Waits until the promise completes if possible.
     *
     * Pass $unwrap as true to unwrap the result of the promise, either
     * returning the resolved value or throwing the rejected exception.
     *
     * If the promise cannot be waited on, then the promise will be rejected.
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param bool $unwrap
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param bool $unwrap
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return mixed
     *
     * @throws \LogicException if the promise has no wait function or if the
     *                         promise does not settle after waiting.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function wait(bool $unwrap = true);
=======
    public function wait($unwrap = true);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function wait($unwrap = true);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
