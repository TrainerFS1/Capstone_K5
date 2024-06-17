<?php declare(strict_types=1);
/*
 * This file is part of sebastian/diff.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Diff;

<<<<<<< HEAD
<<<<<<< HEAD
use ArrayIterator;
use IteratorAggregate;
use Traversable;

/**
 * @template-implements IteratorAggregate<int, Line>
 */
final class Chunk implements IteratorAggregate
=======
final class Chunk
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
final class Chunk
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    private int $start;
    private int $startRange;
    private int $end;
    private int $endRange;
    private array $lines;

    public function __construct(int $start = 0, int $startRange = 1, int $end = 0, int $endRange = 1, array $lines = [])
    {
        $this->start      = $start;
        $this->startRange = $startRange;
        $this->end        = $end;
        $this->endRange   = $endRange;
        $this->lines      = $lines;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function start(): int
=======
    public function getStart(): int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStart(): int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->start;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function startRange(): int
=======
    public function getStartRange(): int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStartRange(): int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->startRange;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function end(): int
=======
    public function getEnd(): int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getEnd(): int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->end;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function endRange(): int
=======
    public function getEndRange(): int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getEndRange(): int
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->endRange;
    }

    /**
     * @psalm-return list<Line>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function lines(): array
=======
    public function getLines(): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getLines(): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->lines;
    }

    /**
     * @psalm-param list<Line> $lines
     */
    public function setLines(array $lines): void
    {
        foreach ($lines as $line) {
            if (!$line instanceof Line) {
                throw new InvalidArgumentException;
            }
        }

        $this->lines = $lines;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @deprecated Use start() instead
     */
    public function getStart(): int
    {
        return $this->start;
    }

    /**
     * @deprecated Use startRange() instead
     */
    public function getStartRange(): int
    {
        return $this->startRange;
    }

    /**
     * @deprecated Use end() instead
     */
    public function getEnd(): int
    {
        return $this->end;
    }

    /**
     * @deprecated Use endRange() instead
     */
    public function getEndRange(): int
    {
        return $this->endRange;
    }

    /**
     * @psalm-return list<Line>
     *
     * @deprecated Use lines() instead
     */
    public function getLines(): array
    {
        return $this->lines;
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->lines);
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
