<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage;

use function dirname;
use SebastianBergmann\Version as VersionId;

final class Version
{
    private static string $version = '';

    public static function id(): string
    {
        if (self::$version === '') {
<<<<<<< HEAD
            self::$version = (new VersionId('10.1.14', dirname(__DIR__)))->asString();
=======
            self::$version = (new VersionId('10.0.0', dirname(__DIR__)))->asString();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return self::$version;
    }
}
