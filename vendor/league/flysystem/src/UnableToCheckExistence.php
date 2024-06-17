<?php

declare(strict_types=1);

namespace League\Flysystem;

use RuntimeException;
use Throwable;

class UnableToCheckExistence extends RuntimeException implements FilesystemOperationFailed
{
    final public function __construct(string $message = "", int $code = 0, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

<<<<<<< HEAD
    public static function forLocation(string $path, ?Throwable $exception = null): static
=======
    public static function forLocation(string $path, Throwable $exception = null): static
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return new static("Unable to check existence for: {$path}", 0, $exception);
    }

    public function operation(): string
    {
        return FilesystemOperationFailed::OPERATION_EXISTENCE_CHECK;
    }
}
