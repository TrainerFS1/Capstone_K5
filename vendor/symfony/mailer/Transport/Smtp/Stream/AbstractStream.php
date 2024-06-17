<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Transport\Smtp\Stream;

use Symfony\Component\Mailer\Exception\TransportException;

/**
 * A stream supporting remote sockets and local processes.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Nicolas Grekas <p@tchwork.com>
 * @author Chris Corbyn
 *
 * @internal
 */
abstract class AbstractStream
{
<<<<<<< HEAD
<<<<<<< HEAD
    /** @var resource|null */
    protected $stream;
    /** @var resource|null */
    protected $in;
    /** @var resource|null */
    protected $out;
    protected $err;
=======
    protected $stream;
    protected $in;
    protected $out;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    protected $stream;
    protected $in;
    protected $out;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    private string $debug = '';

    public function write(string $bytes, bool $debug = true): void
    {
        if ($debug) {
            foreach (explode("\n", trim($bytes)) as $line) {
                $this->debug .= sprintf("> %s\n", $line);
            }
        }

        $bytesToWrite = \strlen($bytes);
        $totalBytesWritten = 0;
        while ($totalBytesWritten < $bytesToWrite) {
            $bytesWritten = @fwrite($this->in, substr($bytes, $totalBytesWritten));
            if (false === $bytesWritten || 0 === $bytesWritten) {
                throw new TransportException('Unable to write bytes on the wire.');
            }

            $totalBytesWritten += $bytesWritten;
        }
    }

    /**
     * Flushes the contents of the stream (empty it) and set the internal pointer to the beginning.
     */
    public function flush(): void
    {
        fflush($this->in);
    }

    /**
     * Performs any initialization needed.
     */
    abstract public function initialize(): void;

    public function terminate(): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->stream = $this->err = $this->out = $this->in = null;
=======
        $this->stream = $this->out = $this->in = null;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->stream = $this->out = $this->in = null;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function readLine(): string
    {
        if (feof($this->out)) {
            return '';
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $line = @fgets($this->out);
=======
        $line = fgets($this->out);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $line = fgets($this->out);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ('' === $line || false === $line) {
            $metas = stream_get_meta_data($this->out);
            if ($metas['timed_out']) {
                throw new TransportException(sprintf('Connection to "%s" timed out.', $this->getReadConnectionDescription()));
            }
            if ($metas['eof']) {
                throw new TransportException(sprintf('Connection to "%s" has been closed unexpectedly.', $this->getReadConnectionDescription()));
            }
<<<<<<< HEAD
<<<<<<< HEAD
            if (false === $line) {
                throw new TransportException(sprintf('Unable to read from connection to "%s": ', $this->getReadConnectionDescription()).error_get_last()['message']);
            }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        $this->debug .= sprintf('< %s', $line);

        return $line;
    }

    public function getDebug(): string
    {
        $debug = $this->debug;
        $this->debug = '';

        return $debug;
    }

    public static function replace(string $from, string $to, iterable $chunks): \Generator
    {
        if ('' === $from) {
            yield from $chunks;

            return;
        }

        $carry = '';
        $fromLen = \strlen($from);

        foreach ($chunks as $chunk) {
            if ('' === $chunk = $carry.$chunk) {
                continue;
            }

            if (str_contains($chunk, $from)) {
                $chunk = explode($from, $chunk);
                $carry = array_pop($chunk);

                yield implode($to, $chunk).$to;
            } else {
                $carry = $chunk;
            }

            if (\strlen($carry) > $fromLen) {
                yield substr($carry, 0, -$fromLen);
                $carry = substr($carry, -$fromLen);
            }
        }

        if ('' !== $carry) {
            yield $carry;
        }
    }

    abstract protected function getReadConnectionDescription(): string;
}
