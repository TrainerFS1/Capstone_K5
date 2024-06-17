<?php

namespace Illuminate\Mail\Events;

use Exception;
use Illuminate\Mail\SentMessage;

/**
 * @property \Symfony\Component\Mime\Email $message
 */
class MessageSent
{
    /**
     * The message that was sent.
     *
     * @var \Illuminate\Mail\SentMessage
     */
    public $sent;

    /**
     * The message data.
     *
     * @var array
     */
    public $data;

    /**
     * Create a new event instance.
     *
     * @param  \Illuminate\Mail\SentMessage  $message
     * @param  array  $data
     * @return void
     */
    public function __construct(SentMessage $message, array $data = [])
    {
        $this->sent = $message;
        $this->data = $data;
    }

    /**
     * Get the serializable representation of the object.
     *
     * @return array
     */
    public function __serialize()
    {
        $hasAttachments = collect($this->message->getAttachments())->isNotEmpty();

<<<<<<< HEAD
<<<<<<< HEAD
        return [
            'sent' => $this->sent,
            'data' => $hasAttachments ? base64_encode(serialize($this->data)) : $this->data,
            'hasAttachments' => $hasAttachments,
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return $hasAttachments ? [
            'sent' => base64_encode(serialize($this->sent)),
            'data' => base64_encode(serialize($this->data)),
            'hasAttachments' => true,
        ] : [
            'sent' => $this->sent,
            'data' => $this->data,
            'hasAttachments' => false,
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ];
    }

    /**
     * Marshal the object from its serialized data.
     *
     * @param  array  $data
     * @return void
     */
    public function __unserialize(array $data)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->sent = $data['sent'];

        $this->data = (($data['hasAttachments'] ?? false) === true)
            ? unserialize(base64_decode($data['data']))
            : $data['data'];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (isset($data['hasAttachments']) && $data['hasAttachments'] === true) {
            $this->sent = unserialize(base64_decode($data['sent']));
            $this->data = unserialize(base64_decode($data['data']));
        } else {
            $this->sent = $data['sent'];
            $this->data = $data['data'];
        }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Dynamically get the original message.
     *
     * @param  string  $key
     * @return mixed
     *
     * @throws \Exception
     */
    public function __get($key)
    {
        if ($key === 'message') {
            return $this->sent->getOriginalMessage();
        }

        throw new Exception('Unable to access undefined property on '.__CLASS__.': '.$key);
    }
}
