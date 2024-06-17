<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\Mailer\Event\MessageEvents;
use Symfony\Component\Mailer\EventListener\MessageLoggerListener;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class MessageDataCollector extends DataCollector
{
    private MessageEvents $events;

    public function __construct(MessageLoggerListener $logger)
    {
        $this->events = $logger->getEvents();
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
        $this->data['events'] = $this->events;
    }

    public function getEvents(): MessageEvents
    {
        return $this->data['events'];
    }

    /**
     * @internal
     */
    public function base64Encode(string $data): string
    {
        return base64_encode($data);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function reset(): void
=======
    public function reset()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function reset()
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->data = [];
    }

    public function getName(): string
    {
        return 'mailer';
    }
}
