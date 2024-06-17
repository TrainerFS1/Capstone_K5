<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime;

use Symfony\Component\Mime\Header\Headers;
use Symfony\Component\Mime\Part\AbstractPart;

/**
 * @author Kevin Bond <kevinbond@gmail.com>
 */
class DraftEmail extends Email
{
<<<<<<< HEAD
    public function __construct(?Headers $headers = null, ?AbstractPart $body = null)
=======
    public function __construct(Headers $headers = null, AbstractPart $body = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        parent::__construct($headers, $body);

        $this->getHeaders()->addTextHeader('X-Unsent', '1');
    }

    /**
     * Override default behavior as draft emails do not require From/Sender/Date/Message-ID headers.
     * These are added by the client that actually sends the email.
     */
    public function getPreparedHeaders(): Headers
    {
        $headers = clone $this->getHeaders();

        if (!$headers->has('MIME-Version')) {
            $headers->addTextHeader('MIME-Version', '1.0');
        }

        $headers->remove('Bcc');

        return $headers;
    }
}
