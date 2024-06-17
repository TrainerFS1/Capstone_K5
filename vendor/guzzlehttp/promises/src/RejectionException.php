<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
namespace GuzzleHttp\Promise;

/**
 * A special exception that is thrown when waiting on a rejected promise.
 *
 * The reason value is available via the getReason() method.
 */
class RejectionException extends \RuntimeException
{
    /** @var mixed Rejection reason. */
    private $reason;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param mixed       $reason      Rejection reason.
     * @param string|null $description Optional description.
     */
    public function __construct($reason, string $description = null)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param mixed  $reason      Rejection reason.
     * @param string $description Optional description
     */
    public function __construct($reason, $description = null)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->reason = $reason;

        $message = 'The promise was rejected';

        if ($description) {
<<<<<<< HEAD
<<<<<<< HEAD
            $message .= ' with reason: '.$description;
        } elseif (is_string($reason)
            || (is_object($reason) && method_exists($reason, '__toString'))
        ) {
            $message .= ' with reason: '.$this->reason;
        } elseif ($reason instanceof \JsonSerializable) {
            $message .= ' with reason: '.json_encode($this->reason, JSON_PRETTY_PRINT);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $message .= ' with reason: ' . $description;
        } elseif (is_string($reason)
            || (is_object($reason) && method_exists($reason, '__toString'))
        ) {
            $message .= ' with reason: ' . $this->reason;
        } elseif ($reason instanceof \JsonSerializable) {
            $message .= ' with reason: '
                . json_encode($this->reason, JSON_PRETTY_PRINT);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        parent::__construct($message);
    }

    /**
     * Returns the rejection reason.
     *
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }
}
