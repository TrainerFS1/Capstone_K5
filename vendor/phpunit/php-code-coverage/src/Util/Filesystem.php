<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\Util;

use function is_dir;
use function mkdir;
use function sprintf;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
 */
final class Filesystem
{
    /**
     * @throws DirectoryCouldNotBeCreatedException
     */
    public static function createDirectory(string $directory): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $success = !(!is_dir($directory) && !@mkdir($directory, 0o777, true) && !is_dir($directory));
=======
        $success = !(!is_dir($directory) && !@mkdir($directory, 0777, true) && !is_dir($directory));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $success = !(!is_dir($directory) && !@mkdir($directory, 0777, true) && !is_dir($directory));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        if (!$success) {
            throw new DirectoryCouldNotBeCreatedException(
                sprintf(
                    'Directory "%s" could not be created',
<<<<<<< HEAD
<<<<<<< HEAD
                    $directory,
                ),
=======
                    $directory
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    $directory
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }
}
