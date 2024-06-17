<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\Path;

interface OperationInterface
{
    /**
     * Translates the operation's coordinates.
     */
    public function translate(float $x, float $y) : self;
<<<<<<< HEAD

    /**
     * Rotates the operation's coordinates.
     */
    public function rotate(int $degrees) : self;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
