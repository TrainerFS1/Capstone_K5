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

use PHPUnit\Runner\TestSuiteSorter;
use PHPUnit\TextUI\Configuration\ConstantCollection;
use PHPUnit\TextUI\Configuration\DirectoryCollection;
use PHPUnit\TextUI\Configuration\ExtensionBootstrapCollection;
use PHPUnit\TextUI\Configuration\FileCollection;
use PHPUnit\TextUI\Configuration\FilterDirectoryCollection as CodeCoverageFilterDirectoryCollection;
use PHPUnit\TextUI\Configuration\GroupCollection;
use PHPUnit\TextUI\Configuration\IniSettingCollection;
use PHPUnit\TextUI\Configuration\Php;
<<<<<<< HEAD
use PHPUnit\TextUI\Configuration\Source;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\TextUI\Configuration\TestSuiteCollection;
use PHPUnit\TextUI\Configuration\VariableCollection;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage;
use PHPUnit\TextUI\XmlConfiguration\Logging\Logging;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class DefaultConfiguration extends Configuration
{
    public static function create(): self
    {
        return new self(
            ExtensionBootstrapCollection::fromArray([]),
<<<<<<< HEAD
            new Source(
                null,
                false,
                CodeCoverageFilterDirectoryCollection::fromArray([]),
                FileCollection::fromArray([]),
                CodeCoverageFilterDirectoryCollection::fromArray([]),
                FileCollection::fromArray([]),
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
            ),
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            new CodeCoverage(
                null,
                CodeCoverageFilterDirectoryCollection::fromArray([]),
                FileCollection::fromArray([]),
                CodeCoverageFilterDirectoryCollection::fromArray([]),
                FileCollection::fromArray([]),
                false,
                true,
                false,
                false,
                null,
                null,
                null,
                null,
                null,
                null,
<<<<<<< HEAD
                null,
            ),
            new Groups(
                GroupCollection::fromArray([]),
                GroupCollection::fromArray([]),
=======
                null
            ),
            new Groups(
                GroupCollection::fromArray([]),
                GroupCollection::fromArray([])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            ),
            new Logging(
                null,
                null,
                null,
<<<<<<< HEAD
                null,
=======
                null
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            ),
            new Php(
                DirectoryCollection::fromArray([]),
                IniSettingCollection::fromArray([]),
                ConstantCollection::fromArray([]),
                VariableCollection::fromArray([]),
                VariableCollection::fromArray([]),
                VariableCollection::fromArray([]),
                VariableCollection::fromArray([]),
                VariableCollection::fromArray([]),
                VariableCollection::fromArray([]),
                VariableCollection::fromArray([]),
<<<<<<< HEAD
                VariableCollection::fromArray([]),
=======
                VariableCollection::fromArray([])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            ),
            new PHPUnit(
                null,
                true,
                null,
                80,
                \PHPUnit\TextUI\Configuration\Configuration::COLOR_DEFAULT,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                null,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
                false,
<<<<<<< HEAD
                false,
                false,
                false,
                false,
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                null,
                false,
                false,
                true,
                false,
                false,
                1,
                1,
                10,
                60,
                null,
                TestSuiteSorter::ORDER_DEFAULT,
                true,
                false,
                false,
                false,
                false,
<<<<<<< HEAD
                false,
                false,
                100,
            ),
            TestSuiteCollection::fromArray([]),
=======
                false
            ),
            TestSuiteCollection::fromArray([])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public function isDefault(): bool
    {
        return true;
    }
}
