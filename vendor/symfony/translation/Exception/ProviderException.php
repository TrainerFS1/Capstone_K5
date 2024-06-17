<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Exception;

use Symfony\Contracts\HttpClient\ResponseInterface;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ProviderException extends RuntimeException implements ProviderExceptionInterface
{
    private ResponseInterface $response;
    private string $debug;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(string $message, ResponseInterface $response, int $code = 0, ?\Exception $previous = null)
=======
    public function __construct(string $message, ResponseInterface $response, int $code = 0, \Exception $previous = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(string $message, ResponseInterface $response, int $code = 0, \Exception $previous = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->response = $response;
        $this->debug = $response->getInfo('debug') ?? '';

        parent::__construct($message, $code, $previous);
    }

    public function getResponse(): ResponseInterface
    {
        return $this->response;
    }

    public function getDebug(): string
    {
        return $this->debug;
    }
}
