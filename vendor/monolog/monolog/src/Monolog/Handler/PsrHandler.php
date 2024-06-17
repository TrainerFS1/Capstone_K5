<?php declare(strict_types=1);

/*
 * This file is part of the Monolog package.
 *
 * (c) Jordi Boggiano <j.boggiano@seld.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Monolog\Handler;

use Monolog\Level;
use Psr\Log\LoggerInterface;
use Monolog\Formatter\FormatterInterface;
use Monolog\LogRecord;

/**
 * Proxies log messages to an existing PSR-3 compliant logger.
 *
 * If a formatter is configured, the formatter's output MUST be a string and the
 * formatted message will be fed to the wrapped PSR logger instead of the original
 * log record's message.
 *
 * @author Michael Moussa <michael.moussa@gmail.com>
 */
class PsrHandler extends AbstractHandler implements FormattableHandlerInterface
{
    /**
     * PSR-3 compliant logger
     */
    protected LoggerInterface $logger;

    protected FormatterInterface|null $formatter = null;
<<<<<<< HEAD
<<<<<<< HEAD
    private bool $includeExtra;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * @param LoggerInterface $logger The underlying PSR-3 compliant logger to which messages will be proxied
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(LoggerInterface $logger, int|string|Level $level = Level::Debug, bool $bubble = true, bool $includeExtra = false)
=======
    public function __construct(LoggerInterface $logger, int|string|Level $level = Level::Debug, bool $bubble = true)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(LoggerInterface $logger, int|string|Level $level = Level::Debug, bool $bubble = true)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        parent::__construct($level, $bubble);

        $this->logger = $logger;
<<<<<<< HEAD
<<<<<<< HEAD
        $this->includeExtra = $includeExtra;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @inheritDoc
     */
    public function handle(LogRecord $record): bool
    {
        if (!$this->isHandling($record)) {
            return false;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $message = $this->formatter !== null
            ? (string) $this->formatter->format($record)
            : $record->message;

        $context = $this->includeExtra
            ? [...$record->extra, ...$record->context]
            : $record->context;

        $this->logger->log($record->level->toPsrLogLevel(), $message, $context);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($this->formatter !== null) {
            $formatted = $this->formatter->format($record);
            $this->logger->log($record->level->toPsrLogLevel(), (string) $formatted, $record->context);
        } else {
            $this->logger->log($record->level->toPsrLogLevel(), $record->message, $record->context);
        }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return false === $this->bubble;
    }

    /**
     * Sets the formatter.
     */
    public function setFormatter(FormatterInterface $formatter): HandlerInterface
    {
        $this->formatter = $formatter;

        return $this;
    }

    /**
     * Gets the formatter.
     */
    public function getFormatter(): FormatterInterface
    {
        if ($this->formatter === null) {
            throw new \LogicException('No formatter has been set and this handler does not have a default formatter');
        }

        return $this->formatter;
    }
}
