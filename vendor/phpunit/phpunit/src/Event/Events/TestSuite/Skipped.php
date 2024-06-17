<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestSuite;

use function sprintf;
use PHPUnit\Event\Event;
use PHPUnit\Event\Telemetry;

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Skipped implements Event
{
    private readonly Telemetry\Info $telemetryInfo;
    private readonly TestSuite $testSuite;
    private readonly string $message;

    public function __construct(Telemetry\Info $telemetryInfo, TestSuite $testSuite, string $message)
    {
        $this->telemetryInfo = $telemetryInfo;
        $this->testSuite     = $testSuite;
        $this->message       = $message;
    }

    public function telemetryInfo(): Telemetry\Info
    {
        return $this->telemetryInfo;
    }

    public function testSuite(): TestSuite
    {
        return $this->testSuite;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function asString(): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        return sprintf(
            'Test Suite Skipped (%s, %s)',
            $this->testSuite->name(),
            $this->message,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $name = '';

        if (!empty($this->testSuite->name())) {
            $name = $this->testSuite->name() . ', ';
        }

        return sprintf(
            'Test Suite Skipped (%s%s)',
            $name,
            $this->message
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
