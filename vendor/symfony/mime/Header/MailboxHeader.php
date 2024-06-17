<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Header;

use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Exception\RfcComplianceException;

/**
 * A Mailbox MIME Header for something like Sender (one named address).
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class MailboxHeader extends AbstractHeader
{
    private Address $address;

    public function __construct(string $name, Address $address)
    {
        parent::__construct($name);

        $this->setAddress($address);
    }

    /**
     * @param Address $body
     *
     * @throws RfcComplianceException
     */
<<<<<<< HEAD
    public function setBody(mixed $body): void
=======
    public function setBody(mixed $body)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->setAddress($body);
    }

    /**
     * @throws RfcComplianceException
     */
    public function getBody(): Address
    {
        return $this->getAddress();
    }

    /**
     * @throws RfcComplianceException
     */
<<<<<<< HEAD
    public function setAddress(Address $address): void
=======
    public function setAddress(Address $address)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->address = $address;
    }

    public function getAddress(): Address
    {
        return $this->address;
    }

    public function getBodyAsString(): string
    {
        $str = $this->address->getEncodedAddress();
        if ($name = $this->address->getName()) {
            $str = $this->createPhrase($this, $name, $this->getCharset(), true).' <'.$str.'>';
        }

        return $str;
    }

    /**
     * Redefine the encoding requirements for an address.
     *
     * All "specials" must be encoded as the full header value will not be quoted
     *
     * @see RFC 2822 3.2.1
     */
    protected function tokenNeedsEncoding(string $token): bool
    {
        return preg_match('/[()<>\[\]:;@\,."]/', $token) || parent::tokenNeedsEncoding($token);
    }
}
