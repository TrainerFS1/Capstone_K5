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
 * @author Bart van den Burg <bart@burgov.nl>
 *
 * @final
 */
class AjaxDataCollector extends DataCollector
{
<<<<<<< HEAD
    public function collect(Request $request, Response $response, ?\Throwable $exception = null): void
=======
    public function collect(Request $request, Response $response, \Throwable $exception = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        // all collecting is done client side
    }

<<<<<<< HEAD
    public function reset(): void
=======
    public function reset()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        // all collecting is done client side
    }

    public function getName(): string
    {
        return 'ajax';
    }
}
