<?php

namespace Psr\Http\Message;

interface UploadedFileFactoryInterface
{
    /**
     * Create a new uploaded file.
     *
     * If a size is not provided it will be determined by checking the size of
     * the file.
     *
     * @see http://php.net/manual/features.file-upload.post-method.php
     * @see http://php.net/manual/features.file-upload.errors.php
     *
     * @param StreamInterface $stream Underlying stream representing the
     *     uploaded file content.
<<<<<<< HEAD
     * @param int|null $size in bytes
     * @param int $error PHP file upload error
     * @param string|null $clientFilename Filename as provided by the client, if any.
     * @param string|null $clientMediaType Media type as provided by the client, if any.
=======
     * @param int $size in bytes
     * @param int $error PHP file upload error
     * @param string $clientFilename Filename as provided by the client, if any.
     * @param string $clientMediaType Media type as provided by the client, if any.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return UploadedFileInterface
     *
     * @throws \InvalidArgumentException If the file resource is not readable.
     */
    public function createUploadedFile(
        StreamInterface $stream,
<<<<<<< HEAD
        ?int $size = null,
        int $error = \UPLOAD_ERR_OK,
        ?string $clientFilename = null,
        ?string $clientMediaType = null
=======
        int $size = null,
        int $error = \UPLOAD_ERR_OK,
        string $clientFilename = null,
        string $clientMediaType = null
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ): UploadedFileInterface;
}
