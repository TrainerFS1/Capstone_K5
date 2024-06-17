<?php

namespace Laravel\Ui\Tests\AuthBackend;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Foundation\Auth\ThrottlesLogins as ThrottlesLoginsTrait;
use Orchestra\Testbench\TestCase;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

class ThrottleLoginsTest extends TestCase
{
    #[Test]
    #[DataProvider('emailProvider')]
    public function it_can_generate_throttle_key(string $email, string $expectedEmail): void
    {
        $throttle = $this->createMock(ThrottlesLogins::class);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Orchestra\Testbench\TestCase;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\MockObject;

class ThrottleLoginsTest extends TestCase
{
    /**
     * @test
     * @dataProvider emailProvider
     */
    public function it_can_generate_throttle_key(string $email, string $expectedEmail): void
    {
        $throttle = $this->getMockForTrait(ThrottlesLogins::class, [], '', true, true, true, ['username']);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $throttle->method('username')->willReturn('email');
        $reflection = new \ReflectionClass($throttle);
        $method = $reflection->getMethod('throttleKey');
        $method->setAccessible(true);

        $request = $this->mock(Request::class);
        $request->expects('input')->with('email')->andReturn($email);
        $request->expects('ip')->andReturn('192.168.0.1');

        $this->assertSame($expectedEmail . '|192.168.0.1', $method->invoke($throttle, $request));
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public static function emailProvider(): array
=======
    public function emailProvider(): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function emailProvider(): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return [
            'lowercase special characters' => ['ⓣⓔⓢⓣ@ⓛⓐⓡⓐⓥⓔⓛ.ⓒⓞⓜ', 'test@laravel.com'],
            'uppercase special characters' => ['ⓉⒺⓈⓉ@ⓁⒶⓇⒶⓋⒺⓁ.ⒸⓄⓂ', 'test@laravel.com'],
<<<<<<< HEAD
<<<<<<< HEAD
            'special character numbers' => ['test⑩⓸③@laravel.com', 'test1043@laravel.com'],
=======
            'special character numbers' =>['test⑩⓸③@laravel.com', 'test1043@laravel.com'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            'special character numbers' =>['test⑩⓸③@laravel.com', 'test1043@laravel.com'],
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            'default email' => ['test@laravel.com', 'test@laravel.com'],
        ];
    }
}
<<<<<<< HEAD
<<<<<<< HEAD

class ThrottlesLogins
{
    use ThrottlesLoginsTrait;

    public function username()
    {
        return 'email';
    }
}
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
