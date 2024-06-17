<?php

declare(strict_types=1);

namespace League\Flysystem;

use RuntimeException;
use Throwable;

final class UnableToMoveFile extends RuntimeException implements FilesystemOperationFailed
{
    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $destination;

<<<<<<< HEAD
<<<<<<< HEAD
    public static function sourceAndDestinationAreTheSame(string $source, string $destination): UnableToMoveFile
    {
        return UnableToMoveFile::because('Source and destination are the same', $source, $destination);
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function source(): string
    {
        return $this->source;
    }

    public function destination(): string
    {
        return $this->destination;
    }

    public static function fromLocationTo(
        string $sourcePath,
        string $destinationPath,
<<<<<<< HEAD
<<<<<<< HEAD
        ?Throwable $previous = null
=======
        Throwable $previous = null
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        Throwable $previous = null
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ): UnableToMoveFile {
        $message = $previous?->getMessage() ?? "Unable to move file from $sourcePath to $destinationPath";
        $e = new static($message, 0, $previous);
        $e->source = $sourcePath;
        $e->destination = $destinationPath;

        return $e;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public static function because(
        string $reason,
        string $sourcePath,
        string $destinationPath,
    ): UnableToMoveFile {
        $message = "Unable to move file from $sourcePath to $destinationPath, because $reason";
        $e = new static($message);
        $e->source = $sourcePath;
        $e->destination = $destinationPath;

        return $e;
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function operation(): string
    {
        return FilesystemOperationFailed::OPERATION_MOVE;
    }
}
