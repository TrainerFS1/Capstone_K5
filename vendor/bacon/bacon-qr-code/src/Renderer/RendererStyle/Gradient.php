<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\RendererStyle;

use BaconQrCode\Renderer\Color\ColorInterface;

final class Gradient
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        private readonly ColorInterface $startColor,
        private readonly ColorInterface $endColor,
        private readonly GradientType   $type
    ) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @var ColorInterface
     */
    private $startColor;

    /**
     * @var ColorInterface
     */
    private $endColor;

    /**
     * @var GradientType
     */
    private $type;

    public function __construct(ColorInterface $startColor, ColorInterface $endColor, GradientType $type)
    {
        $this->startColor = $startColor;
        $this->endColor = $endColor;
        $this->type = $type;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getStartColor() : ColorInterface
    {
        return $this->startColor;
    }

    public function getEndColor() : ColorInterface
    {
        return $this->endColor;
    }

    public function getType() : GradientType
    {
        return $this->type;
    }
}
