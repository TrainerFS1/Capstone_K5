<?php
declare(strict_types = 1);

namespace BaconQrCode\Renderer\Module;

use BaconQrCode\Encoder\ByteMatrix;
use BaconQrCode\Renderer\Module\EdgeIterator\EdgeIterator;
use BaconQrCode\Renderer\Path\Path;

/**
 * Groups modules together to a single path.
 */
final class SquareModule implements ModuleInterface
{
<<<<<<< HEAD
    private static ?SquareModule $instance = null;
=======
    /**
     * @var self|null
     */
    private static $instance;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    private function __construct()
    {
    }

    public static function instance() : self
    {
        return self::$instance ?: self::$instance = new self();
    }

    public function createPath(ByteMatrix $matrix) : Path
    {
        $path = new Path();

        foreach (new EdgeIterator($matrix) as $edge) {
            $points = $edge->getSimplifiedPoints();
            $length = count($points);
            $path = $path->move($points[0][0], $points[0][1]);

            for ($i = 1; $i < $length; ++$i) {
                $path = $path->line($points[$i][0], $points[$i][1]);
            }

            $path = $path->close();
        }

        return $path;
    }
}
