<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Test;

use const PHP_EOL;
use function sprintf;
use PHPUnit\Event\Code\Test;
use PHPUnit\Event\Event;
use PHPUnit\Event\Telemetry;

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class PhpWarningTriggered implements Event
{
    private readonly Telemetry\Info $telemetryInfo;
    private readonly Test $test;
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @psalm-var non-empty-string
     */
    private readonly string $message;

    /**
     * @psalm-var non-empty-string
     */
    private readonly string $file;

    /**
     * @psalm-var positive-int
     */
    private readonly int $line;
    private readonly bool $suppressed;
    private readonly bool $ignoredByBaseline;

    /**
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
     */
    public function __construct(Telemetry\Info $telemetryInfo, Test $test, string $message, string $file, int $line, bool $suppressed, bool $ignoredByBaseline)
    {
        $this->telemetryInfo     = $telemetryInfo;
        $this->test              = $test;
        $this->message           = $message;
        $this->file              = $file;
        $this->line              = $line;
        $this->suppressed        = $suppressed;
        $this->ignoredByBaseline = $ignoredByBaseline;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly string $message;
    private readonly string $file;
    private readonly int $line;

    public function __construct(Telemetry\Info $telemetryInfo, Test $test, string $message, string $file, int $line)
    {
        $this->telemetryInfo = $telemetryInfo;
        $this->test          = $test;
        $this->message       = $message;
        $this->file          = $file;
        $this->line          = $line;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function telemetryInfo(): Telemetry\Info
    {
        return $this->telemetryInfo;
    }

    public function test(): Test
    {
        return $this->test;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function message(): string
    {
        return $this->message;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function file(): string
    {
        return $this->file;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return positive-int
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function line(): int
    {
        return $this->line;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function wasSuppressed(): bool
    {
        return $this->suppressed;
    }

    public function ignoredByBaseline(): bool
    {
        return $this->ignoredByBaseline;
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function asString(): string
    {
        $message = $this->message;

        if (!empty($message)) {
            $message = PHP_EOL . $message;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $status = '';

        if ($this->ignoredByBaseline) {
            $status = 'Baseline-Ignored ';
        } elseif ($this->suppressed) {
            $status = 'Suppressed ';
        }

        return sprintf(
            'Test Triggered %sPHP Warning (%s)%s',
            $status,
            $this->test->id(),
            $message,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return sprintf(
            'Test Triggered PHP Warning (%s)%s',
            $this->test->id(),
            $message
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
