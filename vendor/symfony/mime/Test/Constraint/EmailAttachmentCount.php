<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\Mime\Message;
use Symfony\Component\Mime\RawMessage;

final class EmailAttachmentCount extends Constraint
{
    private int $expectedValue;
    private ?string $transport;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(int $expectedValue, ?string $transport = null)
=======
    public function __construct(int $expectedValue, string $transport = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(int $expectedValue, string $transport = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->expectedValue = $expectedValue;
        $this->transport = $transport;
    }

    public function toString(): string
    {
        return sprintf('has sent "%d" attachment(s)', $this->expectedValue);
    }

    /**
     * @param RawMessage $message
     */
    protected function matches($message): bool
    {
        if (RawMessage::class === $message::class || Message::class === $message::class) {
            throw new \LogicException('Unable to test a message attachment on a RawMessage or Message instance.');
        }

        return $this->expectedValue === \count($message->getAttachments());
    }

    /**
     * @param RawMessage $message
     */
    protected function failureDescription($message): string
    {
        return 'the Email '.$this->toString();
    }
}
