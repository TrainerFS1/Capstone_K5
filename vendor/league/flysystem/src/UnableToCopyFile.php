<?php

declare(strict_types=1);

namespace League\Flysystem;

use RuntimeException;
use Throwable;

final class UnableToCopyFile extends RuntimeException implements FilesystemOperationFailed
{
    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $destination;

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
        ?Throwable $previous = null
=======
        Throwable $previous = null
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ): UnableToCopyFile {
        $e = new static("Unable to copy file from $sourcePath to $destinationPath", 0 , $previous);
        $e->source = $sourcePath;
        $e->destination = $destinationPath;

        return $e;
    }

<<<<<<< HEAD
    public static function sourceAndDestinationAreTheSame(string $source, string $destination): UnableToCopyFile
    {
        return UnableToCopyFile::because('Source and destination are the same', $source, $destination);
    }

    public static function because(string $reason, string $sourcePath, string $destinationPath): UnableToCopyFile
    {
        $e = new static("Unable to copy file from $sourcePath to $destinationPath, because $reason");
        $e->source = $sourcePath;
        $e->destination = $destinationPath;

        return $e;
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function operation(): string
    {
        return FilesystemOperationFailed::OPERATION_COPY;
    }
}
