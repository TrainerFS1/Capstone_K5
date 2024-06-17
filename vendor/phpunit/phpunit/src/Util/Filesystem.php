<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

<<<<<<< HEAD
<<<<<<< HEAD
use function basename;
use function dirname;
use function is_dir;
use function mkdir;
use function realpath;
use function str_starts_with;
=======
use function is_dir;
use function mkdir;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use function is_dir;
use function mkdir;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Filesystem
{
    public static function createDirectory(string $directory): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return !(!is_dir($directory) && !@mkdir($directory, 0o777, true) && !is_dir($directory));
    }

    /**
     * @psalm-param non-empty-string $path
     *
     * @return false|non-empty-string
     */
    public static function resolveStreamOrFile(string $path): false|string
    {
        if (str_starts_with($path, 'php://') || str_starts_with($path, 'socket://')) {
            return $path;
        }

        $directory = dirname($path);

        if (is_dir($directory)) {
            return realpath($directory) . DIRECTORY_SEPARATOR . basename($path);
        }

        return false;
=======
        return !(!is_dir($directory) && !@mkdir($directory, 0777, true) && !is_dir($directory));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return !(!is_dir($directory) && !@mkdir($directory, 0777, true) && !is_dir($directory));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
