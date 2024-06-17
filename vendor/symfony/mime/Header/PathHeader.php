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
 * A Path Header, such a Return-Path (one address).
 *
 * @author Chris Corbyn
 */
final class PathHeader extends AbstractHeader
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
<<<<<<< HEAD
    public function setBody(mixed $body): void
=======
    public function setBody(mixed $body)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function setBody(mixed $body)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->setAddress($body);
    }

    public function getBody(): Address
    {
        return $this->getAddress();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setAddress(Address $address): void
=======
    public function setAddress(Address $address)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
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
        return '<'.$this->address->toString().'>';
    }
}
