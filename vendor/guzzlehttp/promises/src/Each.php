<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
namespace GuzzleHttp\Promise;

final class Each
{
    /**
     * Given an iterator that yields promises or values, returns a promise that
     * is fulfilled with a null value when the iterator has been consumed or
     * the aggregate promise has been fulfilled or rejected.
     *
     * $onFulfilled is a function that accepts the fulfilled value, iterator
     * index, and the aggregate promise. The callback can invoke any necessary
     * side effects and choose to resolve or reject the aggregate if needed.
     *
     * $onRejected is a function that accepts the rejection reason, iterator
     * index, and the aggregate promise. The callback can invoke any necessary
     * side effects and choose to resolve or reject the aggregate if needed.
     *
<<<<<<< HEAD
     * @param mixed $iterable Iterator or array to iterate over.
=======
     * @param mixed    $iterable    Iterator or array to iterate over.
     * @param callable $onFulfilled
     * @param callable $onRejected
     *
     * @return PromiseInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public static function of(
        $iterable,
        callable $onFulfilled = null,
        callable $onRejected = null
<<<<<<< HEAD
    ): PromiseInterface {
        return (new EachPromise($iterable, [
            'fulfilled' => $onFulfilled,
            'rejected' => $onRejected,
=======
    ) {
        return (new EachPromise($iterable, [
            'fulfilled' => $onFulfilled,
            'rejected'  => $onRejected
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ]))->promise();
    }

    /**
     * Like of, but only allows a certain number of outstanding promises at any
     * given time.
     *
     * $concurrency may be an integer or a function that accepts the number of
     * pending promises and returns a numeric concurrency limit value to allow
     * for dynamic a concurrency size.
     *
     * @param mixed        $iterable
     * @param int|callable $concurrency
<<<<<<< HEAD
=======
     * @param callable     $onFulfilled
     * @param callable     $onRejected
     *
     * @return PromiseInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public static function ofLimit(
        $iterable,
        $concurrency,
        callable $onFulfilled = null,
        callable $onRejected = null
<<<<<<< HEAD
    ): PromiseInterface {
        return (new EachPromise($iterable, [
            'fulfilled' => $onFulfilled,
            'rejected' => $onRejected,
            'concurrency' => $concurrency,
=======
    ) {
        return (new EachPromise($iterable, [
            'fulfilled'   => $onFulfilled,
            'rejected'    => $onRejected,
            'concurrency' => $concurrency
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ]))->promise();
    }

    /**
     * Like limit, but ensures that no promise in the given $iterable argument
     * is rejected. If any promise is rejected, then the aggregate promise is
     * rejected with the encountered rejection.
     *
     * @param mixed        $iterable
     * @param int|callable $concurrency
<<<<<<< HEAD
=======
     * @param callable     $onFulfilled
     *
     * @return PromiseInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public static function ofLimitAll(
        $iterable,
        $concurrency,
        callable $onFulfilled = null
<<<<<<< HEAD
    ): PromiseInterface {
        return self::ofLimit(
            $iterable,
            $concurrency,
            $onFulfilled,
            function ($reason, $idx, PromiseInterface $aggregate): void {
=======
    ) {
        return each_limit(
            $iterable,
            $concurrency,
            $onFulfilled,
            function ($reason, $idx, PromiseInterface $aggregate) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $aggregate->reject($reason);
            }
        );
    }
}
