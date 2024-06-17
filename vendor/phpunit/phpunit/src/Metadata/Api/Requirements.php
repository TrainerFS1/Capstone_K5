<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Metadata\Api;

use const PHP_OS;
use const PHP_OS_FAMILY;
use const PHP_VERSION;
use function addcslashes;
use function assert;
use function extension_loaded;
use function function_exists;
use function ini_get;
use function method_exists;
use function phpversion;
use function preg_match;
use function sprintf;
use PHPUnit\Metadata\Parser\Registry;
use PHPUnit\Metadata\RequiresFunction;
use PHPUnit\Metadata\RequiresMethod;
use PHPUnit\Metadata\RequiresOperatingSystem;
use PHPUnit\Metadata\RequiresOperatingSystemFamily;
use PHPUnit\Metadata\RequiresPhp;
use PHPUnit\Metadata\RequiresPhpExtension;
use PHPUnit\Metadata\RequiresPhpunit;
use PHPUnit\Metadata\RequiresSetting;
use PHPUnit\Runner\Version;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Requirements
{
    /**
     * @psalm-param class-string $className
<<<<<<< HEAD
     * @psalm-param non-empty-string $methodName
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @psalm-return list<string>
     */
    public function requirementsNotSatisfiedFor(string $className, string $methodName): array
    {
        $notSatisfied = [];

        foreach (Registry::parser()->forClassAndMethod($className, $methodName) as $metadata) {
            if ($metadata->isRequiresPhp()) {
                assert($metadata instanceof RequiresPhp);

                if (!$metadata->versionRequirement()->isSatisfiedBy(PHP_VERSION)) {
                    $notSatisfied[] = sprintf(
                        'PHP %s is required.',
<<<<<<< HEAD
                        $metadata->versionRequirement()->asString(),
=======
                        $metadata->versionRequirement()->asString()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }

            if ($metadata->isRequiresPhpExtension()) {
                assert($metadata instanceof RequiresPhpExtension);

                if (!extension_loaded($metadata->extension()) ||
                    ($metadata->hasVersionRequirement() &&
                        !$metadata->versionRequirement()->isSatisfiedBy(phpversion($metadata->extension())))) {
                    $notSatisfied[] = sprintf(
                        'PHP extension %s%s is required.',
                        $metadata->extension(),
<<<<<<< HEAD
                        $metadata->hasVersionRequirement() ? (' ' . $metadata->versionRequirement()->asString()) : '',
=======
                        $metadata->hasVersionRequirement() ? (' ' . $metadata->versionRequirement()->asString()) : ''
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }

            if ($metadata->isRequiresPhpunit()) {
                assert($metadata instanceof RequiresPhpunit);

                if (!$metadata->versionRequirement()->isSatisfiedBy(Version::id())) {
                    $notSatisfied[] = sprintf(
                        'PHPUnit %s is required.',
<<<<<<< HEAD
                        $metadata->versionRequirement()->asString(),
=======
                        $metadata->versionRequirement()->asString()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }

            if ($metadata->isRequiresOperatingSystemFamily()) {
                assert($metadata instanceof RequiresOperatingSystemFamily);

                if ($metadata->operatingSystemFamily() !== PHP_OS_FAMILY) {
                    $notSatisfied[] = sprintf(
                        'Operating system %s is required.',
<<<<<<< HEAD
                        $metadata->operatingSystemFamily(),
=======
                        $metadata->operatingSystemFamily()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }

            if ($metadata->isRequiresOperatingSystem()) {
                assert($metadata instanceof RequiresOperatingSystem);

                $pattern = sprintf(
                    '/%s/i',
<<<<<<< HEAD
                    addcslashes($metadata->operatingSystem(), '/'),
=======
                    addcslashes($metadata->operatingSystem(), '/')
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );

                if (!preg_match($pattern, PHP_OS)) {
                    $notSatisfied[] = sprintf(
                        'Operating system %s is required.',
<<<<<<< HEAD
                        $metadata->operatingSystem(),
=======
                        $metadata->operatingSystem()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }

            if ($metadata->isRequiresFunction()) {
                assert($metadata instanceof RequiresFunction);

                if (!function_exists($metadata->functionName())) {
                    $notSatisfied[] = sprintf(
                        'Function %s() is required.',
<<<<<<< HEAD
                        $metadata->functionName(),
=======
                        $metadata->functionName()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }

            if ($metadata->isRequiresMethod()) {
                assert($metadata instanceof RequiresMethod);

                if (!method_exists($metadata->className(), $metadata->methodName())) {
                    $notSatisfied[] = sprintf(
                        'Method %s::%s() is required.',
                        $metadata->className(),
<<<<<<< HEAD
                        $metadata->methodName(),
=======
                        $metadata->methodName()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }

            if ($metadata->isRequiresSetting()) {
                assert($metadata instanceof RequiresSetting);

                if (ini_get($metadata->setting()) !== $metadata->value()) {
                    $notSatisfied[] = sprintf(
                        'Setting "%s" is required to be "%s".',
                        $metadata->setting(),
<<<<<<< HEAD
                        $metadata->value(),
=======
                        $metadata->value()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    );
                }
            }
        }

        return $notSatisfied;
    }
}
