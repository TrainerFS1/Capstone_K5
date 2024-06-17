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

use function assert;
use function file_get_contents;
use function file_put_contents;
use function serialize;
use function unserialize;
use PHPUnit\Event\Facade as EventFacade;
use PHPUnit\TextUI\CliArguments\Configuration as CliConfiguration;
<<<<<<< HEAD
use PHPUnit\TextUI\CliArguments\Exception;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\TextUI\XmlConfiguration\Configuration as XmlConfiguration;
use PHPUnit\Util\VersionComparisonOperator;

/**
 * CLI options and XML configuration are static within a single PHPUnit process.
 * It is therefore okay to use a Singleton registry here.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Registry
{
    private static ?Configuration $instance = null;

    public static function saveTo(string $path): bool
    {
        $result = file_put_contents(
            $path,
<<<<<<< HEAD
            serialize(self::get()),
=======
            serialize(self::get())
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        if ($result) {
            return true;
        }

<<<<<<< HEAD
        // @codeCoverageIgnoreStart
        return false;
        // @codeCoverageIgnoreEnd
=======
        return false;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * This method is used by the "run test(s) in separate process" templates.
     *
     * @noinspection PhpUnused
<<<<<<< HEAD
     *
     * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public static function loadFrom(string $path): void
    {
        self::$instance = unserialize(
            file_get_contents($path),
            [
                'allowed_classes' => [
                    Configuration::class,
                    Php::class,
                    ConstantCollection::class,
                    Constant::class,
                    IniSettingCollection::class,
                    IniSetting::class,
                    VariableCollection::class,
                    Variable::class,
                    DirectoryCollection::class,
                    Directory::class,
                    FileCollection::class,
                    File::class,
                    FilterDirectoryCollection::class,
                    FilterDirectory::class,
                    TestDirectoryCollection::class,
                    TestDirectory::class,
                    TestFileCollection::class,
                    TestFile::class,
                    TestSuiteCollection::class,
                    TestSuite::class,
                    VersionComparisonOperator::class,
<<<<<<< HEAD
                    Source::class,
                ],
            ],
=======
                ],
            ]
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    public static function get(): Configuration
    {
        assert(self::$instance instanceof Configuration);

        return self::$instance;
    }

    /**
<<<<<<< HEAD
     * @throws \PHPUnit\TextUI\XmlConfiguration\Exception
     * @throws Exception
=======
     * @throws \PHPUnit\TextUI\CliArguments\Exception
     * @throws \PHPUnit\TextUI\XmlConfiguration\Exception
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws NoCustomCssFileException
     */
    public static function init(CliConfiguration $cliConfiguration, XmlConfiguration $xmlConfiguration): Configuration
    {
        self::$instance = (new Merger)->merge($cliConfiguration, $xmlConfiguration);

        EventFacade::emitter()->testRunnerConfigured(self::$instance);

        return self::$instance;
    }
}
