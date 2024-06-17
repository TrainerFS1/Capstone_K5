<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework\Constraint;

use function is_string;
<<<<<<< HEAD
<<<<<<< HEAD
use function mb_detect_encoding;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function mb_stripos;
use function mb_strtolower;
use function sprintf;
use function str_contains;
<<<<<<< HEAD
<<<<<<< HEAD
use function strlen;
use function strtr;
use PHPUnit\Util\Exporter;
=======
use function strtr;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use function strtr;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringContains extends Constraint
{
<<<<<<< HEAD
<<<<<<< HEAD
    private readonly string $needle;
    private readonly bool $ignoreCase;
    private readonly bool $ignoreLineEndings;

    public function __construct(string $needle, bool $ignoreCase = false, bool $ignoreLineEndings = false)
    {
        if ($ignoreLineEndings) {
            $needle = $this->normalizeLineEndings($needle);
        }

        $this->needle            = $needle;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly string $string;
    private readonly bool $ignoreCase;
    private readonly bool $ignoreLineEndings;

    public function __construct(string $string, bool $ignoreCase = false, bool $ignoreLineEndings = false)
    {
        $this->string            = $string;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->ignoreCase        = $ignoreCase;
        $this->ignoreLineEndings = $ignoreLineEndings;
    }

    /**
     * Returns a string representation of the constraint.
     */
    public function toString(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $needle = $this->needle;

        if ($this->ignoreCase) {
            $needle = mb_strtolower($this->needle, 'UTF-8');
        }

        return sprintf(
            'contains "%s" [%s](length: %s)',
            $needle,
            $this->getDetectedEncoding($needle),
            strlen($needle),
        );
    }

    public function failureDescription(mixed $other): string
    {
        $stringifiedHaystack = Exporter::export($other, true);
        $haystackEncoding    = $this->getDetectedEncoding($other);
        $haystackLength      = $this->getHaystackLength($other);

        $haystackInformation = sprintf(
            '%s [%s](length: %s) ',
            $stringifiedHaystack,
            $haystackEncoding,
            $haystackLength,
        );

        $needleInformation = $this->toString(true);

        return $haystackInformation . $needleInformation;
    }

=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $string = $this->string;

        if ($this->ignoreCase) {
            $string = mb_strtolower($this->string, 'UTF-8');
        }

        if ($this->ignoreLineEndings) {
            $string = $this->normalizeLineEndings($string);
        }

        return sprintf(
            'contains "%s"',
            $string
        );
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     */
    protected function matches(mixed $other): bool
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $haystack = $other;

        if ('' === $this->needle) {
            return true;
        }

        if (!is_string($haystack)) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ('' === $this->string) {
            return true;
        }

        if (!is_string($other)) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return false;
        }

        if ($this->ignoreLineEndings) {
<<<<<<< HEAD
<<<<<<< HEAD
            $haystack = $this->normalizeLineEndings($haystack);
=======
            $other = $this->normalizeLineEndings($other);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $other = $this->normalizeLineEndings($other);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        if ($this->ignoreCase) {
            /*
<<<<<<< HEAD
<<<<<<< HEAD
             * We must use the multibyte-safe version, so we can accurately compare non-latin uppercase characters with
             * their lowercase equivalents.
             */
            return mb_stripos($haystack, $this->needle, 0, 'UTF-8') !== false;
        }

        /*
         * Use the non-multibyte safe functions to see if the string is contained in $other.
         *
         * This function is very fast, and we don't care about the character position in the string.
         *
         * Additionally, we want this method to be binary safe, so we can check if some binary data is in other binary
         * data.
         */
        return str_contains($haystack, $this->needle);
    }

    private function getDetectedEncoding(mixed $other): string
    {
        if ($this->ignoreCase) {
            return 'Encoding ignored';
        }

        if (!is_string($other)) {
            return 'Encoding detection failed';
        }

        $detectedEncoding = mb_detect_encoding($other, null, true);

        if ($detectedEncoding === false) {
            return 'Encoding detection failed';
        }

        return $detectedEncoding;
    }

    private function getHaystackLength(mixed $haystack): int
    {
        if (!is_string($haystack)) {
            return 0;
        }

        if ($this->ignoreLineEndings) {
            $haystack = $this->normalizeLineEndings($haystack);
        }

        return strlen($haystack);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
             * We must use the multi byte safe version so we can accurately compare non latin upper characters with
             * their lowercase equivalents.
             */
            return mb_stripos($other, $this->string, 0, 'UTF-8') !== false;
        }

        /*
         * Use the non multi byte safe functions to see if the string is contained in $other.
         *
         * This function is very fast and we don't care about the character position in the string.
         *
         * Additionally, we want this method to be binary safe so we can check if some binary data is in other binary
         * data.
         */
        return str_contains($other, $this->string);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    private function normalizeLineEndings(string $string): string
    {
        return strtr(
            $string,
            [
                "\r\n" => "\n",
                "\r"   => "\n",
<<<<<<< HEAD
<<<<<<< HEAD
            ],
=======
            ]
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            ]
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
