<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\Path;

final class Move implements OperationInterface
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(private readonly float $x, private readonly float $y)
    {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @var float
     */
    private $x;

    /**
     * @var float
     */
    private $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getX() : float
    {
        return $this->x;
    }

    public function getY() : float
    {
        return $this->y;
    }

    /**
     * @return self
     */
    public function translate(float $x, float $y) : OperationInterface
    {
        return new self($this->x + $x, $this->y + $y);
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @return self
     */
    public function rotate(int $degrees) : OperationInterface
    {
        $radians = deg2rad($degrees);
        $sin = sin($radians);
        $cos = cos($radians);
        $xr = $this->x * $cos - $this->y * $sin;
        $yr = $this->x * $sin + $this->y * $cos;
        return new self($xr, $yr);
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
