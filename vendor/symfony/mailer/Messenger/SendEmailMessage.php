<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Messenger;

use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mime\RawMessage;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SendEmailMessage
{
    private RawMessage $message;
    private ?Envelope $envelope;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(RawMessage $message, ?Envelope $envelope = null)
=======
    public function __construct(RawMessage $message, Envelope $envelope = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(RawMessage $message, Envelope $envelope = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->message = $message;
        $this->envelope = $envelope;
    }

    public function getMessage(): RawMessage
    {
        return $this->message;
    }

    public function getEnvelope(): ?Envelope
    {
        return $this->envelope;
    }
}
