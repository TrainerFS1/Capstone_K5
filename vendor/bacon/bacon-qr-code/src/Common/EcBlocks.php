<?php
declare(strict_types = 1);

namespace BaconQrCode\Common;

/**
 * Encapsulates a set of error-correction blocks in one symbol version.
 *
 * Most versions will use blocks of differing sizes within one version, so, this encapsulates the parameters for each
 * set of blocks. It also holds the number of error-correction codewords per block since it will be the same across all
 * blocks within one version.
 */
final class EcBlocks
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Number of EC codewords per block.
     *
     * @var int
     */
    private $ecCodewordsPerBlock;

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * List of EC blocks.
     *
     * @var EcBlock[]
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private array $ecBlocks;

    public function __construct(private readonly int $ecCodewordsPerBlock, EcBlock ...$ecBlocks)
    {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private $ecBlocks;

    public function __construct(int $ecCodewordsPerBlock, EcBlock ...$ecBlocks)
    {
        $this->ecCodewordsPerBlock = $ecCodewordsPerBlock;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->ecBlocks = $ecBlocks;
    }

    /**
     * Returns the number of EC codewords per block.
     */
    public function getEcCodewordsPerBlock() : int
    {
        return $this->ecCodewordsPerBlock;
    }

    /**
     * Returns the total number of EC block appearances.
     */
    public function getNumBlocks() : int
    {
        $total = 0;

        foreach ($this->ecBlocks as $ecBlock) {
            $total += $ecBlock->getCount();
        }

        return $total;
    }

    /**
     * Returns the total count of EC codewords.
     */
    public function getTotalEcCodewords() : int
    {
        return $this->ecCodewordsPerBlock * $this->getNumBlocks();
    }

    /**
     * Returns the EC blocks included in this collection.
     *
     * @return EcBlock[]
     */
    public function getEcBlocks() : array
    {
        return $this->ecBlocks;
    }
}
