<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\TextUI\Output\Default\ProgressPrinter;

use PHPUnit\Event\Test\DeprecationTriggered;
use PHPUnit\Event\Test\DeprecationTriggeredSubscriber;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestTriggeredDeprecationSubscriber extends Subscriber implements DeprecationTriggeredSubscriber
{
    public function notify(DeprecationTriggered $event): void
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->printer()->testTriggeredDeprecation($event);
=======
        $this->printer()->testTriggeredDeprecation();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $this->printer()->testTriggeredDeprecation();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
