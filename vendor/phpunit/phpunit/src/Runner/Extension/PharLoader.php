<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner\Extension;

<<<<<<< HEAD
use function count;
use function explode;
use function extension_loaded;
use function implode;
use function is_file;
use function sprintf;
use function str_contains;
=======
use function extension_loaded;
use function is_file;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PharIo\Manifest\ApplicationName;
use PharIo\Manifest\Exception as ManifestException;
use PharIo\Manifest\ManifestLoader;
use PharIo\Version\Version as PharIoVersion;
use PHPUnit\Event;
use PHPUnit\Runner\Version;
use SebastianBergmann\FileIterator\Facade as FileIteratorFacade;
<<<<<<< HEAD
use Throwable;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PharLoader
{
    /**
<<<<<<< HEAD
     * @psalm-param non-empty-string $directory
     *
     * @psalm-return list<string>
=======
     * @psalm-return array{loadedExtensions: list<string>, notLoadedExtensions: list<string>}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function loadPharExtensionsInDirectory(string $directory): array
    {
        $pharExtensionLoaded = extension_loaded('phar');
<<<<<<< HEAD
        $loadedExtensions    = [];

        foreach ((new FileIteratorFacade)->getFilesAsArray($directory, '.phar') as $file) {
            if (!$pharExtensionLoaded) {
                Event\Facade::emitter()->testRunnerTriggeredWarning(
                    sprintf(
                        'Cannot load extension from %s because the PHAR extension is not available',
                        $file,
                    ),
                );
=======

        if (!$pharExtensionLoaded) {
            Event\Facade::emitter()->testRunnerTriggeredWarning(
                'Loading PHPUnit extension(s) from PHP archive(s) failed, PHAR extension not loaded'
            );
        }

        $loadedExtensions    = [];
        $notLoadedExtensions = [];

        foreach ((new FileIteratorFacade)->getFilesAsArray($directory, '.phar') as $file) {
            if (!$pharExtensionLoaded) {
                $notLoadedExtensions[] = $file . ' cannot be loaded';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

                continue;
            }

            if (!is_file('phar://' . $file . '/manifest.xml')) {
<<<<<<< HEAD
                Event\Facade::emitter()->testRunnerTriggeredWarning(
                    sprintf(
                        '%s is not an extension for PHPUnit',
                        $file,
                    ),
                );
=======
                $notLoadedExtensions[] = $file . ' is not an extension for PHPUnit';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

                continue;
            }

            try {
                $applicationName = new ApplicationName('phpunit/phpunit');
<<<<<<< HEAD
                $version         = new PharIoVersion($this->phpunitVersion());
                $manifest        = ManifestLoader::fromFile('phar://' . $file . '/manifest.xml');

                if (!$manifest->isExtensionFor($applicationName)) {
                    Event\Facade::emitter()->testRunnerTriggeredWarning(
                        sprintf(
                            '%s is not an extension for PHPUnit',
                            $file,
                        ),
                    );
=======
                $version         = new PharIoVersion(Version::series());
                $manifest        = ManifestLoader::fromFile('phar://' . $file . '/manifest.xml');

                if (!$manifest->isExtensionFor($applicationName)) {
                    $notLoadedExtensions[] = $file . ' is not an extension for PHPUnit';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

                    continue;
                }

                if (!$manifest->isExtensionFor($applicationName, $version)) {
<<<<<<< HEAD
                    Event\Facade::emitter()->testRunnerTriggeredWarning(
                        sprintf(
                            '%s is not compatible with PHPUnit %s',
                            $file,
                            Version::series(),
                        ),
                    );
=======
                    $notLoadedExtensions[] = $file . ' is not compatible with this version of PHPUnit';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

                    continue;
                }
            } catch (ManifestException $e) {
<<<<<<< HEAD
                Event\Facade::emitter()->testRunnerTriggeredWarning(
                    sprintf(
                        'Cannot load extension from %s: %s',
                        $file,
                        $e->getMessage(),
                    ),
                );
=======
                $notLoadedExtensions[] = $file . ': ' . $e->getMessage();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

                continue;
            }

<<<<<<< HEAD
            try {
                /** @psalm-suppress UnresolvableInclude */
                @require $file;
            } catch (Throwable $t) {
                Event\Facade::emitter()->testRunnerTriggeredWarning(
                    sprintf(
                        'Cannot load extension from %s: %s',
                        $file,
                        $t->getMessage(),
                    ),
                );

                continue;
            }
=======
            /**
             * @psalm-suppress UnresolvableInclude
             */
            require $file;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            $loadedExtensions[] = $manifest->getName()->asString() . ' ' . $manifest->getVersion()->getVersionString();

            Event\Facade::emitter()->testRunnerLoadedExtensionFromPhar(
                $file,
                $manifest->getName()->asString(),
<<<<<<< HEAD
                $manifest->getVersion()->getVersionString(),
            );
        }

        return $loadedExtensions;
    }

    private function phpunitVersion(): string
    {
        $version = Version::id();

        if (!str_contains($version, '-')) {
            return $version;
        }

        $parts = explode('.', explode('-', $version)[0]);

        if (count($parts) === 2) {
            $parts[] = 0;
        }

        return implode('.', $parts);
=======
                $manifest->getVersion()->getVersionString()
            );
        }

        return [
            'loadedExtensions'    => $loadedExtensions,
            'notLoadedExtensions' => $notLoadedExtensions,
        ];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
