<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Api;

use function assert;
use PHPUnit\Framework\ExecutionOrderDependency;
use PHPUnit\Metadata\DependsOnClass;
use PHPUnit\Metadata\DependsOnMethod;
use PHPUnit\Metadata\Parser\Registry;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Dependencies
{
    /**
     * @psalm-param class-string $className
<<<<<<< HEAD
     * @psalm-param non-empty-string $methodName
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function dependencies(string $className, string $methodName): array
    {
        $dependencies = [];

        foreach (Registry::parser()->forClassAndMethod($className, $methodName)->isDepends() as $metadata) {
            if ($metadata->isDependsOnClass()) {
                assert($metadata instanceof DependsOnClass);

                $dependencies[] = ExecutionOrderDependency::forClass($metadata);
<<<<<<< HEAD

                continue;
            }

            assert($metadata instanceof DependsOnMethod);

            if (empty($metadata->methodName())) {
                $dependencies[] = ExecutionOrderDependency::invalid();

                continue;
            }

            $dependencies[] = ExecutionOrderDependency::forMethod($metadata);
=======
            }

            if ($metadata->isDependsOnMethod()) {
                assert($metadata instanceof DependsOnMethod);

                if (empty($metadata->methodName())) {
                    $dependencies[] = ExecutionOrderDependency::invalid();
                } else {
                    $dependencies[] = ExecutionOrderDependency::forMethod($metadata);
                }
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $dependencies;
    }
}
