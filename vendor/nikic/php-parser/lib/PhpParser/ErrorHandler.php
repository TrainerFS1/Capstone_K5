<?php declare(strict_types=1);

namespace PhpParser;

<<<<<<< HEAD
<<<<<<< HEAD
interface ErrorHandler {
=======
interface ErrorHandler
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
interface ErrorHandler
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * Handle an error generated during lexing, parsing or some other operation.
     *
     * @param Error $error The error that needs to be handled
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function handleError(Error $error): void;
=======
    public function handleError(Error $error);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function handleError(Error $error);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
