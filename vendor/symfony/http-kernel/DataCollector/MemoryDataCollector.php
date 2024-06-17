<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class MemoryDataCollector extends DataCollector implements LateDataCollectorInterface
{
    public function __construct()
    {
        $this->reset();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function collect(Request $request, Response $response, ?\Throwable $exception = null): void
=======
    public function collect(Request $request, Response $response, \Throwable $exception = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function collect(Request $request, Response $response, \Throwable $exception = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->updateMemoryUsage();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function reset(): void
=======
    public function reset()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function reset()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->data = [
            'memory' => 0,
            'memory_limit' => $this->convertToBytes(\ini_get('memory_limit')),
        ];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function lateCollect(): void
=======
    public function lateCollect()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function lateCollect()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->updateMemoryUsage();
    }

    public function getMemory(): int
    {
        return $this->data['memory'];
    }

    public function getMemoryLimit(): int|float
    {
        return $this->data['memory_limit'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function updateMemoryUsage(): void
=======
    public function updateMemoryUsage()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function updateMemoryUsage()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->data['memory'] = memory_get_peak_usage(true);
    }

    public function getName(): string
    {
        return 'memory';
    }

    private function convertToBytes(string $memoryLimit): int|float
    {
        if ('-1' === $memoryLimit) {
            return -1;
        }

        $memoryLimit = strtolower($memoryLimit);
        $max = strtolower(ltrim($memoryLimit, '+'));
        if (str_starts_with($max, '0x')) {
            $max = \intval($max, 16);
        } elseif (str_starts_with($max, '0')) {
            $max = \intval($max, 8);
        } else {
            $max = (int) $max;
        }

        switch (substr($memoryLimit, -1)) {
            case 't': $max *= 1024;
                // no break
            case 'g': $max *= 1024;
                // no break
            case 'm': $max *= 1024;
                // no break
            case 'k': $max *= 1024;
        }

        return $max;
    }
}
