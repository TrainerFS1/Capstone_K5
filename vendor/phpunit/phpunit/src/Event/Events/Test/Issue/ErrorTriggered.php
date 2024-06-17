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
final class ErrorTriggered implements Event
{
    private readonly Telemetry\Info $telemetryInfo;
    private readonly Test $test;
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

    /**
     * @psalm-param non-empty-string $message
     * @psalm-param non-empty-string $file
     * @psalm-param positive-int $line
     */
    public function __construct(Telemetry\Info $telemetryInfo, Test $test, string $message, string $file, int $line, bool $suppressed)
=======
    private readonly string $message;
    private readonly string $file;
    private readonly int $line;

    public function __construct(Telemetry\Info $telemetryInfo, Test $test, string $message, string $file, int $line)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->telemetryInfo = $telemetryInfo;
        $this->test          = $test;
        $this->message       = $message;
        $this->file          = $file;
        $this->line          = $line;
<<<<<<< HEAD
        $this->suppressed    = $suppressed;
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
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function message(): string
    {
        return $this->message;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function file(): string
    {
        return $this->file;
    }

<<<<<<< HEAD
    /**
     * @psalm-return positive-int
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function line(): int
    {
        return $this->line;
    }

<<<<<<< HEAD
    public function wasSuppressed(): bool
    {
        return $this->suppressed;
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function asString(): string
    {
        $message = $this->message;

        if (!empty($message)) {
            $message = PHP_EOL . $message;
        }

        return sprintf(
<<<<<<< HEAD
            'Test Triggered %sError (%s)%s',
            $this->wasSuppressed() ? 'Suppressed ' : '',
            $this->test->id(),
            $message,
=======
            'Test Triggered Error (%s)%s',
            $this->test->id(),
            $message
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
