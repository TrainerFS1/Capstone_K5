<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Exception;

/**
 * @author Kris Wallsmith <kris@symfony.com>
 */
class MethodNotAllowedHttpException extends HttpException
{
    /**
     * @param string[] $allow An array of allowed methods
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(array $allow, string $message = '', ?\Throwable $previous = null, int $code = 0, array $headers = [])
=======
    public function __construct(array $allow, string $message = '', \Throwable $previous = null, int $code = 0, array $headers = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(array $allow, string $message = '', \Throwable $previous = null, int $code = 0, array $headers = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $headers['Allow'] = strtoupper(implode(', ', $allow));

        parent::__construct(405, $message, $previous, $headers, $code);
    }
}
