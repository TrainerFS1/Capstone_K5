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

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\FinishRequestEvent;
use Symfony\Component\HttpKernel\Event\KernelEvent;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Routing\RequestContextAwareInterface;

/**
 * Initializes the locale based on the current request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @final
 */
class LocaleListener implements EventSubscriberInterface
{
    private ?RequestContextAwareInterface $router;
    private string $defaultLocale;
    private RequestStack $requestStack;
    private bool $useAcceptLanguageHeader;
    private array $enabledLocales;

<<<<<<< HEAD
    public function __construct(RequestStack $requestStack, string $defaultLocale = 'en', ?RequestContextAwareInterface $router = null, bool $useAcceptLanguageHeader = false, array $enabledLocales = [])
=======
    public function __construct(RequestStack $requestStack, string $defaultLocale = 'en', RequestContextAwareInterface $router = null, bool $useAcceptLanguageHeader = false, array $enabledLocales = [])
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->defaultLocale = $defaultLocale;
        $this->requestStack = $requestStack;
        $this->router = $router;
        $this->useAcceptLanguageHeader = $useAcceptLanguageHeader;
        $this->enabledLocales = $enabledLocales;
    }

<<<<<<< HEAD
    public function setDefaultLocale(KernelEvent $event): void
=======
    public function setDefaultLocale(KernelEvent $event)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $event->getRequest()->setDefaultLocale($this->defaultLocale);
    }

<<<<<<< HEAD
    public function onKernelRequest(RequestEvent $event): void
=======
    public function onKernelRequest(RequestEvent $event)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $request = $event->getRequest();

        $this->setLocale($request);
        $this->setRouterContext($request);
    }

<<<<<<< HEAD
    public function onKernelFinishRequest(FinishRequestEvent $event): void
=======
    public function onKernelFinishRequest(FinishRequestEvent $event)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (null !== $parentRequest = $this->requestStack->getParentRequest()) {
            $this->setRouterContext($parentRequest);
        }
    }

<<<<<<< HEAD
    private function setLocale(Request $request): void
=======
    private function setLocale(Request $request)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if ($locale = $request->attributes->get('_locale')) {
            $request->setLocale($locale);
        } elseif ($this->useAcceptLanguageHeader) {
<<<<<<< HEAD
            if ($request->getLanguages() && $preferredLanguage = $request->getPreferredLanguage($this->enabledLocales)) {
=======
            if ($preferredLanguage = $request->getPreferredLanguage($this->enabledLocales)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                $request->setLocale($preferredLanguage);
            }
            $request->attributes->set('_vary_by_language', true);
        }
    }

<<<<<<< HEAD
    private function setRouterContext(Request $request): void
=======
    private function setRouterContext(Request $request)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->router?->getContext()->setParameter('_locale', $request->getLocale());
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => [
                ['setDefaultLocale', 100],
                // must be registered after the Router to have access to the _locale
                ['onKernelRequest', 16],
            ],
            KernelEvents::FINISH_REQUEST => [['onKernelFinishRequest', 0]],
        ];
    }
}
