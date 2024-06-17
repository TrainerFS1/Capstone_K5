<?php declare(strict_types=1);
/*
 * This file is part of phpunit/php-code-coverage.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\CodeCoverage\StaticAnalysis;

/**
 * @internal This class is not covered by the backward compatibility promise for phpunit/php-code-coverage
<<<<<<< HEAD
 *
 * @psalm-import-type CodeUnitFunctionType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @psalm-import-type CodeUnitMethodType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @psalm-import-type CodeUnitClassType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @psalm-import-type CodeUnitTraitType from \SebastianBergmann\CodeCoverage\StaticAnalysis\CodeUnitFindingVisitor
 * @psalm-import-type LinesOfCodeType from \SebastianBergmann\CodeCoverage\StaticAnalysis\FileAnalyser
 * @psalm-import-type LinesType from \SebastianBergmann\CodeCoverage\StaticAnalysis\FileAnalyser
 *
 * @psalm-type LinesOfCodeType = array{
 *     linesOfCode: int,
 *     commentLinesOfCode: int,
 *     nonCommentLinesOfCode: int
 * }
 * @psalm-type LinesType = array<int, int>
 */
interface FileAnalyser
{
    /**
     * @psalm-return array<string, CodeUnitClassType>
     */
    public function classesIn(string $filename): array;

    /**
     * @psalm-return array<string, CodeUnitTraitType>
     */
    public function traitsIn(string $filename): array;

    /**
     * @psalm-return array<string, CodeUnitFunctionType>
     */
    public function functionsIn(string $filename): array;

    /**
     * @psalm-return LinesOfCodeType
     */
    public function linesOfCodeFor(string $filename): array;

    /**
     * @psalm-return LinesType
     */
    public function executableLinesIn(string $filename): array;

    /**
     * @psalm-return LinesType
     */
=======
 */
interface FileAnalyser
{
    public function classesIn(string $filename): array;

    public function traitsIn(string $filename): array;

    public function functionsIn(string $filename): array;

    /**
     * @psalm-return array{linesOfCode: int, commentLinesOfCode: int, nonCommentLinesOfCode: int}
     */
    public function linesOfCodeFor(string $filename): array;

    public function executableLinesIn(string $filename): array;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function ignoredLinesFor(string $filename): array;
}
