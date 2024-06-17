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

use function sprintf;
use PHPUnit\Event\Event;
use PHPUnit\Event\Telemetry;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
<<<<<<< HEAD
<<<<<<< HEAD
 *
 * @deprecated
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class AssertionSucceeded implements Event
{
    private readonly Telemetry\Info $telemetryInfo;
<<<<<<< HEAD
<<<<<<< HEAD
    private readonly string $value;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private readonly string $constraint;
    private readonly int $count;
    private readonly string $message;

    public function __construct(Telemetry\Info $telemetryInfo, string $value, string $constraint, int $count, string $message)
    {
        $this->telemetryInfo = $telemetryInfo;
<<<<<<< HEAD
<<<<<<< HEAD
        $this->value         = $value;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->constraint    = $constraint;
        $this->count         = $count;
        $this->message       = $message;
    }

    public function telemetryInfo(): Telemetry\Info
    {
        return $this->telemetryInfo;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function value(): string
    {
        return $this->value;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/5183
     */
    public function value(): string
    {
        return '';
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function count(): int
    {
        return $this->count;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function asString(): string
    {
        $message = '';

        if (!empty($this->message)) {
            $message = sprintf(
                ', Message: %s',
<<<<<<< HEAD
<<<<<<< HEAD
                $this->message,
=======
                $this->message
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $this->message
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return sprintf(
<<<<<<< HEAD
<<<<<<< HEAD
            'Assertion Succeeded (Constraint: %s, Value: %s%s)',
            $this->constraint,
            $this->value,
            $message,
=======
            'Assertion Succeeded (Constraint: %s%s)',
            $this->constraint,
            $message
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'Assertion Succeeded (Constraint: %s%s)',
            $this->constraint,
            $message
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
