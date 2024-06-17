<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Util\Xml;

use function chdir;
use function dirname;
use function error_reporting;
use function file_get_contents;
use function getcwd;
use function libxml_get_errors;
use function libxml_use_internal_errors;
use function sprintf;
use DOMDocument;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Loader
{
    /**
     * @throws XmlException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function loadFile(string $filename): DOMDocument
=======
    public function loadFile(string $filename, bool $isHtml = false, bool $xinclude = false, bool $strict = false): DOMDocument
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function loadFile(string $filename, bool $isHtml = false, bool $xinclude = false, bool $strict = false): DOMDocument
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $reporting = error_reporting(0);
        $contents  = file_get_contents($filename);

        error_reporting($reporting);

        if ($contents === false) {
            throw new XmlException(
                sprintf(
<<<<<<< HEAD
<<<<<<< HEAD
                    'Could not read XML from file "%s"',
                    $filename,
                ),
            );
        }

        return $this->load($contents, $filename);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                    'Could not read "%s".',
                    $filename
                )
            );
        }

        return $this->load($contents, $isHtml, $filename, $xinclude, $strict);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @throws XmlException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function load(string $actual, ?string $filename = null): DOMDocument
    {
        if ($actual === '') {
            if ($filename === null) {
                throw new XmlException('Could not parse XML from empty string');
            }

            throw new XmlException(
                sprintf(
                    'Could not parse XML from empty file "%s"',
                    $filename,
                ),
            );
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function load(string $actual, bool $isHtml = false, string $filename = '', bool $xinclude = false, bool $strict = false): DOMDocument
    {
        if ($actual === '') {
            throw new XmlException('Could not load XML from empty string');
        }

        // Required for XInclude on Windows.
        if ($xinclude) {
            $cwd = getcwd();
            @chdir(dirname($filename));
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        $document                     = new DOMDocument;
        $document->preserveWhiteSpace = false;

        $internal  = libxml_use_internal_errors(true);
        $message   = '';
        $reporting = error_reporting(0);

<<<<<<< HEAD
<<<<<<< HEAD
        // Required for XInclude
        if ($filename !== null) {
            // Required for XInclude on Windows
            if (PHP_OS_FAMILY === 'Windows') {
                $cwd = getcwd();
                @chdir(dirname($filename));
            }

            $document->documentURI = $filename;
        }

        $loaded = $document->loadXML($actual);

        if ($filename !== null) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($filename !== '') {
            // Required for XInclude
            $document->documentURI = $filename;
        }

        if ($isHtml) {
            $loaded = $document->loadHTML($actual);
        } else {
            $loaded = $document->loadXML($actual);
        }

        if (!$isHtml && $xinclude) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $document->xinclude();
        }

        foreach (libxml_get_errors() as $error) {
            $message .= "\n" . $error->message;
        }

        libxml_use_internal_errors($internal);
        error_reporting($reporting);

        if (isset($cwd)) {
            @chdir($cwd);
        }

<<<<<<< HEAD
<<<<<<< HEAD
        if ($loaded === false || $message !== '') {
            if ($filename !== null) {
                throw new XmlException(
                    sprintf(
                        'Could not load "%s"%s',
                        $filename,
                        $message !== '' ? ":\n" . $message : '',
                    ),
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($loaded === false || ($strict && $message !== '')) {
            if ($filename !== '') {
                throw new XmlException(
                    sprintf(
                        'Could not load "%s".%s',
                        $filename,
                        $message !== '' ? "\n" . $message : ''
                    )
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                );
            }

            if ($message === '') {
                $message = 'Could not load XML for unknown reason';
            }

            throw new XmlException($message);
        }

        return $document;
    }
}
