<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\Color;

use BaconQrCode\Exception;

final class Cmyk implements ColorInterface
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @var int
     */
    private $cyan;

    /**
     * @var int
     */
    private $magenta;

    /**
     * @var int
     */
    private $yellow;

    /**
     * @var int
     */
    private $black;

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param int $cyan the cyan amount, 0 to 100
     * @param int $magenta the magenta amount, 0 to 100
     * @param int $yellow the yellow amount, 0 to 100
     * @param int $black the black amount, 0 to 100
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        private readonly int $cyan,
        private readonly int $magenta,
        private readonly int $yellow,
        private readonly int $black
    ) {
=======
    public function __construct(int $cyan, int $magenta, int $yellow, int $black)
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(int $cyan, int $magenta, int $yellow, int $black)
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($cyan < 0 || $cyan > 100) {
            throw new Exception\InvalidArgumentException('Cyan must be between 0 and 100');
        }

        if ($magenta < 0 || $magenta > 100) {
            throw new Exception\InvalidArgumentException('Magenta must be between 0 and 100');
        }

        if ($yellow < 0 || $yellow > 100) {
            throw new Exception\InvalidArgumentException('Yellow must be between 0 and 100');
        }

        if ($black < 0 || $black > 100) {
            throw new Exception\InvalidArgumentException('Black must be between 0 and 100');
        }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $this->cyan = $cyan;
        $this->magenta = $magenta;
        $this->yellow = $yellow;
        $this->black = $black;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getCyan() : int
    {
        return $this->cyan;
    }

    public function getMagenta() : int
    {
        return $this->magenta;
    }

    public function getYellow() : int
    {
        return $this->yellow;
    }

    public function getBlack() : int
    {
        return $this->black;
    }

    public function toRgb() : Rgb
    {
        $k = $this->black / 100;
        $c = (-$k * $this->cyan + $k * 100 + $this->cyan) / 100;
        $m = (-$k * $this->magenta + $k * 100 + $this->magenta) / 100;
        $y = (-$k * $this->yellow + $k * 100 + $this->yellow) / 100;

        return new Rgb(
            (int) (-$c * 255 + 255),
            (int) (-$m * 255 + 255),
            (int) (-$y * 255 + 255)
        );
    }

    public function toCmyk() : Cmyk
    {
        return $this;
    }

    public function toGray() : Gray
    {
        return $this->toRgb()->toGray();
    }
}
