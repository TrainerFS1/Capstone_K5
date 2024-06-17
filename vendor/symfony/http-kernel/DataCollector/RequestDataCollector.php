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

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionBagInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\VarDumper\Cloner\Data;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class RequestDataCollector extends DataCollector implements EventSubscriberInterface, LateDataCollectorInterface
{
    /**
     * @var \SplObjectStorage<Request, callable>
     */
    private \SplObjectStorage $controllers;
    private array $sessionUsages = [];
    private ?RequestStack $requestStack;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(?RequestStack $requestStack = null)
=======
    public function __construct(RequestStack $requestStack = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(RequestStack $requestStack = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->controllers = new \SplObjectStorage();
        $this->requestStack = $requestStack;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function collect(Request $request, Response $response, ?\Throwable $exception = null): void
=======
    public function collect(Request $request, Response $response, \Throwable $exception = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function collect(Request $request, Response $response, \Throwable $exception = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        // attributes are serialized and as they can be anything, they need to be converted to strings.
        $attributes = [];
        $route = '';
        foreach ($request->attributes->all() as $key => $value) {
            if ('_route' === $key) {
                $route = \is_object($value) ? $value->getPath() : $value;
                $attributes[$key] = $route;
            } else {
                $attributes[$key] = $value;
            }
        }

        $content = $request->getContent();

        $sessionMetadata = [];
        $sessionAttributes = [];
        $flashes = [];
        if ($request->hasSession()) {
            $session = $request->getSession();
            if ($session->isStarted()) {
                $sessionMetadata['Created'] = date(\DATE_RFC822, $session->getMetadataBag()->getCreated());
                $sessionMetadata['Last used'] = date(\DATE_RFC822, $session->getMetadataBag()->getLastUsed());
                $sessionMetadata['Lifetime'] = $session->getMetadataBag()->getLifetime();
                $sessionAttributes = $session->all();
                $flashes = $session->getFlashBag()->peekAll();
            }
        }

        $statusCode = $response->getStatusCode();

        $responseCookies = [];
        foreach ($response->headers->getCookies() as $cookie) {
            $responseCookies[$cookie->getName()] = $cookie;
        }

        $dotenvVars = [];
        foreach (explode(',', $_SERVER['SYMFONY_DOTENV_VARS'] ?? $_ENV['SYMFONY_DOTENV_VARS'] ?? '') as $name) {
            if ('' !== $name && isset($_ENV[$name])) {
                $dotenvVars[$name] = $_ENV[$name];
            }
        }

        $this->data = [
            'method' => $request->getMethod(),
            'format' => $request->getRequestFormat(),
            'content_type' => $response->headers->get('Content-Type', 'text/html'),
            'status_text' => Response::$statusTexts[$statusCode] ?? '',
            'status_code' => $statusCode,
            'request_query' => $request->query->all(),
            'request_request' => $request->request->all(),
            'request_files' => $request->files->all(),
            'request_headers' => $request->headers->all(),
            'request_server' => $request->server->all(),
            'request_cookies' => $request->cookies->all(),
            'request_attributes' => $attributes,
            'route' => $route,
            'response_headers' => $response->headers->all(),
            'response_cookies' => $responseCookies,
            'session_metadata' => $sessionMetadata,
            'session_attributes' => $sessionAttributes,
            'session_usages' => array_values($this->sessionUsages),
            'stateless_check' => $this->requestStack?->getMainRequest()?->attributes->get('_stateless') ?? false,
            'flashes' => $flashes,
            'path_info' => $request->getPathInfo(),
            'controller' => 'n/a',
            'locale' => $request->getLocale(),
            'dotenv_vars' => $dotenvVars,
        ];

        if (isset($this->data['request_headers']['php-auth-pw'])) {
            $this->data['request_headers']['php-auth-pw'] = '******';
        }

        if (isset($this->data['request_server']['PHP_AUTH_PW'])) {
            $this->data['request_server']['PHP_AUTH_PW'] = '******';
        }

        if (isset($this->data['request_request']['_password'])) {
            $encodedPassword = rawurlencode($this->data['request_request']['_password']);
            $content = str_replace('_password='.$encodedPassword, '_password=******', $content);
            $this->data['request_request']['_password'] = '******';
        }

        $this->data['content'] = $content;

        foreach ($this->data as $key => $value) {
            if (!\is_array($value)) {
                continue;
            }
            if ('request_headers' === $key || 'response_headers' === $key) {
<<<<<<< HEAD
<<<<<<< HEAD
                $this->data[$key] = array_map(fn ($v) => isset($v[0]) && !isset($v[1]) ? $v[0] : $v, $value);
=======
                $this->data[$key] = array_map(function ($v) { return isset($v[0]) && !isset($v[1]) ? $v[0] : $v; }, $value);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $this->data[$key] = array_map(function ($v) { return isset($v[0]) && !isset($v[1]) ? $v[0] : $v; }, $value);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        }

        if (isset($this->controllers[$request])) {
            $this->data['controller'] = $this->parseController($this->controllers[$request]);
            unset($this->controllers[$request]);
        }

        if ($request->attributes->has('_redirected') && $redirectCookie = $request->cookies->get('sf_redirect')) {
            $this->data['redirect'] = json_decode($redirectCookie, true);

            $response->headers->clearCookie('sf_redirect');
        }

        if ($response->isRedirect()) {
            $response->headers->setCookie(new Cookie(
                'sf_redirect',
                json_encode([
                    'token' => $response->headers->get('x-debug-token'),
                    'route' => $request->attributes->get('_route', 'n/a'),
                    'method' => $request->getMethod(),
                    'controller' => $this->parseController($request->attributes->get('_controller')),
                    'status_code' => $statusCode,
                    'status_text' => Response::$statusTexts[$statusCode],
                ]),
                0, '/', null, $request->isSecure(), true, false, 'lax'
            ));
        }

        $this->data['identifier'] = $this->data['route'] ?: (\is_array($this->data['controller']) ? $this->data['controller']['class'].'::'.$this->data['controller']['method'].'()' : $this->data['controller']);

        if ($response->headers->has('x-previous-debug-token')) {
            $this->data['forward_token'] = $response->headers->get('x-previous-debug-token');
        }
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function lateCollect(): void
=======
    public function lateCollect()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function lateCollect()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->data = $this->cloneVar($this->data);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function reset(): void
    {
        parent::reset();
=======
    public function reset()
    {
        $this->data = [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function reset()
    {
        $this->data = [];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->controllers = new \SplObjectStorage();
        $this->sessionUsages = [];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getMethod(): string
=======
    public function getMethod()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getMethod()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['method'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getPathInfo(): string
=======
    public function getPathInfo()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getPathInfo()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['path_info'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getRequestRequest()
    {
        return new ParameterBag($this->data['request_request']->getValue());
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getRequestQuery()
    {
        return new ParameterBag($this->data['request_query']->getValue());
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getRequestFiles()
    {
        return new ParameterBag($this->data['request_files']->getValue());
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getRequestHeaders()
    {
        return new ParameterBag($this->data['request_headers']->getValue());
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getRequestServer(bool $raw = false)
    {
        return new ParameterBag($this->data['request_server']->getValue($raw));
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getRequestCookies(bool $raw = false)
    {
        return new ParameterBag($this->data['request_cookies']->getValue($raw));
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getRequestAttributes()
    {
        return new ParameterBag($this->data['request_attributes']->getValue());
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getResponseHeaders()
    {
        return new ParameterBag($this->data['response_headers']->getValue());
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getResponseCookies()
    {
        return new ParameterBag($this->data['response_cookies']->getValue());
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSessionMetadata(): array
=======
    public function getSessionMetadata()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getSessionMetadata()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['session_metadata']->getValue();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSessionAttributes(): array
=======
    public function getSessionAttributes()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getSessionAttributes()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['session_attributes']->getValue();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getStatelessCheck(): bool
=======
    public function getStatelessCheck()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStatelessCheck()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['stateless_check'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSessionUsages(): Data|array
=======
    public function getSessionUsages()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getSessionUsages()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['session_usages'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getFlashes(): array
=======
    public function getFlashes()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getFlashes()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['flashes']->getValue();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return string|resource
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getContent()
    {
        return $this->data['content'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return bool
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isJsonRequest()
    {
        return 1 === preg_match('{^application/(?:\w+\++)*json$}i', $this->data['request_headers']['content-type']);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return string|null
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getPrettyJson()
    {
        $decoded = json_decode($this->getContent());

        return \JSON_ERROR_NONE === json_last_error() ? json_encode($decoded, \JSON_PRETTY_PRINT) : null;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getContentType(): string
=======
    public function getContentType()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getContentType()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['content_type'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getStatusText(): string
=======
    public function getStatusText()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStatusText()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['status_text'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getStatusCode(): int
=======
    public function getStatusCode()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStatusCode()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['status_code'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getFormat(): string
=======
    public function getFormat()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getFormat()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['format'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getLocale(): string
=======
    public function getLocale()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getLocale()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['locale'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @return ParameterBag
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getDotenvVars()
    {
        return new ParameterBag($this->data['dotenv_vars']->getValue());
    }

    /**
     * Gets the route name.
     *
     * The _route request attributes is automatically set by the Router Matcher.
     */
    public function getRoute(): string
    {
        return $this->data['route'];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getIdentifier(): string
=======
    public function getIdentifier()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getIdentifier()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['identifier'];
    }

    /**
     * Gets the route parameters.
     *
     * The _route_params request attributes is automatically set by the RouterListener.
     */
    public function getRouteParams(): array
    {
        return isset($this->data['request_attributes']['_route_params']) ? $this->data['request_attributes']['_route_params']->getValue() : [];
    }

    /**
     * Gets the parsed controller.
     *
     * @return array|string|Data The controller as a string or array of data
     *                           with keys 'class', 'method', 'file' and 'line'
     */
    public function getController(): array|string|Data
    {
        return $this->data['controller'];
    }

    /**
     * Gets the previous request attributes.
     *
     * @return array|Data|false A legacy array of data from the previous redirection response
     *                          or false otherwise
     */
    public function getRedirect(): array|Data|false
    {
        return $this->data['redirect'] ?? false;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getForwardToken(): ?string
=======
    public function getForwardToken()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getForwardToken()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return $this->data['forward_token'] ?? null;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function onKernelController(ControllerEvent $event): void
=======
    public function onKernelController(ControllerEvent $event)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function onKernelController(ControllerEvent $event)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->controllers[$event->getRequest()] = $event->getController();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function onKernelResponse(ResponseEvent $event): void
=======
    public function onKernelResponse(ResponseEvent $event)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function onKernelResponse(ResponseEvent $event)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (!$event->isMainRequest()) {
            return;
        }

        if ($event->getRequest()->cookies->has('sf_redirect')) {
            $event->getRequest()->attributes->set('_redirected', true);
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
            KernelEvents::RESPONSE => 'onKernelResponse',
        ];
    }

    public function getName(): string
    {
        return 'request';
    }

    public function collectSessionUsage(): void
    {
        $trace = debug_backtrace(\DEBUG_BACKTRACE_IGNORE_ARGS);

        $traceEndIndex = \count($trace) - 1;
        for ($i = $traceEndIndex; $i > 0; --$i) {
            if (null !== ($class = $trace[$i]['class'] ?? null) && (is_subclass_of($class, SessionInterface::class) || is_subclass_of($class, SessionBagInterface::class))) {
                $traceEndIndex = $i;
                break;
            }
        }

        if ((\count($trace) - 1) === $traceEndIndex) {
            return;
        }

        // Remove part of the backtrace that belongs to session only
        array_splice($trace, 0, $traceEndIndex);

        // Merge identical backtraces generated by internal call reports
        $name = sprintf('%s:%s', $trace[1]['class'] ?? $trace[0]['file'], $trace[0]['line']);
        if (!\array_key_exists($name, $this->sessionUsages)) {
            $this->sessionUsages[$name] = [
                'name' => $name,
                'file' => $trace[0]['file'],
                'line' => $trace[0]['line'],
                'trace' => $trace,
            ];
        }
    }

    /**
     * @return array|string An array of controller data or a simple string
     */
    private function parseController(array|object|string|null $controller): array|string
    {
        if (\is_string($controller) && str_contains($controller, '::')) {
            $controller = explode('::', $controller);
        }

        if (\is_array($controller)) {
            try {
                $r = new \ReflectionMethod($controller[0], $controller[1]);

                return [
                    'class' => \is_object($controller[0]) ? get_debug_type($controller[0]) : $controller[0],
                    'method' => $controller[1],
                    'file' => $r->getFileName(),
                    'line' => $r->getStartLine(),
                ];
            } catch (\ReflectionException) {
                if (\is_callable($controller)) {
                    // using __call or  __callStatic
                    return [
                        'class' => \is_object($controller[0]) ? get_debug_type($controller[0]) : $controller[0],
                        'method' => $controller[1],
                        'file' => 'n/a',
                        'line' => 'n/a',
                    ];
                }
            }
        }

        if ($controller instanceof \Closure) {
            $r = new \ReflectionFunction($controller);

            $controller = [
                'class' => $r->getName(),
                'method' => null,
                'file' => $r->getFileName(),
                'line' => $r->getStartLine(),
            ];

<<<<<<< HEAD
<<<<<<< HEAD
            if (str_contains($r->name, '{closure')) {
=======
            if (str_contains($r->name, '{closure}')) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            if (str_contains($r->name, '{closure}')) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                return $controller;
            }
            $controller['method'] = $r->name;

            if ($class = \PHP_VERSION_ID >= 80111 ? $r->getClosureCalledClass() : $r->getClosureScopeClass()) {
                $controller['class'] = $class->name;
            } else {
                return $r->name;
            }

            return $controller;
        }

        if (\is_object($controller)) {
            $r = new \ReflectionClass($controller);

            return [
                'class' => $r->getName(),
                'method' => null,
                'file' => $r->getFileName(),
                'line' => $r->getStartLine(),
            ];
        }

        return \is_string($controller) ? $controller : 'n/a';
    }
}
