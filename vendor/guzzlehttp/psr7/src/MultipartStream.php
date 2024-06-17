<?php

declare(strict_types=1);

namespace GuzzleHttp\Psr7;

use Psr\Http\Message\StreamInterface;

/**
 * Stream that when read returns bytes for a streaming multipart or
 * multipart/form-data stream.
 */
final class MultipartStream implements StreamInterface
{
    use StreamDecoratorTrait;

    /** @var string */
    private $boundary;

    /** @var StreamInterface */
    private $stream;

    /**
     * @param array  $elements Array of associative arrays, each containing a
     *                         required "name" key mapping to the form field,
     *                         name, a required "contents" key mapping to a
     *                         StreamInterface/resource/string, an optional
     *                         "headers" associative array of custom headers,
     *                         and an optional "filename" key mapping to a
     *                         string to send as the filename in the part.
     * @param string $boundary You can optionally provide a specific boundary
     *
     * @throws \InvalidArgumentException
     */
    public function __construct(array $elements = [], string $boundary = null)
    {
        $this->boundary = $boundary ?: bin2hex(random_bytes(20));
        $this->stream = $this->createStream($elements);
    }

    public function getBoundary(): string
    {
        return $this->boundary;
    }

    public function isWritable(): bool
    {
        return false;
    }

    /**
     * Get the headers needed before transferring the content of a POST file
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string[] $headers
=======
     * @param array<string, string> $headers
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param array<string, string> $headers
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    private function getHeaders(array $headers): string
    {
        $str = '';
        foreach ($headers as $key => $value) {
            $str .= "{$key}: {$value}\r\n";
        }

<<<<<<< HEAD
<<<<<<< HEAD
        return "--{$this->boundary}\r\n".trim($str)."\r\n\r\n";
=======
        return "--{$this->boundary}\r\n" . trim($str) . "\r\n\r\n";
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return "--{$this->boundary}\r\n" . trim($str) . "\r\n\r\n";
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Create the aggregate stream that will be used to upload the POST data
     */
    protected function createStream(array $elements = []): StreamInterface
    {
        $stream = new AppendStream();

        foreach ($elements as $element) {
            if (!is_array($element)) {
<<<<<<< HEAD
<<<<<<< HEAD
                throw new \UnexpectedValueException('An array is expected');
=======
                throw new \UnexpectedValueException("An array is expected");
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                throw new \UnexpectedValueException("An array is expected");
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
            $this->addElement($stream, $element);
        }

        // Add the trailing boundary with CRLF
        $stream->addStream(Utils::streamFor("--{$this->boundary}--\r\n"));

        return $stream;
    }

    private function addElement(AppendStream $stream, array $element): void
    {
        foreach (['contents', 'name'] as $key) {
            if (!array_key_exists($key, $element)) {
                throw new \InvalidArgumentException("A '{$key}' key is required");
            }
        }

        $element['contents'] = Utils::streamFor($element['contents']);

        if (empty($element['filename'])) {
            $uri = $element['contents']->getMetadata('uri');
            if ($uri && \is_string($uri) && \substr($uri, 0, 6) !== 'php://' && \substr($uri, 0, 7) !== 'data://') {
                $element['filename'] = $uri;
            }
        }

        [$body, $headers] = $this->createElement(
            $element['name'],
            $element['contents'],
            $element['filename'] ?? null,
            $element['headers'] ?? []
        );

        $stream->addStream(Utils::streamFor($this->getHeaders($headers)));
        $stream->addStream($body);
        $stream->addStream(Utils::streamFor("\r\n"));
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param string[] $headers
     *
     * @return array{0: StreamInterface, 1: string[]}
     */
    private function createElement(string $name, StreamInterface $stream, ?string $filename, array $headers): array
    {
        // Set a default content-disposition header if one was no provided
        $disposition = self::getHeader($headers, 'content-disposition');
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function createElement(string $name, StreamInterface $stream, ?string $filename, array $headers): array
    {
        // Set a default content-disposition header if one was no provided
        $disposition = $this->getHeader($headers, 'content-disposition');
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!$disposition) {
            $headers['Content-Disposition'] = ($filename === '0' || $filename)
                ? sprintf(
                    'form-data; name="%s"; filename="%s"',
                    $name,
                    basename($filename)
                )
                : "form-data; name=\"{$name}\"";
        }

        // Set a default content-length header if one was no provided
<<<<<<< HEAD
<<<<<<< HEAD
        $length = self::getHeader($headers, 'content-length');
=======
        $length = $this->getHeader($headers, 'content-length');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $length = $this->getHeader($headers, 'content-length');
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!$length) {
            if ($length = $stream->getSize()) {
                $headers['Content-Length'] = (string) $length;
            }
        }

        // Set a default Content-Type if one was not supplied
<<<<<<< HEAD
<<<<<<< HEAD
        $type = self::getHeader($headers, 'content-type');
        if (!$type && ($filename === '0' || $filename)) {
            $headers['Content-Type'] = MimeType::fromFilename($filename) ?? 'application/octet-stream';
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $type = $this->getHeader($headers, 'content-type');
        if (!$type && ($filename === '0' || $filename)) {
            if ($type = MimeType::fromFilename($filename)) {
                $headers['Content-Type'] = $type;
            }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return [$stream, $headers];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @param string[] $headers
     */
    private static function getHeader(array $headers, string $key): ?string
    {
        $lowercaseHeader = strtolower($key);
        foreach ($headers as $k => $v) {
            if (strtolower((string) $k) === $lowercaseHeader) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function getHeader(array $headers, string $key)
    {
        $lowercaseHeader = strtolower($key);
        foreach ($headers as $k => $v) {
            if (strtolower($k) === $lowercaseHeader) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                return $v;
            }
        }

        return null;
    }
}
