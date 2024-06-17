<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Code;

use const PHP_EOL;
use PHPUnit\Event\NoPreviousThrowableException;
<<<<<<< HEAD
=======
use PHPUnit\Framework\Exception;
use PHPUnit\Util\Filter;
use PHPUnit\Util\ThrowableToStringMapper;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Throwable
{
    /**
     * @psalm-var class-string
     */
    private readonly string $className;
    private readonly string $message;
    private readonly string $description;
    private readonly string $stackTrace;
    private readonly ?Throwable $previous;

    /**
<<<<<<< HEAD
     * @psalm-param class-string $className
     */
    public function __construct(string $className, string $message, string $description, string $stackTrace, ?self $previous)
=======
     * @throws Exception
     * @throws NoPreviousThrowableException
     */
    public static function from(\Throwable $t): self
    {
        $previous = $t->getPrevious();

        if ($previous !== null) {
            $previous = self::from($previous);
        }

        return new self(
            $t::class,
            $t->getMessage(),
            ThrowableToStringMapper::map($t),
            Filter::getFilteredStacktrace($t),
            $previous
        );
    }

    /**
     * @psalm-param class-string $className
     */
    private function __construct(string $className, string $message, string $description, string $stackTrace, ?self $previous)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->className   = $className;
        $this->message     = $message;
        $this->description = $description;
        $this->stackTrace  = $stackTrace;
        $this->previous    = $previous;
    }

    /**
     * @throws NoPreviousThrowableException
     */
    public function asString(): string
    {
        $buffer = $this->description();

        if (!empty($this->stackTrace())) {
            $buffer .= PHP_EOL . $this->stackTrace();
        }

        if ($this->hasPrevious()) {
            $buffer .= PHP_EOL . 'Caused by' . PHP_EOL . $this->previous()->asString();
        }

        return $buffer;
    }

    /**
     * @psalm-return class-string
     */
    public function className(): string
    {
        return $this->className;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function description(): string
    {
        return $this->description;
    }

    public function stackTrace(): string
    {
        return $this->stackTrace;
    }

    /**
     * @psalm-assert-if-true !null $this->previous
     */
    public function hasPrevious(): bool
    {
        return $this->previous !== null;
    }

    /**
     * @throws NoPreviousThrowableException
     */
    public function previous(): self
    {
        if ($this->previous === null) {
            throw new NoPreviousThrowableException;
        }

        return $this->previous;
    }
}
