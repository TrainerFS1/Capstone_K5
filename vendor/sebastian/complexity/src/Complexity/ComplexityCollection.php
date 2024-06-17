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
use function array_filter;
use function array_merge;
use function array_reverse;
use function array_values;
use function count;
use function usort;
=======
use function count;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Countable;
use IteratorAggregate;

/**
 * @psalm-immutable
 */
final class ComplexityCollection implements Countable, IteratorAggregate
{
    /**
     * @psalm-var list<Complexity>
     */
<<<<<<< HEAD
    private readonly array $items;
=======
    private array $items;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    public static function fromList(Complexity ...$items): self
    {
        return new self($items);
    }

    /**
     * @psalm-param list<Complexity> $items
     */
    private function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * @psalm-return list<Complexity>
     */
    public function asArray(): array
    {
        return $this->items;
    }

    public function getIterator(): ComplexityCollectionIterator
    {
        return new ComplexityCollectionIterator($this);
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-negative-int
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function count(): int
    {
        return count($this->items);
    }

    public function isEmpty(): bool
    {
        return empty($this->items);
    }

<<<<<<< HEAD
    /**
     * @psalm-return non-negative-int
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function cyclomaticComplexity(): int
    {
        $cyclomaticComplexity = 0;

        foreach ($this as $item) {
            $cyclomaticComplexity += $item->cyclomaticComplexity();
        }

        return $cyclomaticComplexity;
    }
<<<<<<< HEAD

    public function isFunction(): self
    {
        return new self(
            array_values(
                array_filter(
                    $this->items,
                    static fn (Complexity $complexity): bool => $complexity->isFunction(),
                ),
            ),
        );
    }

    public function isMethod(): self
    {
        return new self(
            array_values(
                array_filter(
                    $this->items,
                    static fn (Complexity $complexity): bool => $complexity->isMethod(),
                ),
            ),
        );
    }

    public function mergeWith(self $other): self
    {
        return new self(
            array_merge(
                $this->asArray(),
                $other->asArray(),
            ),
        );
    }

    public function sortByDescendingCyclomaticComplexity(): self
    {
        $items = $this->items;

        usort(
            $items,
            static function (Complexity $a, Complexity $b): int
            {
                return $a->cyclomaticComplexity() <=> $b->cyclomaticComplexity();
            },
        );

        return new self(array_reverse($items));
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
