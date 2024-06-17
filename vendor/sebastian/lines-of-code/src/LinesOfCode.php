<?php declare(strict_types=1);
/*
 * This file is part of sebastian/lines-of-code.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\LinesOfCode;

/**
 * @psalm-immutable
 */
final class LinesOfCode
{
<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-var non-negative-int
     */
    private readonly int $linesOfCode;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $commentLinesOfCode;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $nonCommentLinesOfCode;

    /**
     * @psalm-var non-negative-int
     */
    private readonly int $logicalLinesOfCode;

    /**
     * @psalm-param non-negative-int $linesOfCode
     * @psalm-param non-negative-int $commentLinesOfCode
     * @psalm-param non-negative-int $nonCommentLinesOfCode
     * @psalm-param non-negative-int $logicalLinesOfCode
     *
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private int $linesOfCode;
    private int $commentLinesOfCode;
    private int $nonCommentLinesOfCode;
    private int $logicalLinesOfCode;

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws IllogicalValuesException
     * @throws NegativeValueException
     */
    public function __construct(int $linesOfCode, int $commentLinesOfCode, int $nonCommentLinesOfCode, int $logicalLinesOfCode)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        /** @psalm-suppress DocblockTypeContradiction */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($linesOfCode < 0) {
            throw new NegativeValueException('$linesOfCode must not be negative');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        /** @psalm-suppress DocblockTypeContradiction */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($commentLinesOfCode < 0) {
            throw new NegativeValueException('$commentLinesOfCode must not be negative');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        /** @psalm-suppress DocblockTypeContradiction */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($nonCommentLinesOfCode < 0) {
            throw new NegativeValueException('$nonCommentLinesOfCode must not be negative');
        }

<<<<<<< HEAD
<<<<<<< HEAD
        /** @psalm-suppress DocblockTypeContradiction */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($logicalLinesOfCode < 0) {
            throw new NegativeValueException('$logicalLinesOfCode must not be negative');
        }

        if ($linesOfCode - $commentLinesOfCode !== $nonCommentLinesOfCode) {
            throw new IllogicalValuesException('$linesOfCode !== $commentLinesOfCode + $nonCommentLinesOfCode');
        }

        $this->linesOfCode           = $linesOfCode;
        $this->commentLinesOfCode    = $commentLinesOfCode;
        $this->nonCommentLinesOfCode = $nonCommentLinesOfCode;
        $this->logicalLinesOfCode    = $logicalLinesOfCode;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-negative-int
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function linesOfCode(): int
    {
        return $this->linesOfCode;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-negative-int
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function commentLinesOfCode(): int
    {
        return $this->commentLinesOfCode;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-negative-int
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function nonCommentLinesOfCode(): int
    {
        return $this->nonCommentLinesOfCode;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-negative-int
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function logicalLinesOfCode(): int
    {
        return $this->logicalLinesOfCode;
    }

    public function plus(self $other): self
    {
        return new self(
            $this->linesOfCode() + $other->linesOfCode(),
            $this->commentLinesOfCode() + $other->commentLinesOfCode(),
            $this->nonCommentLinesOfCode() + $other->nonCommentLinesOfCode(),
            $this->logicalLinesOfCode() + $other->logicalLinesOfCode(),
        );
    }
}
