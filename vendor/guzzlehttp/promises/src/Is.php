<?php

<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
namespace GuzzleHttp\Promise;

final class Is
{
    /**
     * Returns true if a promise is pending.
<<<<<<< HEAD
     */
    public static function pending(PromiseInterface $promise): bool
=======
     *
     * @return bool
     */
    public static function pending(PromiseInterface $promise)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $promise->getState() === PromiseInterface::PENDING;
    }

    /**
     * Returns true if a promise is fulfilled or rejected.
<<<<<<< HEAD
     */
    public static function settled(PromiseInterface $promise): bool
=======
     *
     * @return bool
     */
    public static function settled(PromiseInterface $promise)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $promise->getState() !== PromiseInterface::PENDING;
    }

    /**
     * Returns true if a promise is fulfilled.
<<<<<<< HEAD
     */
    public static function fulfilled(PromiseInterface $promise): bool
=======
     *
     * @return bool
     */
    public static function fulfilled(PromiseInterface $promise)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $promise->getState() === PromiseInterface::FULFILLED;
    }

    /**
     * Returns true if a promise is rejected.
<<<<<<< HEAD
     */
    public static function rejected(PromiseInterface $promise): bool
=======
     *
     * @return bool
     */
    public static function rejected(PromiseInterface $promise)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $promise->getState() === PromiseInterface::REJECTED;
    }
}
