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
 * A Mailbox list MIME Header for something like From, To, Cc, and Bcc (one or more named addresses).
 *
 * @author Chris Corbyn
 */
final class MailboxListHeader extends AbstractHeader
{
    private array $addresses = [];

    /**
     * @param Address[] $addresses
     */
    public function __construct(string $name, array $addresses)
    {
        parent::__construct($name);

        $this->setAddresses($addresses);
    }

    /**
     * @param Address[] $body
     *
     * @throws RfcComplianceException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function setBody(mixed $body): void
=======
    public function setBody(mixed $body)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function setBody(mixed $body)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->setAddresses($body);
    }

    /**
     * @return Address[]
     *
     * @throws RfcComplianceException
     */
    public function getBody(): array
    {
        return $this->getAddresses();
    }

    /**
     * Sets a list of addresses to be shown in this Header.
     *
     * @param Address[] $addresses
     *
     * @throws RfcComplianceException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function setAddresses(array $addresses): void
=======
    public function setAddresses(array $addresses)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function setAddresses(array $addresses)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->addresses = [];
        $this->addAddresses($addresses);
    }

    /**
     * Sets a list of addresses to be shown in this Header.
     *
     * @param Address[] $addresses
     *
     * @throws RfcComplianceException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function addAddresses(array $addresses): void
=======
    public function addAddresses(array $addresses)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function addAddresses(array $addresses)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        foreach ($addresses as $address) {
            $this->addAddress($address);
        }
    }

    /**
     * @throws RfcComplianceException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function addAddress(Address $address): void
=======
    public function addAddress(Address $address)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function addAddress(Address $address)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->addresses[] = $address;
    }

    /**
     * @return Address[]
     */
    public function getAddresses(): array
    {
        return $this->addresses;
    }

    /**
     * Gets the full mailbox list of this Header as an array of valid RFC 2822 strings.
     *
     * @return string[]
     *
     * @throws RfcComplianceException
     */
    public function getAddressStrings(): array
    {
        $strings = [];
        foreach ($this->addresses as $address) {
            $str = $address->getEncodedAddress();
            if ($name = $address->getName()) {
                $str = $this->createPhrase($this, $name, $this->getCharset(), !$strings).' <'.$str.'>';
            }
            $strings[] = $str;
        }

        return $strings;
    }

    public function getBodyAsString(): string
    {
        return implode(', ', $this->getAddressStrings());
    }

    /**
     * Redefine the encoding requirements for addresses.
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
