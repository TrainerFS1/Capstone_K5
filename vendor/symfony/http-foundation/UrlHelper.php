<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation;

use Symfony\Component\Routing\RequestContext;
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\Routing\RequestContextAwareInterface;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * A helper service for manipulating URLs within and outside the request scope.
 *
 * @author Valentin Udaltsov <udaltsov.valentin@gmail.com>
 */
final class UrlHelper
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        private RequestStack $requestStack,
        private RequestContextAwareInterface|RequestContext|null $requestContext = null,
    ) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private RequestStack $requestStack;
    private ?RequestContext $requestContext;

    public function __construct(RequestStack $requestStack, RequestContext $requestContext = null)
    {
        $this->requestStack = $requestStack;
        $this->requestContext = $requestContext;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getAbsoluteUrl(string $path): string
    {
        if (str_contains($path, '://') || str_starts_with($path, '//')) {
            return $path;
        }

        if (null === $request = $this->requestStack->getMainRequest()) {
            return $this->getAbsoluteUrlFromContext($path);
        }

        if ('#' === $path[0]) {
            $path = $request->getRequestUri().$path;
        } elseif ('?' === $path[0]) {
            $path = $request->getPathInfo().$path;
        }

        if (!$path || '/' !== $path[0]) {
            $prefix = $request->getPathInfo();
            $last = \strlen($prefix) - 1;
            if ($last !== $pos = strrpos($prefix, '/')) {
                $prefix = substr($prefix, 0, $pos).'/';
            }

            return $request->getUriForPath($prefix.$path);
        }

        return $request->getSchemeAndHttpHost().$path;
    }

    public function getRelativePath(string $path): string
    {
        if (str_contains($path, '://') || str_starts_with($path, '//')) {
            return $path;
        }

        if (null === $request = $this->requestStack->getMainRequest()) {
            return $path;
        }

        return $request->getRelativeUriForPath($path);
    }

    private function getAbsoluteUrlFromContext(string $path): string
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (null === $context = $this->requestContext) {
            return $path;
        }

        if ($context instanceof RequestContextAwareInterface) {
            $context = $context->getContext();
        }

        if ('' === $host = $context->getHost()) {
            return $path;
        }

        $scheme = $context->getScheme();
        $port = '';

        if ('http' === $scheme && 80 !== $context->getHttpPort()) {
            $port = ':'.$context->getHttpPort();
        } elseif ('https' === $scheme && 443 !== $context->getHttpsPort()) {
            $port = ':'.$context->getHttpsPort();
        }

        if ('#' === $path[0]) {
            $queryString = $context->getQueryString();
            $path = $context->getPathInfo().($queryString ? '?'.$queryString : '').$path;
        } elseif ('?' === $path[0]) {
            $path = $context->getPathInfo().$path;
        }

        if ('/' !== $path[0]) {
            $path = rtrim($context->getBaseUrl(), '/').'/'.$path;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (null === $this->requestContext || '' === $host = $this->requestContext->getHost()) {
            return $path;
        }

        $scheme = $this->requestContext->getScheme();
        $port = '';

        if ('http' === $scheme && 80 !== $this->requestContext->getHttpPort()) {
            $port = ':'.$this->requestContext->getHttpPort();
        } elseif ('https' === $scheme && 443 !== $this->requestContext->getHttpsPort()) {
            $port = ':'.$this->requestContext->getHttpsPort();
        }

        if ('#' === $path[0]) {
            $queryString = $this->requestContext->getQueryString();
            $path = $this->requestContext->getPathInfo().($queryString ? '?'.$queryString : '').$path;
        } elseif ('?' === $path[0]) {
            $path = $this->requestContext->getPathInfo().$path;
        }

        if ('/' !== $path[0]) {
            $path = rtrim($this->requestContext->getBaseUrl(), '/').'/'.$path;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $scheme.'://'.$host.$port.$path;
    }
}
