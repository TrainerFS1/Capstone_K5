<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\EventListener;

use Psr\Log\LoggerInterface;
<<<<<<< HEAD
use Psr\Log\LogLevel;
use Symfony\Component\ErrorHandler\ErrorHandler;
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Attribute\WithHttpStatus;
use Symfony\Component\HttpKernel\Attribute\WithLogLevel;
=======
use Symfony\Component\ErrorHandler\Exception\FlattenException;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Symfony\Component\HttpKernel\Event\ControllerArgumentsEvent;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\KernelEvents;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Log\DebugLoggerConfigurator;
=======
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ErrorListener implements EventSubscriberInterface
{
    protected $controller;
    protected $logger;
    protected $debug;
    /**
     * @var array<class-string, array{log_level: string|null, status_code: int<100,599>|null}>
     */
    protected $exceptionsMapping;

    /**
     * @param array<class-string, array{log_level: string|null, status_code: int<100,599>|null}> $exceptionsMapping
     */
<<<<<<< HEAD
    public function __construct(string|object|array|null $controller, ?LoggerInterface $logger = null, bool $debug = false, array $exceptionsMapping = [])
=======
    public function __construct(string|object|array|null $controller, LoggerInterface $logger = null, bool $debug = false, array $exceptionsMapping = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->controller = $controller;
        $this->logger = $logger;
        $this->debug = $debug;
        $this->exceptionsMapping = $exceptionsMapping;
    }

<<<<<<< HEAD
    /**
     * @return void
     */
    public function logKernelException(ExceptionEvent $event)
    {
        $throwable = $event->getThrowable();
        $logLevel = $this->resolveLogLevel($throwable);
=======
    public function logKernelException(ExceptionEvent $event)
    {
        $throwable = $event->getThrowable();
        $logLevel = null;

        foreach ($this->exceptionsMapping as $class => $config) {
            if ($throwable instanceof $class && $config['log_level']) {
                $logLevel = $config['log_level'];
                break;
            }
        }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        foreach ($this->exceptionsMapping as $class => $config) {
            if (!$throwable instanceof $class || !$config['status_code']) {
                continue;
            }
            if (!$throwable instanceof HttpExceptionInterface || $throwable->getStatusCode() !== $config['status_code']) {
                $headers = $throwable instanceof HttpExceptionInterface ? $throwable->getHeaders() : [];
                $throwable = new HttpException($config['status_code'], $throwable->getMessage(), $throwable, $headers);
                $event->setThrowable($throwable);
            }
            break;
        }

<<<<<<< HEAD
        // There's no specific status code defined in the configuration for this exception
        if (!$throwable instanceof HttpExceptionInterface) {
            $class = new \ReflectionClass($throwable);

            do {
                if ($attributes = $class->getAttributes(WithHttpStatus::class, \ReflectionAttribute::IS_INSTANCEOF)) {
                    /** @var WithHttpStatus $instance */
                    $instance = $attributes[0]->newInstance();

                    $throwable = new HttpException($instance->statusCode, $throwable->getMessage(), $throwable, $instance->headers);
                    $event->setThrowable($throwable);
                    break;
                }
            } while ($class = $class->getParentClass());
        }

        $e = FlattenException::createFromThrowable($throwable);

        $this->logException($throwable, sprintf('Uncaught PHP Exception %s: "%s" at %s line %s', $e->getClass(), $e->getMessage(), basename($e->getFile()), $e->getLine()), $logLevel);
    }

    /**
     * @return void
     */
=======
        $e = FlattenException::createFromThrowable($throwable);

        $this->logException($throwable, sprintf('Uncaught PHP Exception %s: "%s" at %s line %s', $e->getClass(), $e->getMessage(), $e->getFile(), $e->getLine()), $logLevel);
    }

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function onKernelException(ExceptionEvent $event)
    {
        if (null === $this->controller) {
            return;
        }

        $throwable = $event->getThrowable();
<<<<<<< HEAD

        if ($exceptionHandler = set_exception_handler(var_dump(...))) {
            restore_exception_handler();
            if (\is_array($exceptionHandler) && $exceptionHandler[0] instanceof ErrorHandler) {
                $throwable = $exceptionHandler[0]->enhanceError($event->getThrowable());
            }
        }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $request = $this->duplicateRequest($throwable, $event->getRequest());

        try {
            $response = $event->getKernel()->handle($request, HttpKernelInterface::SUB_REQUEST, false);
        } catch (\Exception $e) {
            $f = FlattenException::createFromThrowable($e);

<<<<<<< HEAD
            $this->logException($e, sprintf('Exception thrown when handling an exception (%s: %s at %s line %s)', $f->getClass(), $f->getMessage(), basename($e->getFile()), $e->getLine()));
=======
            $this->logException($e, sprintf('Exception thrown when handling an exception (%s: %s at %s line %s)', $f->getClass(), $f->getMessage(), $e->getFile(), $e->getLine()));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            $prev = $e;
            do {
                if ($throwable === $wrapper = $prev) {
                    throw $e;
                }
            } while ($prev = $wrapper->getPrevious());

            $prev = new \ReflectionProperty($wrapper instanceof \Exception ? \Exception::class : \Error::class, 'previous');
            $prev->setValue($wrapper, $throwable);

            throw $e;
        }

        $event->setResponse($response);

        if ($this->debug) {
            $event->getRequest()->attributes->set('_remove_csp_headers', true);
        }
    }

    public function removeCspHeader(ResponseEvent $event): void
    {
        if ($this->debug && $event->getRequest()->attributes->get('_remove_csp_headers', false)) {
            $event->getResponse()->headers->remove('Content-Security-Policy');
        }
    }

<<<<<<< HEAD
    /**
     * @return void
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function onControllerArguments(ControllerArgumentsEvent $event)
    {
        $e = $event->getRequest()->attributes->get('exception');

        if (!$e instanceof \Throwable || false === $k = array_search($e, $event->getArguments(), true)) {
            return;
        }

        $r = new \ReflectionFunction($event->getController()(...));
        $r = $r->getParameters()[$k] ?? null;

        if ($r && (!($r = $r->getType()) instanceof \ReflectionNamedType || FlattenException::class === $r->getName())) {
            $arguments = $event->getArguments();
            $arguments[$k] = FlattenException::createFromThrowable($e);
            $event->setArguments($arguments);
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER_ARGUMENTS => 'onControllerArguments',
            KernelEvents::EXCEPTION => [
                ['logKernelException', 0],
                ['onKernelException', -128],
            ],
            KernelEvents::RESPONSE => ['removeCspHeader', -128],
        ];
    }

    /**
     * Logs an exception.
     */
<<<<<<< HEAD
    protected function logException(\Throwable $exception, string $message, ?string $logLevel = null): void
    {
        if (null === $this->logger) {
            return;
        }

        $logLevel ??= $this->resolveLogLevel($exception);

        $this->logger->log($logLevel, $message, ['exception' => $exception]);
    }

    /**
     * Resolves the level to be used when logging the exception.
     */
    private function resolveLogLevel(\Throwable $throwable): string
    {
        foreach ($this->exceptionsMapping as $class => $config) {
            if ($throwable instanceof $class && $config['log_level']) {
                return $config['log_level'];
            }
        }

        $class = new \ReflectionClass($throwable);

        do {
            if ($attributes = $class->getAttributes(WithLogLevel::class)) {
                /** @var WithLogLevel $instance */
                $instance = $attributes[0]->newInstance();

                return $instance->level;
            }
        } while ($class = $class->getParentClass());

        if (!$throwable instanceof HttpExceptionInterface || $throwable->getStatusCode() >= 500) {
            return LogLevel::CRITICAL;
        }

        return LogLevel::ERROR;
=======
    protected function logException(\Throwable $exception, string $message, string $logLevel = null): void
    {
        if (null !== $this->logger) {
            if (null !== $logLevel) {
                $this->logger->log($logLevel, $message, ['exception' => $exception]);
            } elseif (!$exception instanceof HttpExceptionInterface || $exception->getStatusCode() >= 500) {
                $this->logger->critical($message, ['exception' => $exception]);
            } else {
                $this->logger->error($message, ['exception' => $exception]);
            }
        }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Clones the request for the exception.
     */
    protected function duplicateRequest(\Throwable $exception, Request $request): Request
    {
        $attributes = [
            '_controller' => $this->controller,
            'exception' => $exception,
<<<<<<< HEAD
            'logger' => DebugLoggerConfigurator::getDebugLogger($this->logger),
=======
            'logger' => $this->logger instanceof DebugLoggerInterface ? $this->logger : null,
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ];
        $request = $request->duplicate(null, null, $attributes);
        $request->setMethod('GET');

        return $request;
    }
}
