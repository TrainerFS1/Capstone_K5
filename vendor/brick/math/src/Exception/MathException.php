<?php

declare(strict_types=1);

namespace Brick\Math\Exception;

/**
 * Base class for all math exceptions.
<<<<<<< HEAD
 */
class MathException extends \Exception
=======
 *
 * This class is abstract to ensure that only fine-grained exceptions are thrown throughout the code.
 */
class MathException extends \RuntimeException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
}
