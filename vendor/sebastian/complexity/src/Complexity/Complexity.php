<?php declare(strict_types=1);
/*
 * This file is part of sebastian/complexity.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Complexity;

<<<<<<< HEAD
use function str_contains;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/**
 * @psalm-immutable
 */
final class Complexity
{
<<<<<<< HEAD
    /**
     * @psalm-var non-empty-string
     */
    private readonly string $name;

    /**
     * @psalm-var positive-int
     */
    private int $cyclomaticComplexity;

    /**
     * @psalm-param non-empty-string $name
     * @psalm-param positive-int $cyclomaticComplexity
     */
=======
    private string $name;
    private int $cyclomaticComplexity;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(string $name, int $cyclomaticComplexity)
    {
        $this->name                 = $name;
        $this->cyclomaticComplexity = $cyclomaticComplexity;
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function name(): string
    {
        return $this->name;
    }

<<<<<<< HEAD
    /**
     * @psalm-return positive-int
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function cyclomaticComplexity(): int
    {
        return $this->cyclomaticComplexity;
    }
<<<<<<< HEAD

    public function isFunction(): bool
    {
        return !$this->isMethod();
    }

    public function isMethod(): bool
    {
        return str_contains($this->name, '::');
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
