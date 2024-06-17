<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\Path;

use IteratorAggregate;
use Traversable;

/**
 * Internal Representation of a vector path.
 */
final class Path implements IteratorAggregate
{
    /**
     * @var OperationInterface[]
     */
<<<<<<< HEAD
    private array $operations = [];
=======
    private $operations = [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Moves the drawing operation to a certain position.
     */
    public function move(float $x, float $y) : self
    {
        $path = clone $this;
        $path->operations[] = new Move($x, $y);
        return $path;
    }

    /**
     * Draws a line from the current position to another position.
     */
    public function line(float $x, float $y) : self
    {
        $path = clone $this;
        $path->operations[] = new Line($x, $y);
        return $path;
    }

    /**
     * Draws an elliptic arc from the current position to another position.
     */
    public function ellipticArc(
        float $xRadius,
        float $yRadius,
        float $xAxisRotation,
        bool $largeArc,
        bool $sweep,
        float $x,
        float $y
    ) : self {
        $path = clone $this;
        $path->operations[] = new EllipticArc($xRadius, $yRadius, $xAxisRotation, $largeArc, $sweep, $x, $y);
        return $path;
    }

    /**
     * Draws a curve from the current position to another position.
     */
    public function curve(float $x1, float $y1, float $x2, float $y2, float $x3, float $y3) : self
    {
        $path = clone $this;
        $path->operations[] = new Curve($x1, $y1, $x2, $y2, $x3, $y3);
        return $path;
    }

    /**
     * Closes a sub-path.
     */
    public function close() : self
    {
        $path = clone $this;
        $path->operations[] = Close::instance();
        return $path;
    }

    /**
     * Appends another path to this one.
     */
    public function append(self $other) : self
    {
        $path = clone $this;
        $path->operations = array_merge($this->operations, $other->operations);
        return $path;
    }

    public function translate(float $x, float $y) : self
    {
        $path = new self();

        foreach ($this->operations as $operation) {
            $path->operations[] = $operation->translate($x, $y);
        }

        return $path;
    }

<<<<<<< HEAD
    public function rotate(int $degrees) : self
    {
        $path = new self();

        foreach ($this->operations as $operation) {
            $path->operations[] = $operation->rotate($degrees);
        }

        return $path;
    }

    /**
     * @return Traversable<int, OperationInterface>
=======
    /**
     * @return OperationInterface[]|Traversable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function getIterator() : Traversable
    {
        foreach ($this->operations as $operation) {
            yield $operation;
        }
    }
}
