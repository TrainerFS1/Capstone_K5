<?php

namespace Illuminate\Mail\Transport;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Str;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Component\Mime\RawMessage;

class LogTransport implements TransportInterface
{
    /**
     * The Logger instance.
     *
     * @var \Psr\Log\LoggerInterface
     */
    protected $logger;

    /**
     * Create a new log transport instance.
     *
     * @param  \Psr\Log\LoggerInterface  $logger
     * @return void
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * {@inheritdoc}
     */
    public function send(RawMessage $message, Envelope $envelope = null): ?SentMessage
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $string = Str::of($message->toString());

        if ($string->contains('Content-Type: multipart/')) {
            $boundary = $string
                ->after('boundary=')
                ->before("\r\n")
                ->prepend('--')
                ->append("\r\n");

            $string = $string
                ->explode($boundary)
                ->map($this->decodeQuotedPrintableContent(...))
                ->implode($boundary);
        } elseif ($string->contains('Content-Transfer-Encoding: quoted-printable')) {
            $string = $this->decodeQuotedPrintableContent($string);
        }

        $this->logger->debug((string) $string);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $string = $message->toString();

        if (str_contains($string, 'Content-Transfer-Encoding: quoted-printable')) {
            $string = quoted_printable_decode($string);
        }

        $this->logger->debug($string);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return new SentMessage($message, $envelope ?? Envelope::create($message));
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Decode the given quoted printable content.
     *
     * @param  string  $part
     * @return string
     */
    protected function decodeQuotedPrintableContent(string $part)
    {
        if (! str_contains($part, 'Content-Transfer-Encoding: quoted-printable')) {
            return $part;
        }

        [$headers, $content] = explode("\r\n\r\n", $part, 2);

        return implode("\r\n\r\n", [
            $headers,
            quoted_printable_decode($content),
        ]);
    }

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Get the logger for the LogTransport instance.
     *
     * @return \Psr\Log\LoggerInterface
     */
    public function logger()
    {
        return $this->logger;
    }

    /**
     * Get the string representation of the transport.
     *
     * @return string
     */
    public function __toString(): string
    {
        return 'log';
    }
}
