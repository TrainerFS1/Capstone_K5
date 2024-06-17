<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Log;

use Symfony\Component\HttpFoundation\Request;

/**
 * DebugLoggerInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DebugLoggerInterface
{
    /**
     * Returns an array of logs.
     *
     * @return array<array{
     *     channel: ?string,
     *     context: array<string, mixed>,
     *     message: string,
     *     priority: int,
     *     priorityName: string,
     *     timestamp: int,
     *     timestamp_rfc3339: string,
     * }>
     */
<<<<<<< HEAD
    public function getLogs(?Request $request = null);
=======
    public function getLogs(Request $request = null);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Returns the number of errors.
     *
     * @return int
     */
<<<<<<< HEAD
    public function countErrors(?Request $request = null);

    /**
     * Removes all log records.
     *
     * @return void
=======
    public function countErrors(Request $request = null);

    /**
     * Removes all log records.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function clear();
}
