<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util;

use function array_unshift;
use function defined;
use function in_array;
use function is_file;
use function realpath;
use function sprintf;
use function str_starts_with;
use PHPUnit\Framework\Exception;
use PHPUnit\Framework\PhptAssertionFailedError;
use Throwable;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Filter
{
    /**
     * @throws Exception
     */
<<<<<<< HEAD
    public static function getFilteredStacktrace(Throwable $t, bool $unwrap = true): string
=======
    public static function getFilteredStacktrace(Throwable $t): string
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $filteredStacktrace = '';

        if ($t instanceof PhptAssertionFailedError) {
            $eTrace = $t->syntheticTrace();
            $eFile  = $t->syntheticFile();
            $eLine  = $t->syntheticLine();
        } elseif ($t instanceof Exception) {
            $eTrace = $t->getSerializableTrace();
            $eFile  = $t->getFile();
            $eLine  = $t->getLine();
        } else {
<<<<<<< HEAD
            if ($unwrap && $t->getPrevious()) {
=======
            if ($t->getPrevious()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $t = $t->getPrevious();
            }

            $eTrace = $t->getTrace();
            $eFile  = $t->getFile();
            $eLine  = $t->getLine();
        }

        if (!self::frameExists($eTrace, $eFile, $eLine)) {
            array_unshift(
                $eTrace,
<<<<<<< HEAD
                ['file' => $eFile, 'line' => $eLine],
=======
                ['file' => $eFile, 'line' => $eLine]
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        $prefix      = defined('__PHPUNIT_PHAR_ROOT__') ? __PHPUNIT_PHAR_ROOT__ : false;
        $excludeList = new ExcludeList;

        foreach ($eTrace as $frame) {
            if (self::shouldPrintFrame($frame, $prefix, $excludeList)) {
                $filteredStacktrace .= sprintf(
                    "%s:%s\n",
                    $frame['file'],
<<<<<<< HEAD
                    $frame['line'] ?? '?',
=======
                    $frame['line'] ?? '?'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }
        }

        return $filteredStacktrace;
    }

<<<<<<< HEAD
    private static function shouldPrintFrame(array $frame, false|string $prefix, ExcludeList $excludeList): bool
=======
    private static function shouldPrintFrame(array $frame, string|false $prefix, ExcludeList $excludeList): bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (!isset($frame['file'])) {
            return false;
        }

        $file              = $frame['file'];
        $fileIsNotPrefixed = $prefix === false || !str_starts_with($file, $prefix);

        // @see https://github.com/sebastianbergmann/phpunit/issues/4033
        if (isset($GLOBALS['_SERVER']['SCRIPT_NAME'])) {
            $script = realpath($GLOBALS['_SERVER']['SCRIPT_NAME']);
        } else {
            $script = '';
        }

<<<<<<< HEAD
        return $fileIsNotPrefixed &&
               $file !== $script &&
               self::fileIsExcluded($file, $excludeList) &&
               is_file($file);
=======
        return is_file($file) &&
               self::fileIsExcluded($file, $excludeList) &&
               $fileIsNotPrefixed &&
               $file !== $script;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    private static function fileIsExcluded(string $file, ExcludeList $excludeList): bool
    {
        return (empty($GLOBALS['__PHPUNIT_ISOLATION_EXCLUDE_LIST']) ||
                !in_array($file, $GLOBALS['__PHPUNIT_ISOLATION_EXCLUDE_LIST'], true)) &&
                !$excludeList->isExcluded($file);
    }

    private static function frameExists(array $trace, string $file, int $line): bool
    {
        foreach ($trace as $frame) {
            if (isset($frame['file'], $frame['line']) && $frame['file'] === $file && $frame['line'] === $line) {
                return true;
            }
        }

        return false;
    }
}
