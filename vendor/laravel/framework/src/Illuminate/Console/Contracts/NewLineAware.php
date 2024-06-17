<?php

namespace Illuminate\Console\Contracts;

interface NewLineAware
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * How many trailing newlines were written.
     *
     * @return int
     */
    public function newLinesWritten();

    /**
     * Whether a newline has already been written.
     *
     * @return bool
     *
     * @deprecated use newLinesWritten
=======
     * Whether a newline has already been written.
     *
     * @return bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * Whether a newline has already been written.
     *
     * @return bool
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function newLineWritten();
}
