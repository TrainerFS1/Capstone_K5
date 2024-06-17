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
use function sprintf;
=======
use const PHP_EOL;
use function sprintf;
use Stringable;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
<<<<<<< HEAD
final class ComparisonMethodDoesNotDeclareParameterTypeException extends Exception
=======
final class ComparisonMethodDoesNotDeclareParameterTypeException extends Exception implements Stringable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    public function __construct(string $className, string $methodName)
    {
        parent::__construct(
            sprintf(
                'Parameter of comparison method %s::%s() does not have a declared type.',
                $className,
<<<<<<< HEAD
                $methodName,
            ),
        );
    }
=======
                $methodName
            )
        );
    }

    public function __toString(): string
    {
        return $this->getMessage() . PHP_EOL;
    }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
