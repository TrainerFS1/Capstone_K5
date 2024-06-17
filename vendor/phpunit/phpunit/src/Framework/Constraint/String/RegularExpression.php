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

use function preg_match;
use function sprintf;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class RegularExpression extends Constraint
{
    private readonly string $pattern;

    public function __construct(string $pattern)
    {
        $this->pattern = $pattern;
    }

    /**
     * Returns a string representation of the constraint.
     */
    public function toString(): string
    {
        return sprintf(
            'matches PCRE pattern "%s"',
<<<<<<< HEAD
<<<<<<< HEAD
            $this->pattern,
=======
            $this->pattern
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->pattern
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }

    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     */
    protected function matches(mixed $other): bool
    {
        return preg_match($this->pattern, $other) > 0;
    }
}
