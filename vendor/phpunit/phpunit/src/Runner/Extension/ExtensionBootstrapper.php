<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Runner\Extension;

use function assert;
use function class_exists;
use function class_implements;
use function in_array;
<<<<<<< HEAD
<<<<<<< HEAD
use function sprintf;
use PHPUnit\Event\Facade as EventFacade;
use PHPUnit\TextUI\Configuration\Configuration;
use ReflectionClass;
use Throwable;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PHPUnit\Event;
use PHPUnit\Runner\ClassCannotBeInstantiatedException;
use PHPUnit\Runner\ClassDoesNotExistException;
use PHPUnit\Runner\ClassDoesNotImplementExtensionInterfaceException;
use PHPUnit\Runner\Exception;
use PHPUnit\TextUI\Configuration\Configuration;
use ReflectionClass;
use ReflectionException;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExtensionBootstrapper
{
    private readonly Configuration $configuration;
    private readonly Facade $facade;

    public function __construct(Configuration $configuration, Facade $facade)
    {
        $this->configuration = $configuration;
        $this->facade        = $facade;
    }

    /**
     * @psalm-param class-string $className
     * @psalm-param array<string, string> $parameters
<<<<<<< HEAD
<<<<<<< HEAD
=======
     *
     * @throws Exception
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     *
     * @throws Exception
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function bootstrap(string $className, array $parameters): void
    {
        if (!class_exists($className)) {
<<<<<<< HEAD
<<<<<<< HEAD
            EventFacade::emitter()->testRunnerTriggeredWarning(
                sprintf(
                    'Cannot bootstrap extension because class %s does not exist',
                    $className,
                ),
            );

            return;
        }

        if (!in_array(Extension::class, class_implements($className), true)) {
            EventFacade::emitter()->testRunnerTriggeredWarning(
                sprintf(
                    'Cannot bootstrap extension because class %s does not implement interface %s',
                    $className,
                    Extension::class,
                ),
            );

            return;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            throw new ClassDoesNotExistException($className);
        }

        if (!in_array(Extension::class, class_implements($className), true)) {
            throw new ClassDoesNotImplementExtensionInterfaceException($className);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        try {
            $instance = (new ReflectionClass($className))->newInstance();
<<<<<<< HEAD
<<<<<<< HEAD

            assert($instance instanceof Extension);

            $instance->bootstrap(
                $this->configuration,
                $this->facade,
                ParameterCollection::fromArray($parameters),
            );
        } catch (Throwable $t) {
            EventFacade::emitter()->testRunnerTriggeredWarning(
                sprintf(
                    'Bootstrapping of extension %s failed: %s%s%s',
                    $className,
                    $t->getMessage(),
                    PHP_EOL,
                    $t->getTraceAsString(),
                ),
            );

            return;
        }

        EventFacade::emitter()->testRunnerBootstrappedExtension(
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        } catch (ReflectionException $e) {
            throw new ClassCannotBeInstantiatedException($className, $e);
        }

        assert($instance instanceof Extension);

        $instance->bootstrap(
            $this->configuration,
            $this->facade,
            ParameterCollection::fromArray($parameters),
        );

        Event\Facade::emitter()->testRunnerBootstrappedExtension(
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $className,
            $parameters,
        );
    }
}
