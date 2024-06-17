<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Manifest.
 *
<<<<<<< HEAD
<<<<<<< HEAD
 * Copyright (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de> and contributors
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */
namespace PharIo\Manifest;

use function sprintf;

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PharIo\Manifest;

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class ManifestLoader {
    public static function fromFile(string $filename): Manifest {
        try {
            return (new ManifestDocumentMapper())->map(
                ManifestDocument::fromFile($filename)
            );
        } catch (Exception $e) {
            throw new ManifestLoaderException(
<<<<<<< HEAD
<<<<<<< HEAD
                sprintf('Loading %s failed.', $filename),
=======
                \sprintf('Loading %s failed.', $filename),
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                \sprintf('Loading %s failed.', $filename),
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                (int)$e->getCode(),
                $e
            );
        }
    }

    public static function fromPhar(string $filename): Manifest {
        return self::fromFile('phar://' . $filename . '/manifest.xml');
    }

    public static function fromString(string $manifest): Manifest {
        try {
            return (new ManifestDocumentMapper())->map(
                ManifestDocument::fromString($manifest)
            );
        } catch (Exception $e) {
            throw new ManifestLoaderException(
                'Processing string failed',
                (int)$e->getCode(),
                $e
            );
        }
    }
}
