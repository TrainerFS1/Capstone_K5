<?php
<<<<<<< HEAD
<<<<<<< HEAD

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link https://github.com/mockery/mockery for the canonical source repository
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license. For more information, see
 * <http://www.doctrine-project.org>.
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */

namespace Mockery;

use Closure;
<<<<<<< HEAD
<<<<<<< HEAD
use Exception;
use InvalidArgumentException;
use ReflectionClass;
use UnexpectedValueException;

use function class_exists;
use function restore_error_handler;
use function set_error_handler;
use function sprintf;
use function strlen;
use function unserialize;

/**
 * This is a trimmed down version of https://github.com/doctrine/instantiator, without the caching mechanism.
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use ReflectionClass;
use UnexpectedValueException;
use InvalidArgumentException;

/**
 * This is a trimmed down version of https://github.com/doctrine/instantiator,
 * basically without the caching
 *
 * @author Marco Pivetta <ocramius@gmail.com>
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
final class Instantiator
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @template TClass of object
     *
     * @param class-string<TClass> $className
     *
     * @throws InvalidArgumentException
     * @throws UnexpectedValueException
     *
     * @return TClass
     */
    public function instantiate($className): object
    {
        return $this->buildFactory($className)();
    }

    /**
     * @throws UnexpectedValueException
     */
    private function attemptInstantiationViaUnSerialization(
        ReflectionClass $reflectionClass,
        string $serializedString
    ): void {
        set_error_handler(static function ($code, $message, $file, $line) use ($reflectionClass, &$error): void {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * {@inheritDoc}
     */
    public function instantiate($className)
    {
        $factory    = $this->buildFactory($className);
        $instance   = $factory();

        return $instance;
    }

    /**
     * Builds a {@see \Closure} capable of instantiating the given $className without
     * invoking its constructor.
     *
     * @param string $className
     *
     * @return Closure
     */
    private function buildFactory($className)
    {
        $reflectionClass = $this->getReflectionClass($className);

        if ($this->isInstantiableViaReflection($reflectionClass)) {
            return function () use ($reflectionClass) {
                return $reflectionClass->newInstanceWithoutConstructor();
            };
        }

        $serializedString = sprintf(
            'O:%d:"%s":0:{}',
            strlen($className),
            $className
        );

        $this->attemptInstantiationViaUnSerialization($reflectionClass, $serializedString);

        return function () use ($serializedString) {
            return unserialize($serializedString);
        };
    }

    /**
     * @param string $className
     *
     * @return ReflectionClass
     *
     * @throws InvalidArgumentException
     */
    private function getReflectionClass($className)
    {
        if (! class_exists($className)) {
            throw new InvalidArgumentException("Class:$className does not exist");
        }

        $reflection = new ReflectionClass($className);

        if ($reflection->isAbstract()) {
            throw new InvalidArgumentException("Class:$className is an abstract class");
        }

        return $reflection;
    }

    /**
     * @param ReflectionClass $reflectionClass
     * @param string          $serializedString
     *
     * @throws UnexpectedValueException
     *
     * @return void
     */
    private function attemptInstantiationViaUnSerialization(ReflectionClass $reflectionClass, $serializedString)
    {
        set_error_handler(function ($code, $message, $file, $line) use ($reflectionClass, & $error) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $msg = sprintf(
                'Could not produce an instance of "%s" via un-serialization, since an error was triggered in file "%s" at line "%d"',
                $reflectionClass->getName(),
                $file,
                $line
            );

<<<<<<< HEAD
<<<<<<< HEAD
            $error = new UnexpectedValueException($msg, 0, new Exception($message, $code));
=======
            $error = new UnexpectedValueException($msg, 0, new \Exception($message, $code));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $error = new UnexpectedValueException($msg, 0, new \Exception($message, $code));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        });

        try {
            unserialize($serializedString);
<<<<<<< HEAD
<<<<<<< HEAD
        } catch (Exception $exception) {
            restore_error_handler();

            throw new UnexpectedValueException(
                sprintf(
                    'An exception was raised while trying to instantiate an instance of "%s" via un-serialization',
                    $reflectionClass->getName()
                ),
                0,
                $exception
            );
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } catch (\Exception $exception) {
            restore_error_handler();

            throw new UnexpectedValueException("An exception was raised while trying to instantiate an instance of \"{$reflectionClass->getName()}\" via un-serialization", 0, $exception);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        restore_error_handler();

<<<<<<< HEAD
<<<<<<< HEAD
        if ($error instanceof UnexpectedValueException) {
=======
        if ($error) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if ($error) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            throw $error;
        }
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Builds a {@see Closure} capable of instantiating the given $className without invoking its constructor.
     */
    private function buildFactory(string $className): Closure
    {
        $reflectionClass = $this->getReflectionClass($className);

        if ($this->isInstantiableViaReflection($reflectionClass)) {
            return static function () use ($reflectionClass) {
                return $reflectionClass->newInstanceWithoutConstructor();
            };
        }

        $serializedString = sprintf('O:%d:"%s":0:{}', strlen($className), $className);

        $this->attemptInstantiationViaUnSerialization($reflectionClass, $serializedString);

        return static function () use ($serializedString) {
            return unserialize($serializedString);
        };
    }

    /**
     * @throws InvalidArgumentException
     */
    private function getReflectionClass(string $className): ReflectionClass
    {
        if (! class_exists($className)) {
            throw new InvalidArgumentException(sprintf('Class:%s does not exist', $className));
        }

        $reflection = new ReflectionClass($className);

        if ($reflection->isAbstract()) {
            throw new InvalidArgumentException(sprintf('Class:%s is an abstract class', $className));
        }

        return $reflection;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param ReflectionClass $reflectionClass
     *
     * @return bool
     */
    private function isInstantiableViaReflection(ReflectionClass $reflectionClass)
    {
        return ! ($reflectionClass->isInternal() && $reflectionClass->isFinal());
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Verifies whether the given class is to be considered internal
<<<<<<< HEAD
<<<<<<< HEAD
     */
    private function hasInternalAncestors(ReflectionClass $reflectionClass): bool
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @param ReflectionClass $reflectionClass
     *
     * @return bool
     */
    private function hasInternalAncestors(ReflectionClass $reflectionClass)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        do {
            if ($reflectionClass->isInternal()) {
                return true;
            }
        } while ($reflectionClass = $reflectionClass->getParentClass());

        return false;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * Verifies if the class is instantiable via reflection
     */
    private function isInstantiableViaReflection(ReflectionClass $reflectionClass): bool
    {
        return ! ($reflectionClass->isInternal() && $reflectionClass->isFinal());
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
