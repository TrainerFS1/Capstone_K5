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
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;

/**
 * Adds configured formats to each request.
 *
 * @author Gildas Quemener <gildas.quemener@gmail.com>
 *
 * @final
 */
class AddRequestFormatsListener implements EventSubscriberInterface
{
    private array $formats;

    public function __construct(array $formats)
    {
        $this->formats = $formats;
    }

    /**
     * Adds request formats.
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function onKernelRequest(RequestEvent $event): void
=======
    public function onKernelRequest(RequestEvent $event)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function onKernelRequest(RequestEvent $event)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $request = $event->getRequest();
        foreach ($this->formats as $format => $mimeTypes) {
            $request->setFormat($format, $mimeTypes);
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [KernelEvents::REQUEST => ['onKernelRequest', 100]];
    }
}
