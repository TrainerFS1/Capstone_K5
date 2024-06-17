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
 * @internal This interface is not covered by the backward compatibility promise for PHPUnit
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
interface MemoryMeter
{
    public function memoryUsage(): MemoryUsage;

    public function peakMemoryUsage(): MemoryUsage;
}
