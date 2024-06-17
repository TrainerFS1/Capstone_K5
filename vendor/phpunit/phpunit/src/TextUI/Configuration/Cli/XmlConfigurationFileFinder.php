<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\CliArguments;

use function getcwd;
use function is_dir;
use function is_file;
use function realpath;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class XmlConfigurationFileFinder
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function find(Configuration $configuration): false|string
=======
    public function find(Configuration $configuration): string|false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function find(Configuration $configuration): string|false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $useDefaultConfiguration = $configuration->useDefaultConfiguration();

        if ($configuration->hasConfigurationFile()) {
            if (is_dir($configuration->configurationFile())) {
                $candidate = $this->configurationFileInDirectory($configuration->configurationFile());

<<<<<<< HEAD
<<<<<<< HEAD
                if ($candidate !== false) {
=======
                if ($candidate) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                if ($candidate) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    return $candidate;
                }

                return false;
            }

            return $configuration->configurationFile();
        }

        if ($useDefaultConfiguration) {
            $candidate = $this->configurationFileInDirectory(getcwd());

<<<<<<< HEAD
<<<<<<< HEAD
            if ($candidate !== false) {
=======
            if ($candidate) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            if ($candidate) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                return $candidate;
            }
        }

        return false;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    private function configurationFileInDirectory(string $directory): false|string
=======
    private function configurationFileInDirectory(string $directory): string|false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function configurationFileInDirectory(string $directory): string|false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $candidates = [
            $directory . '/phpunit.xml',
            $directory . '/phpunit.dist.xml',
            $directory . '/phpunit.xml.dist',
        ];

        foreach ($candidates as $candidate) {
            if (is_file($candidate)) {
                return realpath($candidate);
            }
        }

        return false;
    }
}
