<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Test;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpClient\MockHttpClient;
use Symfony\Component\Translation\Dumper\XliffFileDumper;
use Symfony\Component\Translation\Exception\IncompleteDsnException;
use Symfony\Component\Translation\Exception\UnsupportedSchemeException;
use Symfony\Component\Translation\Loader\LoaderInterface;
use Symfony\Component\Translation\Provider\Dsn;
use Symfony\Component\Translation\Provider\ProviderFactoryInterface;
use Symfony\Component\Translation\TranslatorBagInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * A test case to ease testing a translation provider factory.
 *
 * @author Mathieu Santostefano <msantostefano@protonmail.com>
<<<<<<< HEAD
<<<<<<< HEAD
=======
 *
 * @internal
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
 *
 * @internal
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */
abstract class ProviderFactoryTestCase extends TestCase
{
    protected HttpClientInterface $client;
    protected LoggerInterface|MockObject $logger;
    protected string $defaultLocale;
    protected LoaderInterface|MockObject $loader;
    protected XliffFileDumper|MockObject $xliffFileDumper;
    protected TranslatorBagInterface|MockObject $translatorBag;

    abstract public function createFactory(): ProviderFactoryInterface;

    /**
     * @return iterable<array{0: bool, 1: string}>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    abstract public static function supportsProvider(): iterable;

    /**
     * @return iterable<array{0: string, 1: string}>
     */
    abstract public static function createProvider(): iterable;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    abstract public function supportsProvider(): iterable;

    /**
     * @return iterable<array{0: string, 1: string, 2: TransportInterface}>
     */
    abstract public function createProvider(): iterable;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * @return iterable<array{0: string, 1: string|null}>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public static function unsupportedSchemeProvider(): iterable
=======
    public function unsupportedSchemeProvider(): iterable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function unsupportedSchemeProvider(): iterable
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return [];
    }

    /**
     * @return iterable<array{0: string, 1: string|null}>
     */
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
    public function testSupports(bool $expected, string $dsn)
    {
        $factory = $this->createFactory();

        $this->assertSame($expected, $factory->supports(new Dsn($dsn)));
    }

    /**
     * @dataProvider createProvider
     */
    public function testCreate(string $expected, string $dsn)
    {
        $factory = $this->createFactory();
        $provider = $factory->create(new Dsn($dsn));

        $this->assertSame($expected, (string) $provider);
    }

    /**
     * @dataProvider unsupportedSchemeProvider
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function testUnsupportedSchemeException(string $dsn, ?string $message = null)
=======
    public function testUnsupportedSchemeException(string $dsn, string $message = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function testUnsupportedSchemeException(string $dsn, string $message = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $factory = $this->createFactory();

        $dsn = new Dsn($dsn);

        $this->expectException(UnsupportedSchemeException::class);
        if (null !== $message) {
            $this->expectExceptionMessage($message);
        }

        $factory->create($dsn);
    }

    /**
     * @dataProvider incompleteDsnProvider
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function testIncompleteDsnException(string $dsn, ?string $message = null)
=======
    public function testIncompleteDsnException(string $dsn, string $message = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function testIncompleteDsnException(string $dsn, string $message = null)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $factory = $this->createFactory();

        $dsn = new Dsn($dsn);

        $this->expectException(IncompleteDsnException::class);
        if (null !== $message) {
            $this->expectExceptionMessage($message);
        }

        $factory->create($dsn);
    }

    protected function getClient(): HttpClientInterface
    {
        return $this->client ??= new MockHttpClient();
    }

    protected function getLogger(): LoggerInterface
    {
        return $this->logger ??= $this->createMock(LoggerInterface::class);
    }

    protected function getDefaultLocale(): string
    {
        return $this->defaultLocale ??= 'en';
    }

    protected function getLoader(): LoaderInterface
    {
        return $this->loader ??= $this->createMock(LoaderInterface::class);
    }

    protected function getXliffFileDumper(): XliffFileDumper
    {
        return $this->xliffFileDumper ??= $this->createMock(XliffFileDumper::class);
    }

    protected function getTranslatorBag(): TranslatorBagInterface
    {
        return $this->translatorBag ??= $this->createMock(TranslatorBagInterface::class);
    }
}
