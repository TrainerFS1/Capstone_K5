<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\Eye;

use BaconQrCode\Renderer\Path\Path;

/**
 * Combines the style of two different eyes.
 */
final class CompositeEye implements EyeInterface
{
<<<<<<< HEAD
    public function __construct(private readonly EyeInterface $externalEye, private readonly EyeInterface $internalEye)
    {
=======
    /**
     * @var EyeInterface
     */
    private $externalEye;

    /**
     * @var EyeInterface
     */
    private $internalEye;

    public function __construct(EyeInterface $externalEye, EyeInterface $internalEye)
    {
        $this->externalEye = $externalEye;
        $this->internalEye = $internalEye;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getExternalPath() : Path
    {
        return $this->externalEye->getExternalPath();
    }

    public function getInternalPath() : Path
    {
        return $this->internalEye->getInternalPath();
    }
}
