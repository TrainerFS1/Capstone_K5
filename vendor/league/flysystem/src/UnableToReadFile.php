<?php

declare(strict_types=1);

namespace League\Flysystem;

use RuntimeException;
use Throwable;

final class UnableToReadFile extends RuntimeException implements FilesystemOperationFailed
{
    /**
     * @var string
     */
    private $location = '';

    /**
     * @var string
     */
    private $reason = '';

<<<<<<< HEAD
<<<<<<< HEAD
    public static function fromLocation(string $location, string $reason = '', ?Throwable $previous = null): UnableToReadFile
=======
    public static function fromLocation(string $location, string $reason = '', Throwable $previous = null): UnableToReadFile
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public static function fromLocation(string $location, string $reason = '', Throwable $previous = null): UnableToReadFile
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $e = new static(rtrim("Unable to read file from location: {$location}. {$reason}"), 0, $previous);
        $e->location = $location;
        $e->reason = $reason;

        return $e;
    }

    public function operation(): string
    {
        return FilesystemOperationFailed::OPERATION_READ;
    }

    public function reason(): string
    {
        return $this->reason;
    }

    public function location(): string
    {
        return $this->location;
    }
}
