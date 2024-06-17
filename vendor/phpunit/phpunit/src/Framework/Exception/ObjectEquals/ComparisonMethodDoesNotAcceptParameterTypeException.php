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
=======
use const PHP_EOL;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function sprintf;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotAcceptParameterTypeException extends Exception
{
    public function __construct(string $className, string $methodName, string $type)
    {
        parent::__construct(
            sprintf(
                '%s is not an accepted argument type for comparison method %s::%s().',
                $type,
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
