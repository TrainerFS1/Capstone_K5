<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Command;

<<<<<<< HEAD
<<<<<<< HEAD
use const PHP_EOL;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function printf;
use PHPUnit\TextUI\Configuration\CodeCoverageFilterRegistry;
use PHPUnit\TextUI\Configuration\Configuration;
use PHPUnit\TextUI\Configuration\NoCoverageCacheDirectoryException;
use SebastianBergmann\CodeCoverage\StaticAnalysis\CacheWarmer;
use SebastianBergmann\Timer\NoActiveTimerException;
use SebastianBergmann\Timer\Timer;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class WarmCodeCoverageCacheCommand implements Command
{
    private readonly Configuration $configuration;
    private readonly CodeCoverageFilterRegistry $codeCoverageFilterRegistry;

    public function __construct(Configuration $configuration, CodeCoverageFilterRegistry $codeCoverageFilterRegistry)
    {
        $this->configuration              = $configuration;
        $this->codeCoverageFilterRegistry = $codeCoverageFilterRegistry;
    }

    /**
     * @throws NoActiveTimerException
     * @throws NoCoverageCacheDirectoryException
     */
    public function execute(): Result
    {
        if (!$this->configuration->hasCoverageCacheDirectory()) {
            return Result::from(
                'Cache for static analysis has not been configured' . PHP_EOL,
<<<<<<< HEAD
<<<<<<< HEAD
                Result::FAILURE,
            );
        }

        $this->codeCoverageFilterRegistry->init($this->configuration, true);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                Result::FAILURE
            );
        }

        $this->codeCoverageFilterRegistry->init($this->configuration);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        if (!$this->codeCoverageFilterRegistry->configured()) {
            return Result::from(
                'Filter for code coverage has not been configured' . PHP_EOL,
<<<<<<< HEAD
<<<<<<< HEAD
                Result::FAILURE,
=======
                Result::FAILURE
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                Result::FAILURE
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        $timer = new Timer;
        $timer->start();

        print 'Warming cache for static analysis ... ';

        (new CacheWarmer)->warmCache(
            $this->configuration->coverageCacheDirectory(),
            !$this->configuration->disableCodeCoverageIgnore(),
            $this->configuration->ignoreDeprecatedCodeUnitsFromCodeCoverage(),
<<<<<<< HEAD
<<<<<<< HEAD
            $this->codeCoverageFilterRegistry->get(),
=======
            $this->codeCoverageFilterRegistry->get()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->codeCoverageFilterRegistry->get()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        printf(
            '[%s]%s',
            $timer->stop()->asString(),
<<<<<<< HEAD
<<<<<<< HEAD
            PHP_EOL,
=======
            \PHP_EOL
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            \PHP_EOL
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        return Result::from();
    }
}
