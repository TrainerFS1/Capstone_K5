<?php

namespace Illuminate\Queue;

use InvalidArgumentException;

class InvalidPayloadException extends InvalidArgumentException
{
    /**
<<<<<<< HEAD
     * The value that failed to decode.
     *
     * @var mixed
     */
    public $value;

    /**
     * Create a new exception instance.
     *
     * @param  string|null  $message
     * @param  mixed  $value
     * @return void
     */
    public function __construct($message = null, $value = null)
    {
        parent::__construct($message ?: json_last_error());

        $this->value = $value;
=======
     * Create a new exception instance.
     *
     * @param  string|null  $message
     * @return void
     */
    public function __construct($message = null)
    {
        parent::__construct($message ?: json_last_error());
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
