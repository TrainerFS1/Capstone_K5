<?php

namespace Spatie\Backtrace;

<<<<<<< HEAD
<<<<<<< HEAD
use Spatie\Backtrace\CodeSnippets\CodeSnippet;
use Spatie\Backtrace\CodeSnippets\FileSnippetProvider;
use Spatie\Backtrace\CodeSnippets\LaravelSerializableClosureSnippetProvider;
use Spatie\Backtrace\CodeSnippets\NullSnippetProvider;
use Spatie\Backtrace\CodeSnippets\SnippetProvider;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Frame
{
    /** @var string */
    public $file;

    /** @var int */
    public $lineNumber;

    /** @var array|null */
    public $arguments = null;

    /** @var bool */
    public $applicationFrame;

    /** @var string|null */
    public $method;

    /** @var string|null */
    public $class;

<<<<<<< HEAD
<<<<<<< HEAD
    /** @var string|null */
    protected $textSnippet;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct(
        string $file,
        int $lineNumber,
        ?array $arguments,
        string $method = null,
        string $class = null,
<<<<<<< HEAD
<<<<<<< HEAD
        bool $isApplicationFrame = false,
        ?string $textSnippet = null
=======
        bool $isApplicationFrame = false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        bool $isApplicationFrame = false
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    ) {
        $this->file = $file;

        $this->lineNumber = $lineNumber;

        $this->arguments = $arguments;

        $this->method = $method;

        $this->class = $class;

        $this->applicationFrame = $isApplicationFrame;
<<<<<<< HEAD
<<<<<<< HEAD

        $this->textSnippet = $textSnippet;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getSnippet(int $lineCount): array
    {
        return (new CodeSnippet())
            ->surroundingLine($this->lineNumber)
            ->snippetLineCount($lineCount)
<<<<<<< HEAD
<<<<<<< HEAD
            ->get($this->getCodeSnippetProvider());
    }

    public function getSnippetAsString(int $lineCount): string
    {
        return (new CodeSnippet())
            ->surroundingLine($this->lineNumber)
            ->snippetLineCount($lineCount)
            ->getAsString($this->getCodeSnippetProvider());
=======
            ->get($this->file);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            ->get($this->file);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function getSnippetProperties(int $lineCount): array
    {
        $snippet = $this->getSnippet($lineCount);

        return array_map(function (int $lineNumber) use ($snippet) {
            return [
                'line_number' => $lineNumber,
                'text' => $snippet[$lineNumber],
            ];
        }, array_keys($snippet));
    }
<<<<<<< HEAD
<<<<<<< HEAD

    protected function getCodeSnippetProvider(): SnippetProvider
    {
        if($this->textSnippet) {
            return new LaravelSerializableClosureSnippetProvider($this->textSnippet);
        }

        if(file_exists($this->file)) {
            return new FileSnippetProvider($this->file);
        }

        return new NullSnippetProvider();
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
