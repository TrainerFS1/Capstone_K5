<?php

declare(strict_types=1);

namespace League\MimeTypeDetection;

use const PATHINFO_EXTENSION;

<<<<<<< HEAD
class ExtensionMimeTypeDetector implements MimeTypeDetector, ExtensionLookup
=======
class ExtensionMimeTypeDetector implements MimeTypeDetector
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    /**
     * @var ExtensionToMimeTypeMap
     */
    private $extensions;

    public function __construct(ExtensionToMimeTypeMap $extensions = null)
    {
        $this->extensions = $extensions ?: new GeneratedExtensionToMimeTypeMap();
    }

    public function detectMimeType(string $path, $contents): ?string
    {
        return $this->detectMimeTypeFromPath($path);
    }

    public function detectMimeTypeFromPath(string $path): ?string
    {
        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        return $this->extensions->lookupMimeType($extension);
    }

    public function detectMimeTypeFromFile(string $path): ?string
    {
        return $this->detectMimeTypeFromPath($path);
    }

    public function detectMimeTypeFromBuffer(string $contents): ?string
    {
        return null;
    }
<<<<<<< HEAD

    public function lookupExtension(string $mimetype): ?string
    {
        return $this->extensions instanceof ExtensionLookup
            ? $this->extensions->lookupExtension($mimetype)
            : null;
    }

    public function lookupAllExtensions(string $mimetype): array
    {
        return $this->extensions instanceof ExtensionLookup
            ? $this->extensions->lookupAllExtensions($mimetype)
            : [];
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
