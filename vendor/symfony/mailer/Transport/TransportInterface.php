<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Transport;

use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mime\RawMessage;

/**
 * Interface for all mailer transports.
 *
 * When sending emails, you should prefer MailerInterface implementations
 * as they allow asynchronous sending.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
<<<<<<< HEAD
interface TransportInterface extends \Stringable
=======
interface TransportInterface
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    /**
     * @throws TransportExceptionInterface
     */
<<<<<<< HEAD
    public function send(RawMessage $message, ?Envelope $envelope = null): ?SentMessage;
=======
    public function send(RawMessage $message, Envelope $envelope = null): ?SentMessage;

    public function __toString(): string;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
