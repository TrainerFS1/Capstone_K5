<?php

namespace Spatie\FlareClient;

use Spatie\Backtrace\Frame as SpatieFrame;

class Frame
{
<<<<<<< HEAD
    public static function fromSpatieFrame(
        SpatieFrame $frame,
    ): self {
        return new self($frame);
    }

    public function __construct(
        protected SpatieFrame $frame,
    ) {
=======
    protected SpatieFrame $frame;

    public static function fromSpatieFrame(SpatieFrame $frame): self
    {
        return new self($frame);
    }

    public function __construct(SpatieFrame $frame)
    {
        $this->frame = $frame;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    public function toArray(): array
    {
        return [
            'file' => $this->frame->file,
            'line_number' => $this->frame->lineNumber,
            'method' => $this->frame->method,
            'class' => $this->frame->class,
            'code_snippet' => $this->frame->getSnippet(30),
<<<<<<< HEAD
            'arguments' => $this->frame->arguments,
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'application_frame' => $this->frame->applicationFrame,
        ];
    }
}
