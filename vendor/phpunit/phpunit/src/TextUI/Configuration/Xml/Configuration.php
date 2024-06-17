<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\XmlConfiguration;

use PHPUnit\TextUI\Configuration\ExtensionBootstrapCollection;
use PHPUnit\TextUI\Configuration\Php;
<<<<<<< HEAD
use PHPUnit\TextUI\Configuration\Source;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\TextUI\Configuration\TestSuiteCollection;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage;
use PHPUnit\TextUI\XmlConfiguration\Logging\Logging;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
abstract class Configuration
{
    private readonly ExtensionBootstrapCollection $extensions;
<<<<<<< HEAD
    private readonly Source $source;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly CodeCoverage $codeCoverage;
    private readonly Groups $groups;
    private readonly Logging $logging;
    private readonly Php $php;
    private readonly PHPUnit $phpunit;
    private readonly TestSuiteCollection $testSuite;

<<<<<<< HEAD
    public function __construct(ExtensionBootstrapCollection $extensions, Source $source, CodeCoverage $codeCoverage, Groups $groups, Logging $logging, Php $php, PHPUnit $phpunit, TestSuiteCollection $testSuite)
    {
        $this->extensions   = $extensions;
        $this->source       = $source;
=======
    public function __construct(ExtensionBootstrapCollection $extensions, CodeCoverage $codeCoverage, Groups $groups, Logging $logging, Php $php, PHPUnit $phpunit, TestSuiteCollection $testSuite)
    {
        $this->extensions   = $extensions;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->codeCoverage = $codeCoverage;
        $this->groups       = $groups;
        $this->logging      = $logging;
        $this->php          = $php;
        $this->phpunit      = $phpunit;
        $this->testSuite    = $testSuite;
    }

    public function extensions(): ExtensionBootstrapCollection
    {
        return $this->extensions;
    }

<<<<<<< HEAD
    public function source(): Source
    {
        return $this->source;
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function codeCoverage(): CodeCoverage
    {
        return $this->codeCoverage;
    }

    public function groups(): Groups
    {
        return $this->groups;
    }

    public function logging(): Logging
    {
        return $this->logging;
    }

    public function php(): Php
    {
        return $this->php;
    }

    public function phpunit(): PHPUnit
    {
        return $this->phpunit;
    }

    public function testSuite(): TestSuiteCollection
    {
        return $this->testSuite;
    }

    /**
     * @psalm-assert-if-true DefaultConfiguration $this
     */
    public function isDefault(): bool
    {
        return false;
    }

    /**
     * @psalm-assert-if-true LoadedFromFileConfiguration $this
     */
    public function wasLoadedFromFile(): bool
    {
        return false;
    }
}
