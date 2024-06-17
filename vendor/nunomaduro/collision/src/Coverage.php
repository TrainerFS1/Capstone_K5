<?php

declare(strict_types=1);

namespace NunoMaduro\Collision;

use SebastianBergmann\CodeCoverage\CodeCoverage;
use SebastianBergmann\CodeCoverage\Node\Directory;
use SebastianBergmann\CodeCoverage\Node\File;
use SebastianBergmann\Environment\Runtime;
use Symfony\Component\Console\Output\OutputInterface;
<<<<<<< HEAD

use function Termwind\render;
use function Termwind\renderUsing;
use function Termwind\terminal;
=======
use Symfony\Component\Console\Terminal;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal
 */
final class Coverage
{
    /**
     * Returns the coverage path.
     */
    public static function getPath(): string
    {
        return implode(DIRECTORY_SEPARATOR, [
            dirname(__DIR__),
            '.temp',
            'coverage',
        ]);
    }

    /**
     * Runs true there is any code coverage driver available.
     */
    public static function isAvailable(): bool
    {
        $runtime = new Runtime();

        if (! $runtime->canCollectCodeCoverage()) {
            return false;
        }

        if ($runtime->hasPCOV() || $runtime->hasPHPDBGCodeCoverage()) {
            return true;
        }

<<<<<<< HEAD
        if (self::usingXdebug()) {
=======
        if (static::usingXdebug()) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $mode = getenv('XDEBUG_MODE') ?: ini_get('xdebug.mode');

            return $mode && in_array('coverage', explode(',', $mode), true);
        }

        return true;
    }

    /**
     * If the user is using Xdebug.
     */
    public static function usingXdebug(): bool
    {
        return (new Runtime())->hasXdebug();
    }

