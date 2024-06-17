<?php declare(strict_types=1);

namespace PhpParser\ErrorHandler;

use PhpParser\Error;
use PhpParser\ErrorHandler;

/**
 * Error handler that collects all errors into an array.
 *
 * This allows graceful handling of errors.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class Collecting implements ErrorHandler {
    /** @var Error[] Collected errors */
    private array $errors = [];

    public function handleError(Error $error): void {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Collecting implements ErrorHandler
{
    /** @var Error[] Collected errors */
    private $errors = [];

    public function handleError(Error $error) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->errors[] = $error;
    }

    /**
     * Get collected errors.
     *
     * @return Error[]
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getErrors(): array {
=======
    public function getErrors() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getErrors() : array {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $this->errors;
    }

    /**
     * Check whether there are any errors.
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function hasErrors(): bool {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return bool
     */
    public function hasErrors() : bool {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return !empty($this->errors);
    }

    /**
     * Reset/clear collected errors.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function clearErrors(): void {
=======
    public function clearErrors() {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function clearErrors() {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->errors = [];
    }
}
