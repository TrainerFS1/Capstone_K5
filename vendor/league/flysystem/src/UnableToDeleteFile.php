<?php

declare(strict_types=1);

namespace League\Flysystem;

use RuntimeException;
use Throwable;

final class UnableToDeleteFile extends RuntimeException implements FilesystemOperationFailed
{
    /**
     * @var string
     */
    private $location = '';

    /**
     * @var string
     */
    private $reason;

<<<<<<< HEAD
    public static function atLocation(string $location, string $reason = '', ?Throwable $previous = null): UnableToDeleteFile
=======
    public static function atLocation(string $location, string $reason = '', Throwable $previous = null): UnableToDeleteFile
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $e = new static(rtrim("Unable to delete file located at: {$location}. {$reason}"), 0, $previous);
        $e->location = $location;
        $e->reason = $reason;

        return $e;
    }

    public function operation(): string
    {
        return FilesystemOperationFailed::OPERATION_DELETE;
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
