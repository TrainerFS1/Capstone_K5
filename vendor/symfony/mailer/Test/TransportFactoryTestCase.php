<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Test;

use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\Exception\IncompleteDsnException;
use Symfony\Component\Mailer\Exception\UnsupportedSchemeException;
use Symfony\Component\Mailer\Transport\Dsn;
use Symfony\Component\Mailer\Transport\TransportFactoryInterface;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * A test case to ease testing Transport Factory.
 *
 * @author Konstantin Myakshin <molodchick@gmail.com>
 */
abstract class TransportFactoryTestCase extends TestCase
{
    protected const USER = 'u$er';
    protected const PASSWORD = 'pa$s';

    protected $dispatcher;
    protected $client;
    protected $logger;

    abstract public function getFactory(): TransportFactoryInterface;

<<<<<<< HEAD
<<<<<<< HEAD
    abstract public static function supportsProvider(): iterable;

    abstract public static function createProvider(): iterable;

    public static function unsupportedSchemeProvider(): iterable
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    abstract public function supportsProvider(): iterable;

    abstract public function createProvider(): iterable;

    public function unsupportedSchemeProvider(): iterable
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return [];
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public static function incompleteDsnProvider(): iterable
=======
    public function incompleteDsnProvider(): iterable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function incompleteDsnProvider(): iterable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return [];
    }

    /**
     * @dataProvider supportsProvider
     */
    public function testSupports(Dsn $dsn, bool $supports)
    {
        $factory = $this->getFactory();

        $this->assertSame($supports, $factory->supports($dsn));
    }

    /**
     * @dataProvider createProvider
     */
    public function testCreate(Dsn $dsn, TransportInterface $transport)
    {
        $factory = $this->getFactory();

        $this->assertEquals($transport, $factory->create($dsn));
        if (str_contains('smtp', $dsn->getScheme())) {
            $this->assertStringMatchesFormat($dsn->getScheme().'://%S'.$dsn->getHost().'%S', (string) $transport);
        }
    }

    /**
     * @dataProvider unsupportedSchemeProvider
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function testUnsupportedSchemeException(Dsn $dsn, ?string $message = null)
=======
    public function testUnsupportedSchemeException(Dsn $dsn, string $message = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function testUnsupportedSchemeException(Dsn $dsn, string $message = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $factory = $this->getFactory();

        $this->expectException(UnsupportedSchemeException::class);
        if (null !== $message) {
            $this->expectExceptionMessage($message);
        }

        $factory->create($dsn);
    }

    /**
     * @dataProvider incompleteDsnProvider
     */
    public function testIncompleteDsnException(Dsn $dsn)
    {
        $factory = $this->getFactory();

        $this->expectException(IncompleteDsnException::class);
        $factory->create($dsn);
    }

    protected function getDispatcher(): EventDispatcherInterface
    {
        return $this->dispatcher ??= $this->createMock(EventDispatcherInterface::class);
    }

    protected function getClient(): HttpClientInterface
    {
        return $this->client ??= $this->createMock(HttpClientInterface::class);
    }

    protected function getLogger(): LoggerInterface
    {
        return $this->logger ??= $this->createMock(LoggerInterface::class);
    }
}
