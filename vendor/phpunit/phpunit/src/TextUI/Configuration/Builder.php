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

use PHPUnit\TextUI\CliArguments\Builder as CliConfigurationBuilder;
use PHPUnit\TextUI\CliArguments\Exception as CliConfigurationException;
use PHPUnit\TextUI\CliArguments\XmlConfigurationFileFinder;
use PHPUnit\TextUI\XmlConfiguration\DefaultConfiguration;
use PHPUnit\TextUI\XmlConfiguration\Exception as XmlConfigurationException;
use PHPUnit\TextUI\XmlConfiguration\Loader;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @codeCoverageIgnore
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class Builder
{
    /**
     * @throws ConfigurationCannotBeBuiltException
     */
    public function build(array $argv): Configuration
    {
        try {
            $cliConfiguration  = (new CliConfigurationBuilder)->fromParameters($argv);
            $configurationFile = (new XmlConfigurationFileFinder)->find($cliConfiguration);
            $xmlConfiguration  = DefaultConfiguration::create();

<<<<<<< HEAD
<<<<<<< HEAD
            if ($configurationFile !== false) {
=======
            if ($configurationFile) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            if ($configurationFile) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $xmlConfiguration = (new Loader)->load($configurationFile);
            }

            return Registry::init(
                $cliConfiguration,
<<<<<<< HEAD
<<<<<<< HEAD
                $xmlConfiguration,
=======
                $xmlConfiguration
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $xmlConfiguration
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        } catch (CliConfigurationException|XmlConfigurationException $e) {
            throw new ConfigurationCannotBeBuiltException(
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
