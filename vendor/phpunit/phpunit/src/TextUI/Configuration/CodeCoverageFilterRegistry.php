<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Configuration;

<<<<<<< HEAD
<<<<<<< HEAD
use function array_keys;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function assert;
use SebastianBergmann\CodeCoverage\Filter;

/**
 * CLI options and XML configuration are static within a single PHPUnit process.
 * It is therefore okay to use a Singleton registry here.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CodeCoverageFilterRegistry
{
    private static ?self $instance = null;
    private ?Filter $filter        = null;
    private bool $configured       = false;

    public static function instance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @codeCoverageIgnore
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function get(): Filter
    {
        assert($this->filter !== null);

        return $this->filter;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @codeCoverageIgnore
     */
    public function init(Configuration $configuration, bool $force = false): void
    {
        if (!$configuration->hasCoverageReport() && !$force) {
            return;
        }

        if ($this->configured && !$force) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function init(Configuration $configuration): void
    {
        if (!$configuration->hasCoverageReport()) {
            return;
        }

        if ($this->configured) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return;
        }

        $this->filter = new Filter;

<<<<<<< HEAD
<<<<<<< HEAD
        if ($configuration->source()->notEmpty()) {
            $this->filter->includeFiles(array_keys((new SourceMapper)->map($configuration->source())));
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($configuration->hasNonEmptyListOfFilesToBeIncludedInCodeCoverageReport()) {
            foreach ($configuration->coverageIncludeDirectories() as $directory) {
                $this->filter->includeDirectory(
                    $directory->path(),
                    $directory->suffix(),
                    $directory->prefix()
                );
            }

            foreach ($configuration->coverageIncludeFiles() as $file) {
                $this->filter->includeFile($file->path());
            }

            foreach ($configuration->coverageExcludeDirectories() as $directory) {
                $this->filter->excludeDirectory(
                    $directory->path(),
                    $directory->suffix(),
                    $directory->prefix()
                );
            }

            foreach ($configuration->coverageExcludeFiles() as $file) {
                $this->filter->excludeFile($file->path());
            }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            $this->configured = true;
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @codeCoverageIgnore
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function configured(): bool
    {
        return $this->configured;
    }
}
