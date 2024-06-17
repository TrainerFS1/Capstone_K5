<?php declare(strict_types=1);

namespace PhpParser\ErrorHandler;

use PhpParser\Error;
use PhpParser\ErrorHandler;

/**
 * Error handler that handles all errors by throwing them.
 *
 * This is the default strategy used by all components.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class Throwing implements ErrorHandler {
    public function handleError(Error $error): void {
=======
class Throwing implements ErrorHandler
{
    public function handleError(Error $error) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
class Throwing implements ErrorHandler
{
    public function handleError(Error $error) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        throw $error;
    }
}
