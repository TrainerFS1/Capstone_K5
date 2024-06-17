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

use function explode;
use PHPUnit\Framework\TestSize\TestSize;
use PHPUnit\Metadata\Api\Groups;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DataProviderTestSuite extends TestSuite
{
    /**
     * @psalm-var list<ExecutionOrderDependency>
     */
    private array $dependencies   = [];
    private ?array $providedTests = null;

    /**
     * @psalm-param list<ExecutionOrderDependency> $dependencies
     */
    public function setDependencies(array $dependencies): void
    {
        $this->dependencies = $dependencies;

        foreach ($this->tests() as $test) {
            if (!$test instanceof TestCase) {
<<<<<<< HEAD
                continue;
            }

=======
                // @codeCoverageIgnoreStart
                continue;
                // @codeCoverageIgnoreStart
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $test->setDependencies($dependencies);
        }
    }

    /**
     * @psalm-return list<ExecutionOrderDependency>
     */
    public function provides(): array
    {
        if ($this->providedTests === null) {
<<<<<<< HEAD
            $this->providedTests = [new ExecutionOrderDependency($this->name())];
=======
            $this->providedTests = [new ExecutionOrderDependency($this->getName())];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $this->providedTests;
    }

    /**
     * @psalm-return list<ExecutionOrderDependency>
     */
    public function requires(): array
    {
        // A DataProviderTestSuite does not have to traverse its child tests
        // as these are inherited and cannot reference dataProvider rows directly
        return $this->dependencies;
    }

    /**
<<<<<<< HEAD
     * Returns the size of each test created using the data provider(s).
     */
    public function size(): TestSize
    {
        [$className, $methodName] = explode('::', $this->name());
=======
     * Returns the size of the each test created using the data provider(s).
     */
    public function size(): TestSize
    {
        [$className, $methodName] = explode('::', $this->getName());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return (new Groups)->size($className, $methodName);
    }
}
