<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Event;

use Symfony\Component\HttpFoundation\Response;

/**
 * Allows to create a response for a request.
 *
 * Call setResponse() to set the response that will be returned for the
 * current request. The propagation of this event is stopped as soon as a
 * response is set.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class RequestEvent extends KernelEvent
{
    private ?Response $response = null;

    /**
     * Returns the response object.
     */
    public function getResponse(): ?Response
    {
        return $this->response;
    }

    /**
     * Sets a response and stops event propagation.
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function setResponse(Response $response)
    {
        $this->response = $response;

        $this->stopPropagation();
    }

    /**
     * Returns whether a response was set.
     */
    public function hasResponse(): bool
    {
        return null !== $this->response;
    }
}
