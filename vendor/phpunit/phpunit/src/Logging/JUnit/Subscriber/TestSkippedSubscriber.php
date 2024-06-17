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
use PHPUnit\Event\Test\Skipped;
use PHPUnit\Event\Test\SkippedSubscriber;
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
final class TestSkippedSubscriber extends Subscriber implements SkippedSubscriber
{
    /**
     * @throws InvalidArgumentException
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @throws NoDataSetFromDataProviderException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @throws NoDataSetFromDataProviderException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function notify(Skipped $event): void
    {
        $this->logger()->testSkipped($event);
    }
}
