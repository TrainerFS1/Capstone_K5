<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Logging\JUnit;

use PHPUnit\Event\InvalidArgumentException;
use PHPUnit\Event\Test\Prepared;
use PHPUnit\Event\Test\PreparedSubscriber;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use PHPUnit\Event\TestData\NoDataSetFromDataProviderException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use PHPUnit\Event\TestData\NoDataSetFromDataProviderException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestPreparedSubscriber extends Subscriber implements PreparedSubscriber
{
    /**
     * @throws InvalidArgumentException
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function notify(Prepared $event): void
    {
        $this->logger()->testPrepared();
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @throws NoDataSetFromDataProviderException
     */
    public function notify(Prepared $event): void
    {
        $this->logger()->testPrepared($event);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
