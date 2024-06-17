<?php

namespace Illuminate\Http\Client;

<<<<<<< HEAD
<<<<<<< HEAD
use GuzzleHttp\Psr7\Message;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class RequestException extends HttpClientException
{
    /**
     * The response instance.
     *
     * @var \Illuminate\Http\Client\Response
     */
    public $response;

    /**
     * Create a new exception instance.
     *
     * @param  \Illuminate\Http\Client\Response  $response
     * @return void
     */
    public function __construct(Response $response)
    {
        parent::__construct($this->prepareMessage($response), $response->status());

        $this->response = $response;
    }

    /**
     * Prepare the exception message.
     *
     * @param  \Illuminate\Http\Client\Response  $response
     * @return string
     */
    protected function prepareMessage(Response $response)
    {
        $message = "HTTP request returned status code {$response->status()}";

<<<<<<< HEAD
<<<<<<< HEAD
        $summary = Message::bodySummary($response->toPsrResponse());
=======
        $summary = class_exists(\GuzzleHttp\Psr7\Message::class)
            ? \GuzzleHttp\Psr7\Message::bodySummary($response->toPsrResponse())
            : \GuzzleHttp\Psr7\get_message_body_summary($response->toPsrResponse());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $summary = class_exists(\GuzzleHttp\Psr7\Message::class)
            ? \GuzzleHttp\Psr7\Message::bodySummary($response->toPsrResponse())
            : \GuzzleHttp\Psr7\get_message_body_summary($response->toPsrResponse());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return is_null($summary) ? $message : $message .= ":\n{$summary}\n";
    }
}
