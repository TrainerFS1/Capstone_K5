<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata;

use function sprintf;
<<<<<<< HEAD
<<<<<<< HEAD
use PHPUnit\Exception;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use RuntimeException;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
<<<<<<< HEAD
<<<<<<< HEAD
final class AnnotationsAreNotSupportedForInternalClassesException extends RuntimeException implements Exception
=======
final class AnnotationsAreNotSupportedForInternalClassesException extends RuntimeException implements \PHPUnit\Exception
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
final class AnnotationsAreNotSupportedForInternalClassesException extends RuntimeException implements \PHPUnit\Exception
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    /**
     * @psalm-param class-string $className
     */
    public function __construct(string $className)
    {
        parent::__construct(
            sprintf(
                'Annotations can only be parsed for user-defined classes, trying to parse annotations for class "%s"',
<<<<<<< HEAD
<<<<<<< HEAD
                $className,
            ),
=======
                $className
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $className
            )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
