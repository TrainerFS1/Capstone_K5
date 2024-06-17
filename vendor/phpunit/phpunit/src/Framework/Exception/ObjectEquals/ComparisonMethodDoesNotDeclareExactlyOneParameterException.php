<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

<<<<<<< HEAD
<<<<<<< HEAD
use function sprintf;
=======
use const PHP_EOL;
use function sprintf;
use Stringable;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use const PHP_EOL;
use function sprintf;
use Stringable;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
<<<<<<< HEAD
<<<<<<< HEAD
final class ComparisonMethodDoesNotDeclareExactlyOneParameterException extends Exception
=======
final class ComparisonMethodDoesNotDeclareExactlyOneParameterException extends Exception implements Stringable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
final class ComparisonMethodDoesNotDeclareExactlyOneParameterException extends Exception implements Stringable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    public function __construct(string $className, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Comparison method %s::%s() does not declare exactly one parameter.',
                $className,
<<<<<<< HEAD
<<<<<<< HEAD
                $methodName,
            ),
        );
    }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $methodName
            )
        );
    }

    public function __toString(): string
    {
        return $this->getMessage() . PHP_EOL;
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
