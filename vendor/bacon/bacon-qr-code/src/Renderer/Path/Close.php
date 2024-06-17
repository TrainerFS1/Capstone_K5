<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\Path;

final class Close implements OperationInterface
{
<<<<<<< HEAD
<<<<<<< HEAD
    private static ?Close $instance = null;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @var self|null
     */
    private static $instance;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    private function __construct()
    {
    }

    public static function instance() : self
    {
        return self::$instance ?: self::$instance = new self();
    }

    /**
     * @return self
     */
    public function translate(float $x, float $y) : OperationInterface
    {
        return $this;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * @return self
     */
    public function rotate(int $degrees) : OperationInterface
    {
        return $this;
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
