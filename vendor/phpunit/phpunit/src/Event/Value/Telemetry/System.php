<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Telemetry;

/**
<<<<<<< HEAD
<<<<<<< HEAD
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class System
{
    private readonly StopWatch $stopWatch;
    private readonly MemoryMeter $memoryMeter;
<<<<<<< HEAD
<<<<<<< HEAD
    private readonly GarbageCollectorStatusProvider $garbageCollectorStatusProvider;

    public function __construct(StopWatch $stopWatch, MemoryMeter $memoryMeter, GarbageCollectorStatusProvider $garbageCollectorStatusProvider)
    {
        $this->stopWatch                      = $stopWatch;
        $this->memoryMeter                    = $memoryMeter;
        $this->garbageCollectorStatusProvider = $garbageCollectorStatusProvider;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    public function __construct(StopWatch $stopWatch, MemoryMeter $memoryMeter)
    {
        $this->stopWatch   = $stopWatch;
        $this->memoryMeter = $memoryMeter;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function snapshot(): Snapshot
    {
        return new Snapshot(
            $this->stopWatch->current(),
            $this->memoryMeter->memoryUsage(),
<<<<<<< HEAD
<<<<<<< HEAD
            $this->memoryMeter->peakMemoryUsage(),
            $this->garbageCollectorStatusProvider->status(),
=======
            $this->memoryMeter->peakMemoryUsage()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->memoryMeter->peakMemoryUsage()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );
    }
}
