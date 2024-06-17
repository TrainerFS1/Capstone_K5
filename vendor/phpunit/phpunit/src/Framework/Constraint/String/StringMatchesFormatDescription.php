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

use const DIRECTORY_SEPARATOR;
use function explode;
use function implode;
use function preg_match;
use function preg_quote;
use function preg_replace;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use function sprintf;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use function sprintf;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use function strtr;
use SebastianBergmann\Diff\Differ;
use SebastianBergmann\Diff\Output\UnifiedDiffOutputBuilder;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringMatchesFormatDescription extends Constraint
{
<<<<<<< HEAD
<<<<<<< HEAD
    private readonly string $formatDescription;

    public function __construct(string $formatDescription)
    {
        $this->formatDescription = $formatDescription;
    }

    public function toString(): string
    {
        return 'matches format description:' . PHP_EOL . $this->formatDescription;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private string $formatDescription;
    private readonly string $regularExpression;

    public function __construct(string $formatDescription)
    {
        $this->regularExpression = $this->createRegularExpressionFromFormatDescription(
            $this->convertNewlines($formatDescription)
        );

        $this->formatDescription = $formatDescription;
    }

    /**
     * @todo Use format description instead of regular expression
     */
    public function toString(): string
    {
        return sprintf(
            'matches PCRE pattern "%s"',
            $this->regularExpression
        );
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     */
    protected function matches(mixed $other): bool
    {
        $other = $this->convertNewlines($other);

<<<<<<< HEAD
<<<<<<< HEAD
        $matches = preg_match(
            $this->regularExpressionForFormatDescription(
                $this->convertNewlines($this->formatDescription),
            ),
            $other,
        );

        return $matches > 0;
=======
        return preg_match($this->regularExpression, $other) > 0;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return preg_match($this->regularExpression, $other) > 0;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    protected function failureDescription(mixed $other): string
    {
        return 'string matches format description';
    }

    protected function additionalFailureDescription(mixed $other): string
    {
        $from = explode("\n", $this->formatDescription);
        $to   = explode("\n", $this->convertNewlines($other));

        foreach ($from as $index => $line) {
            if (isset($to[$index]) && $line !== $to[$index]) {
<<<<<<< HEAD
<<<<<<< HEAD
                $line = $this->regularExpressionForFormatDescription($line);
=======
                $line = $this->createRegularExpressionFromFormatDescription($line);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $line = $this->createRegularExpressionFromFormatDescription($line);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

                if (preg_match($line, $to[$index]) > 0) {
                    $from[$index] = $to[$index];
                }
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $from = implode("\n", $from);
        $to   = implode("\n", $to);

        return $this->differ()->diff($from, $to);
    }

    private function regularExpressionForFormatDescription(string $string): string
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->formatDescription = implode("\n", $from);
        $other                   = implode("\n", $to);

        return (new Differ(new UnifiedDiffOutputBuilder("--- Expected\n+++ Actual\n")))->diff($this->formatDescription, $other);
    }

    private function createRegularExpressionFromFormatDescription(string $string): string
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $string = strtr(
            preg_quote($string, '/'),
            [
                '%%' => '%',
                '%e' => '\\' . DIRECTORY_SEPARATOR,
                '%s' => '[^\r\n]+',
                '%S' => '[^\r\n]*',
                '%a' => '.+',
                '%A' => '.*',
                '%w' => '\s*',
                '%i' => '[+-]?\d+',
                '%d' => '\d+',
                '%x' => '[0-9a-fA-F]+',
                '%f' => '[+-]?\.?\d+\.?\d*(?:[Ee][+-]?\d+)?',
                '%c' => '.',
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

        return '/^' . $string . '$/s';
    }

    private function convertNewlines(string $text): string
    {
        return preg_replace('/\r\n/', "\n", $text);
    }
<<<<<<< HEAD
<<<<<<< HEAD

    private function differ(): Differ
    {
        return new Differ(new UnifiedDiffOutputBuilder("--- Expected\n+++ Actual\n"));
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
