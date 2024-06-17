<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI;

use function array_map;
use PHPUnit\Event;
use PHPUnit\Framework\TestSuite;
use PHPUnit\Runner\Filter\Factory;
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\TextUI\Configuration\FilterNotConfiguredException;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteFilterProcessor
{
<<<<<<< HEAD
=======
    private Factory $filterFactory;

    public function __construct(Factory $factory = new Factory)
    {
        $this->filterFactory = $factory;
    }

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @throws Event\RuntimeException
     * @throws FilterNotConfiguredException
     */
    public function process(Configuration $configuration, TestSuite $suite): void
    {
<<<<<<< HEAD
        $factory = new Factory;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!$configuration->hasFilter() &&
            !$configuration->hasGroups() &&
            !$configuration->hasExcludeGroups() &&
            !$configuration->hasTestsCovering() &&
            !$configuration->hasTestsUsing()) {
            return;
        }

        if ($configuration->hasExcludeGroups()) {
<<<<<<< HEAD
            $factory->addExcludeGroupFilter(
                $configuration->excludeGroups(),
=======
            $this->filterFactory->addExcludeGroupFilter(
                $configuration->excludeGroups()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($configuration->hasGroups()) {
<<<<<<< HEAD
            $factory->addIncludeGroupFilter(
                $configuration->groups(),
=======
            $this->filterFactory->addIncludeGroupFilter(
                $configuration->groups()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($configuration->hasTestsCovering()) {
<<<<<<< HEAD
            $factory->addIncludeGroupFilter(
                array_map(
                    static fn (string $name): string => '__phpunit_covers_' . $name,
                    $configuration->testsCovering(),
                ),
=======
            $this->filterFactory->addIncludeGroupFilter(
                array_map(
                    static fn (string $name): string => '__phpunit_covers_' . $name,
                    $configuration->testsCovering()
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($configuration->hasTestsUsing()) {
<<<<<<< HEAD
            $factory->addIncludeGroupFilter(
                array_map(
                    static fn (string $name): string => '__phpunit_uses_' . $name,
                    $configuration->testsUsing(),
                ),
=======
            $this->filterFactory->addIncludeGroupFilter(
                array_map(
                    static fn (string $name): string => '__phpunit_uses_' . $name,
                    $configuration->testsUsing()
                )
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        if ($configuration->hasFilter()) {
<<<<<<< HEAD
            $factory->addNameFilter(
                $configuration->filter(),
            );
        }

        $suite->injectFilter($factory);

        Event\Facade::emitter()->testSuiteFiltered(
            Event\TestSuite\TestSuiteBuilder::from($suite),
=======
            $this->filterFactory->addNameFilter(
                $configuration->filter()
            );
        }

        $suite->injectFilter($this->filterFactory);

        Event\Facade::emitter()->testSuiteFiltered(
            Event\TestSuite\TestSuite::fromTestSuite($suite)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
