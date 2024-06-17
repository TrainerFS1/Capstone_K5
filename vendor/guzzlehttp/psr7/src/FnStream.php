<?php

declare(strict_types=1);

namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Compose stream implementations based on a hash of functions.
 *
 * Allows for easy testing and extension of a provided stream without needing
 * to create a concrete class for a simple extension point.
 */
#[\AllowDynamicProperties]
final class FnStream implements StreamInterface
{
    private const SLOTS = [
        '__toString', 'close', 'detach', 'rewind',
        'getSize', 'tell', 'eof', 'isSeekable', 'seek', 'isWritable', 'write',
<<<<<<< HEAD
        'isReadable', 'read', 'getContents', 'getMetadata',
=======
        'isReadable', 'read', 'getContents', 'getMetadata'
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ];

    /** @var array<string, callable> */
    private $methods;

    /**
     * @param array<string, callable> $methods Hash of method name to a callable.
     */
    public function __construct(array $methods)
    {
        $this->methods = $methods;

        // Create the functions on the class
        foreach ($methods as $name => $fn) {
<<<<<<< HEAD
            $this->{'_fn_'.$name} = $fn;
=======
            $this->{'_fn_' . $name} = $fn;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }
    }

    /**
     * Lazily determine which methods are not implemented.
     *
     * @throws \BadMethodCallException
     */
    public function __get(string $name): void
    {
        throw new \BadMethodCallException(str_replace('_fn_', '', $name)
<<<<<<< HEAD
            .'() is not implemented in the FnStream');
=======
            . '() is not implemented in the FnStream');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * The close method is called on the underlying stream only if possible.
     */
    public function __destruct()
    {
        if (isset($this->_fn_close)) {
<<<<<<< HEAD
            ($this->_fn_close)();
=======
            call_user_func($this->_fn_close);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }
    }

    /**
     * An unserialize would allow the __destruct to run when the unserialized value goes out of scope.
     *
     * @throws \LogicException
     */
    public function __wakeup(): void
    {
        throw new \LogicException('FnStream should never be unserialized');
    }

    /**
     * Adds custom functionality to an underlying stream by intercepting
     * specific method calls.
     *
     * @param StreamInterface         $stream  Stream to decorate
     * @param array<string, callable> $methods Hash of method name to a closure
     *
     * @return FnStream
     */
    public static function decorate(StreamInterface $stream, array $methods)
    {
        // If any of the required methods were not provided, then simply
        // proxy to the decorated stream.
        foreach (array_diff(self::SLOTS, array_keys($methods)) as $diff) {
            /** @var callable $callable */
            $callable = [$stream, $diff];
            $methods[$diff] = $callable;
        }

        return new self($methods);
    }

    public function __toString(): string
    {
        try {
<<<<<<< HEAD
            /** @var string */
            return ($this->_fn___toString)();
=======
            return call_user_func($this->_fn___toString);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } catch (\Throwable $e) {
            if (\PHP_VERSION_ID >= 70400) {
                throw $e;
            }
            trigger_error(sprintf('%s::__toString exception: %s', self::class, (string) $e), E_USER_ERROR);
<<<<<<< HEAD

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return '';
        }
    }

    public function close(): void
    {
<<<<<<< HEAD
        ($this->_fn_close)();
=======
        call_user_func($this->_fn_close);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function detach()
    {
<<<<<<< HEAD
        return ($this->_fn_detach)();
=======
        return call_user_func($this->_fn_detach);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getSize(): ?int
    {
<<<<<<< HEAD
        return ($this->_fn_getSize)();
=======
        return call_user_func($this->_fn_getSize);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function tell(): int
    {
<<<<<<< HEAD
        return ($this->_fn_tell)();
=======
        return call_user_func($this->_fn_tell);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function eof(): bool
    {
<<<<<<< HEAD
        return ($this->_fn_eof)();
=======
        return call_user_func($this->_fn_eof);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function isSeekable(): bool
    {
<<<<<<< HEAD
        return ($this->_fn_isSeekable)();
=======
        return call_user_func($this->_fn_isSeekable);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function rewind(): void
    {
<<<<<<< HEAD
        ($this->_fn_rewind)();
=======
        call_user_func($this->_fn_rewind);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function seek($offset, $whence = SEEK_SET): void
    {
<<<<<<< HEAD
        ($this->_fn_seek)($offset, $whence);
=======
        call_user_func($this->_fn_seek, $offset, $whence);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function isWritable(): bool
    {
<<<<<<< HEAD
        return ($this->_fn_isWritable)();
=======
        return call_user_func($this->_fn_isWritable);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function write($string): int
    {
<<<<<<< HEAD
        return ($this->_fn_write)($string);
=======
        return call_user_func($this->_fn_write, $string);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function isReadable(): bool
    {
<<<<<<< HEAD
        return ($this->_fn_isReadable)();
=======
        return call_user_func($this->_fn_isReadable);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function read($length): string
    {
<<<<<<< HEAD
        return ($this->_fn_read)($length);
=======
        return call_user_func($this->_fn_read, $length);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getContents(): string
    {
<<<<<<< HEAD
        return ($this->_fn_getContents)();
    }

    /**
=======
        return call_user_func($this->_fn_getContents);
    }

    /**
     * {@inheritdoc}
     *
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return mixed
     */
    public function getMetadata($key = null)
    {
<<<<<<< HEAD
        return ($this->_fn_getMetadata)($key);
=======
        return call_user_func($this->_fn_getMetadata, $key);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
