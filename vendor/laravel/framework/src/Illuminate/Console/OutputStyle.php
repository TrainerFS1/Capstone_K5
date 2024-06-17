<?php

namespace Illuminate\Console;

use Illuminate\Console\Contracts\NewLineAware;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\Console\Question\Question;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Symfony\Component\Console\Style\SymfonyStyle;

class OutputStyle extends SymfonyStyle implements NewLineAware
{
    /**
     * The output instance.
     *
     * @var \Symfony\Component\Console\Output\OutputInterface
     */
    private $output;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * The number of trailing new lines written by the last output.
     *
     * This is initialized as 1 to account for the new line written by the shell after executing a command.
     *
     * @var int
     */
    protected $newLinesWritten = 1;

    /**
     * If the last output written wrote a new line.
     *
     * @var bool
     *
     * @deprecated use $newLinesWritten
=======
     * If the last output written wrote a new line.
     *
     * @var bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * If the last output written wrote a new line.
     *
     * @var bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected $newLineWritten = false;

    /**
     * Create a new Console OutputStyle instance.
     *
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  \Symfony\Component\Console\Output\OutputInterface  $output
     * @return void
     */
    public function __construct(InputInterface $input, OutputInterface $output)
    {
        $this->output = $output;

        parent::__construct($input, $output);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function askQuestion(Question $question): mixed
    {
        try {
            return parent::askQuestion($question);
        } finally {
            $this->newLinesWritten++;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function write(string|iterable $messages, bool $newline = false, int $options = 0)
    {
        $this->newLinesWritten = $this->trailingNewLineCount($messages) + (int) $newline;
        $this->newLineWritten = $this->newLinesWritten > 0;
=======
    public function write(string|iterable $messages, bool $newline = false, int $options = 0)
    {
        $this->newLineWritten = $newline;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function write(string|iterable $messages, bool $newline = false, int $options = 0)
    {
        $this->newLineWritten = $newline;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        parent::write($messages, $newline, $options);
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    public function writeln(string|iterable $messages, int $type = self::OUTPUT_NORMAL)
    {
        $this->newLinesWritten = $this->trailingNewLineCount($messages) + 1;
=======
     */
    public function writeln(string|iterable $messages, int $type = self::OUTPUT_NORMAL)
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     */
    public function writeln(string|iterable $messages, int $type = self::OUTPUT_NORMAL)
    {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->newLineWritten = true;

        parent::writeln($messages, $type);
    }

    /**
     * {@inheritdoc}
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @return void
     */
    public function newLine(int $count = 1)
    {
        $this->newLinesWritten += $count;
        $this->newLineWritten = $this->newLinesWritten > 0;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function newLine(int $count = 1)
    {
        $this->newLineWritten = $count > 0;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        parent::newLine($count);
    }

    /**
     * {@inheritdoc}
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function newLinesWritten()
    {
        if ($this->output instanceof static) {
            return $this->output->newLinesWritten();
        }

        return $this->newLinesWritten;
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated use newLinesWritten
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function newLineWritten()
    {
        if ($this->output instanceof static && $this->output->newLineWritten()) {
            return true;
        }

        return $this->newLineWritten;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /*
     * Count the number of trailing new lines in a string.
     *
     * @param  string|iterable  $messages
     * @return int
     */
    protected function trailingNewLineCount($messages)
    {
        if (is_iterable($messages)) {
            $string = '';

            foreach ($messages as $message) {
                $string .= $message.PHP_EOL;
            }
        } else {
            $string = $messages;
        }

        return strlen($string) - strlen(rtrim($string, PHP_EOL));
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    /**
     * Returns whether verbosity is quiet (-q).
     *
     * @return bool
     */
    public function isQuiet(): bool
    {
        return $this->output->isQuiet();
    }

    /**
     * Returns whether verbosity is verbose (-v).
     *
     * @return bool
     */
    public function isVerbose(): bool
    {
        return $this->output->isVerbose();
    }

    /**
     * Returns whether verbosity is very verbose (-vv).
     *
     * @return bool
     */
    public function isVeryVerbose(): bool
    {
        return $this->output->isVeryVerbose();
    }

    /**
     * Returns whether verbosity is debug (-vvv).
     *
     * @return bool
     */
    public function isDebug(): bool
    {
        return $this->output->isDebug();
    }

    /**
     * Get the underlying Symfony output implementation.
     *
     * @return \Symfony\Component\Console\Output\OutputInterface
     */
    public function getOutput()
    {
        return $this->output;
    }
}