    /**
     * Reports the code coverage report to the
     * console and returns the result in float.
     */
    public static function report(OutputInterface $output): float
    {
        if (! file_exists($reportPath = self::getPath())) {
            if (self::usingXdebug()) {
                $output->writeln(
                    "  <fg=black;bg=yellow;options=bold> WARN </> Unable to get coverage using Xdebug. Did you set <href=https://xdebug.org/docs/code_coverage#mode>Xdebug's coverage mode</>?</>",
                );

                return 0.0;
            }

            $output->writeln(
                '  <fg=black;bg=yellow;options=bold> WARN </> No coverage driver detected.</> Did you install <href=https://xdebug.org/>Xdebug</> or <href=https://github.com/krakjoe/pcov>PCOV</>?',
            );

            return 0.0;
        }

        /** @var CodeCoverage $codeCoverage */
        $codeCoverage = require $reportPath;
        unlink($reportPath);

        $totalCoverage = $codeCoverage->getReport()->percentageOfExecutedLines();

<<<<<<< HEAD
=======
        $totalWidth = (new Terminal())->getWidth();

        $dottedLineLength = $totalWidth;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        /** @var Directory<File|Directory> $report */
        $report = $codeCoverage->getReport();

        foreach ($report->getIterator() as $file) {
            if (! $file instanceof File) {
                continue;
            }
            $dirname = dirname($file->id());
            $basename = basename($file->id(), '.php');

            $name = $dirname === '.' ? $basename : implode(DIRECTORY_SEPARATOR, [
                $dirname,
                $basename,
            ]);
<<<<<<< HEAD
=======
            $rawName = $dirname === '.' ? $basename : implode(DIRECTORY_SEPARATOR, [
                $dirname,
                $basename,
            ]);

            $linesExecutedTakenSize = 0;

            if ($file->percentageOfExecutedLines()->asString() != '0.00%') {
                $linesExecutedTakenSize = strlen($uncoveredLines = trim(implode(', ', self::getMissingCoverage($file)))) + 1;
                $name .= sprintf(' <fg=red>%s</>', $uncoveredLines);
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            $percentage = $file->numberOfExecutableLines() === 0
                ? '100.0'
                : number_format($file->percentageOfExecutedLines()->asFloat(), 1, '.', '');

<<<<<<< HEAD
            $uncoveredLines = '';

            $percentageOfExecutedLinesAsString = $file->percentageOfExecutedLines()->asString();

            if (! in_array($percentageOfExecutedLinesAsString, ['0.00%', '100.00%', '100.0%', ''], true)) {
                $uncoveredLines = trim(implode(', ', self::getMissingCoverage($file)));
                $uncoveredLines = sprintf('<span>%s</span>', $uncoveredLines).' <span class="text-gray"> / </span>';
            }

            $color = $percentage === '100.0' ? 'green' : ($percentage === '0.0' ? 'red' : 'yellow');

            $truncateAt = max(1, terminal()->width() - 12);

            renderUsing($output);
            render(<<<HTML
                <div class="flex mx-2">
                    <span class="truncate-{$truncateAt}">{$name}</span>
                    <span class="flex-1 content-repeat-[.] text-gray mx-1"></span>
                    <span class="text-{$color}">$uncoveredLines {$percentage}%</span>
                </div>
            HTML);
        }

        $totalCoverageAsString = $totalCoverage->asFloat() === 0.0
            ? '0.0'
            : number_format($totalCoverage->asFloat(), 1, '.', '');

        renderUsing($output);
        render(<<<HTML
            <div class="mx-2">
                <hr class="text-gray" />
                <div class="w-full text-right">
                    <span class="ml-1 font-bold">Total: {$totalCoverageAsString} %</span>
                </div>
            </div>
        HTML);
=======
            $takenSize = strlen($rawName.$percentage) + 8 + $linesExecutedTakenSize; // adding 3 space and percent sign

            $percentage = sprintf(
                '<fg=%s%s>%s</>',
                $percentage === '100.0' ? 'green' : ($percentage === '0.0' ? 'red' : 'yellow'),
                $percentage === '100.0' ? ';options=bold' : '',
                $percentage
            );

            $output->writeln(sprintf(
                '  <fg=white>%s</> <fg=#6C7280>%s</> %s <fg=#6C7280>%%</>',
                $name,
                str_repeat('.', max($dottedLineLength - $takenSize, 1)),
                $percentage
            ));
        }

        $output->writeln('');

        $rawName = 'Total Coverage';

        $takenSize = strlen($rawName.$totalCoverage->asString()) + 6;

        $output->writeln(sprintf(
            '  <fg=white;options=bold>%s</> <fg=#6C7280>%s</> %s <fg=#6C7280>%%</>',
            $rawName,
            str_repeat('.', max($dottedLineLength - $takenSize, 1)),
            number_format($totalCoverage->asFloat(), 1, '.', '')
        ));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $totalCoverage->asFloat();
    }

    /**
     * Generates an array of missing coverage on the following format:.
     *
     * ```
     * ['11', '20..25', '50', '60..80'];
     * ```
     *
     * @param  File  $file
     * @return array<int, string>
     */
    public static function getMissingCoverage($file): array
    {
        $shouldBeNewLine = true;

        $eachLine = function (array $array, array $tests, int $line) use (&$shouldBeNewLine): array {
<<<<<<< HEAD
            if ($tests !== []) {
=======
            if (count($tests) > 0) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $shouldBeNewLine = true;

                return $array;
            }

            if ($shouldBeNewLine) {
                $array[] = (string) $line;
                $shouldBeNewLine = false;

                return $array;
            }

            $lastKey = count($array) - 1;

<<<<<<< HEAD
            if (array_key_exists($lastKey, $array) && str_contains((string) $array[$lastKey], '..')) {
                [$from] = explode('..', (string) $array[$lastKey]);
=======
            if (array_key_exists($lastKey, $array) && str_contains($array[$lastKey], '..')) {
                [$from] = explode('..', $array[$lastKey]);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $array[$lastKey] = $line > $from ? sprintf('%s..%s', $from, $line) : sprintf('%s..%s', $line, $from);

                return $array;
            }

            $array[$lastKey] = sprintf('%s..%s', $array[$lastKey], $line);

            return $array;
        };

        $array = [];
        foreach (array_filter($file->lineCoverageData(), 'is_array') as $line => $tests) {
            $array = $eachLine($array, $tests, $line);
        }

        return $array;
    }
}
