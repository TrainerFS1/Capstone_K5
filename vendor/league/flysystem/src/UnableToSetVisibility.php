<?php

declare(strict_types=1);

namespace League\Flysystem;

use RuntimeException;

use Throwable;

use function rtrim;

final class UnableToSetVisibility extends RuntimeException implements FilesystemOperationFailed
{
    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $reason;

    public function reason(): string
    {
        return $this->reason;
    }

<<<<<<< HEAD
    public static function atLocation(string $filename, string $extraMessage = '', ?Throwable $previous = null): self
=======
    public static function atLocation(string $filename, string $extraMessage = '', Throwable $previous = null): self
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $message = "Unable to set visibility for file {$filename}. $extraMessage";
        $e = new static(rtrim($message), 0, $previous);
        $e->reason = $extraMessage;
        $e->location = $filename;

        return $e;
    }

    public function operation(): string
    {
        return FilesystemOperationFailed::OPERATION_SET_VISIBILITY;
    }

    public function location(): string
    {
        return $this->location;
    }
}
