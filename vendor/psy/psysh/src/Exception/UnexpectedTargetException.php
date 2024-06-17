<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2023 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Exception;

class UnexpectedTargetException extends RuntimeException
{
    private $target;

    /**
     * @param mixed           $target
     * @param string          $message  (default: "")
     * @param int             $code     (default: 0)
     * @param \Throwable|null $previous (default: null)
     */
<<<<<<< HEAD
    public function __construct($target, string $message = '', int $code = 0, ?\Throwable $previous = null)
=======
    public function __construct($target, string $message = '', int $code = 0, \Throwable $previous = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->target = $target;
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return mixed
     */
    public function getTarget()
    {
        return $this->target;
    }
}
