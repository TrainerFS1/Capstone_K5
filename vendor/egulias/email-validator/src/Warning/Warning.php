<?php

namespace Egulias\EmailValidator\Warning;

abstract class Warning
{
    /**
     * @var int CODE
     */
    public const CODE = 0;

    /**
     * @var string
     */
    protected $message = '';

    /**
     * @var int
     */
    protected $rfcNumber = 0;

    /**
     * @return string
     */
    public function message()
    {
        return $this->message;
    }

    /**
     * @return int
     */
    public function code()
    {
        return self::CODE;
    }

    /**
     * @return int
     */
    public function RFCNumber()
    {
        return $this->rfcNumber;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
<<<<<<< HEAD
        return $this->message() . " rfc: " .  $this->rfcNumber . "internal code: " . static::CODE;
=======
        return $this->message() . " rfc: " .  $this->rfcNumber . "internal code: " . strval(static::CODE);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
