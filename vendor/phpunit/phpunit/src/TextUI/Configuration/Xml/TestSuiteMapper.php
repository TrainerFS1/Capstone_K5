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

use const PHP_VERSION;
<<<<<<< HEAD
<<<<<<< HEAD
use function array_merge;
use function array_unique;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function explode;
use function in_array;
use function is_dir;
use function is_file;
use function str_contains;
use function version_compare;
use PHPUnit\Framework\Exception as FrameworkException;
use PHPUnit\Framework\TestSuite as TestSuiteObject;
use PHPUnit\TextUI\Configuration\TestSuiteCollection;
use PHPUnit\TextUI\RuntimeException;
use PHPUnit\TextUI\TestDirectoryNotFoundException;
use PHPUnit\TextUI\TestFileNotFoundException;
use SebastianBergmann\FileIterator\Facade;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteMapper
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param non-empty-string $xmlConfigurationFile,
     *
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws RuntimeException
     * @throws TestDirectoryNotFoundException
     * @throws TestFileNotFoundException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function map(string $xmlConfigurationFile, TestSuiteCollection $configuration, string $filter, string $excludedTestSuites): TestSuiteObject
=======
    public function map(TestSuiteCollection $configuration, string $filter, string $excludedTestSuites): TestSuiteObject
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function map(TestSuiteCollection $configuration, string $filter, string $excludedTestSuites): TestSuiteObject
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        try {
            $filterAsArray         = $filter ? explode(',', $filter) : [];
            $excludedFilterAsArray = $excludedTestSuites ? explode(',', $excludedTestSuites) : [];
<<<<<<< HEAD
<<<<<<< HEAD
            $result                = TestSuiteObject::empty($xmlConfigurationFile);
=======
            $result                = TestSuiteObject::empty();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $result                = TestSuiteObject::empty();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            foreach ($configuration as $testSuiteConfiguration) {
                if (!empty($filterAsArray) && !in_array($testSuiteConfiguration->name(), $filterAsArray, true)) {
                    continue;
                }

                if (!empty($excludedFilterAsArray) && in_array($testSuiteConfiguration->name(), $excludedFilterAsArray, true)) {
                    continue;
                }

<<<<<<< HEAD
<<<<<<< HEAD
=======
                $testSuite      = TestSuiteObject::empty($testSuiteConfiguration->name());
                $testSuiteEmpty = true;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $testSuite      = TestSuiteObject::empty($testSuiteConfiguration->name());
                $testSuiteEmpty = true;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $exclude = [];

                foreach ($testSuiteConfiguration->exclude()->asArray() as $file) {
                    $exclude[] = $file->path();
                }

<<<<<<< HEAD
<<<<<<< HEAD
                $files = [];

                foreach ($testSuiteConfiguration->directories() as $directory) {
                    if (!str_contains($directory->path(), '*') && !is_dir($directory->path())) {
                        throw new TestDirectoryNotFoundException($directory->path());
                    }

=======
                foreach ($testSuiteConfiguration->directories() as $directory) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                foreach ($testSuiteConfiguration->directories() as $directory) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    if (!version_compare(PHP_VERSION, $directory->phpVersion(), $directory->phpVersionOperator()->asString())) {
                        continue;
                    }

<<<<<<< HEAD
<<<<<<< HEAD
                    $files = array_merge(
                        $files,
                        (new Facade)->getFilesAsArray(
                            $directory->path(),
                            $directory->suffix(),
                            $directory->prefix(),
                            $exclude,
                        ),
                    );
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    $files = (new Facade)->getFilesAsArray(
                        $directory->path(),
                        $directory->suffix(),
                        $directory->prefix(),
                        $exclude
                    );

                    if (!empty($files)) {
                        $testSuite->addTestFiles($files);

                        $testSuiteEmpty = false;
                    } elseif (!str_contains($directory->path(), '*') && !is_dir($directory->path())) {
                        throw new TestDirectoryNotFoundException($directory->path());
                    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                }

                foreach ($testSuiteConfiguration->files() as $file) {
                    if (!is_file($file->path())) {
                        throw new TestFileNotFoundException($file->path());
                    }

                    if (!version_compare(PHP_VERSION, $file->phpVersion(), $file->phpVersionOperator()->asString())) {
                        continue;
                    }

<<<<<<< HEAD
<<<<<<< HEAD
                    $files[] = $file->path();
                }

                if (!empty($files)) {
                    $testSuite = TestSuiteObject::empty($testSuiteConfiguration->name());

                    $testSuite->addTestFiles(array_unique($files));

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    $testSuite->addTestFile($file->path());

                    $testSuiteEmpty = false;
                }

                if (!$testSuiteEmpty) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    $result->addTest($testSuite);
                }
            }

            return $result;
        } catch (FrameworkException $e) {
            throw new RuntimeException(
                $e->getMessage(),
                $e->getCode(),
<<<<<<< HEAD
<<<<<<< HEAD
                $e,
=======
                $e
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $e
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
    }
}
