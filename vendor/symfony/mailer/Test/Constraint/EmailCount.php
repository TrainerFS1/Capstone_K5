<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\Mailer\Event\MessageEvents;

final class EmailCount extends Constraint
{
    private int $expectedValue;
    private ?string $transport;
    private bool $queued;

<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(int $expectedValue, ?string $transport = null, bool $queued = false)
=======
    public function __construct(int $expectedValue, string $transport = null, bool $queued = false)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function __construct(int $expectedValue, string $transport = null, bool $queued = false)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->expectedValue = $expectedValue;
        $this->transport = $transport;
        $this->queued = $queued;
    }

    public function toString(): string
    {
        return sprintf('%shas %s "%d" emails', $this->transport ? $this->transport.' ' : '', $this->queued ? 'queued' : 'sent', $this->expectedValue);
    }

    /**
     * @param MessageEvents $events
     */
    protected function matches($events): bool
    {
        return $this->expectedValue === $this->countEmails($events);
    }

    /**
     * @param MessageEvents $events
     */
    protected function failureDescription($events): string
    {
        return sprintf('the Transport %s (%d %s)', $this->toString(), $this->countEmails($events), $this->queued ? 'queued' : 'sent');
    }

    private function countEmails(MessageEvents $events): int
    {
        $count = 0;
        foreach ($events->getEvents($this->transport) as $event) {
            if (
                ($this->queued && $event->isQueued())
<<<<<<< HEAD
<<<<<<< HEAD
                || (!$this->queued && !$event->isQueued())
=======
                ||
                (!$this->queued && !$event->isQueued())
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                ||
                (!$this->queued && !$event->isQueued())
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            ) {
                ++$count;
            }
        }

        return $count;
    }
}
