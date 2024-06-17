<?php

declare(strict_types=1);

namespace NunoMaduro\Collision;

use Symfony\Component\Console\Output\OutputInterface;
use Whoops\Handler\Handler as AbstractHandler;

/**
 * @internal
 *
 * @see \Tests\Unit\HandlerTest
 */
final class Handler extends AbstractHandler
{
    /**
     * Holds an instance of the writer.
     */
    private Writer $writer;

    /**
     * Creates an instance of the Handler.
     */
    public function __construct(Writer $writer = null)
    {
        $this->writer = $writer ?: new Writer();
    }

    /**
     * {@inheritdoc}
     */
    public function handle(): int
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->writer->write($this->getInspector()); // @phpstan-ignore-line
=======
        $this->writer->write($this->getInspector());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->writer->write($this->getInspector());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return self::QUIT;
    }

    /**
     * {@inheritdoc}
     */
    public function setOutput(OutputInterface $output): self
    {
        $this->writer->setOutput($output);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getWriter(): Writer
    {
        return $this->writer;
    }
}
