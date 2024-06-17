<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Framework;

use function array_keys;
use function get_object_vars;
<<<<<<< HEAD
<<<<<<< HEAD
use RuntimeException;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Util\Filter;
use PHPUnit\Util\ThrowableToStringMapper;
use RuntimeException;
use Stringable;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Throwable;

/**
 * Base class for all PHPUnit Framework exceptions.
 *
 * Ensures that exceptions thrown during a test run do not leave stray
 * references behind.
 *
 * Every Exception contains a stack trace. Each stack frame contains the 'args'
 * of the called function. The function arguments can contain references to
 * instantiated objects. The references prevent the objects from being
 * destructed (until test results are eventually printed), so memory cannot be
 * freed up.
 *
 * With enabled process isolation, test results are serialized in the child
 * process and unserialized in the parent process. The stack trace of Exceptions
 * may contain objects that cannot be serialized or unserialized (e.g., PDO
 * connections). Unserializing user-space objects from the child process into
 * the parent would break the intended encapsulation of process isolation.
 *
 * @see http://fabien.potencier.org/article/9/php-serialization-stack-traces-and-exceptions
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
<<<<<<< HEAD
<<<<<<< HEAD
class Exception extends RuntimeException implements \PHPUnit\Exception
{
    protected array $serializableTrace;

    public function __construct(string $message = '', int $code = 0, ?Throwable $previous = null)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Exception extends RuntimeException implements \PHPUnit\Exception, Stringable
{
    protected array $serializableTrace;

    public function __construct(string $message = '', int $code = 0, Throwable $previous = null)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        parent::__construct($message, $code, $previous);

        $this->serializableTrace = $this->getTrace();

        foreach (array_keys($this->serializableTrace) as $key) {
            unset($this->serializableTrace[$key]['args']);
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * @throws Exception
     */
    public function __toString(): string
    {
        $string = ThrowableToStringMapper::map($this);

        if ($trace = Filter::getFilteredStacktrace($this)) {
            $string .= "\n" . $trace;
        }

        return $string;
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __sleep(): array
    {
        return array_keys(get_object_vars($this));
    }

    /**
     * Returns the serializable trace (without 'args').
     */
    public function getSerializableTrace(): array
    {
        return $this->serializableTrace;
    }
}
