<?php

namespace Laravel\Ui\Tests\AuthBackend;

use Illuminate\Auth\Events\Attempting;
<<<<<<< HEAD
use Illuminate\Auth\Events\Logout;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Testing\RefreshDatabase;
=======
use Illuminate\Foundation\Auth\AuthenticatesUsers;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Illuminate\Http\Request;
use Illuminate\Routing\Pipeline;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Testing\TestResponse;
use Illuminate\Validation\ValidationException;
<<<<<<< HEAD
use Orchestra\Testbench\Attributes\WithMigration;
use Orchestra\Testbench\Factories\UserFactory;
use Orchestra\Testbench\TestCase;
use PHPUnit\Framework\Attributes\Test;

#[WithMigration]
class AuthenticatesUsersTest extends TestCase
{
    use AuthenticatesUsers, RefreshDatabase;
=======
use Orchestra\Testbench\Factories\UserFactory;
use Orchestra\Testbench\TestCase;

class AuthenticatesUsersTest extends TestCase
{
    use AuthenticatesUsers;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    protected function tearDown(): void
    {
        Auth::logout();

        parent::tearDown();
    }

<<<<<<< HEAD
    #[Test]
=======
    /**
     * Define database migrations.
     *
     * @return void
     */
    protected function defineDatabaseMigrations()
    {
        $this->loadLaravelMigrations();
    }

    /** @test */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function it_can_authenticate_a_user()
    {
        Event::fake();

        $user = UserFactory::new()->create();

        $request = Request::create('/login', 'POST', [
            'email' => $user->email,
            'password' => 'password',
        ], [], [], [
            'HTTP_ACCEPT' => 'application/json',
        ]);

        $response = $this->handleRequestUsing($request, function ($request) {
            return $this->login($request);
        })->assertStatus(204);

        Event::assertDispatched(function (Attempting $event) {
            return $event->remember === false;
        });
    }

<<<<<<< HEAD
    #[Test]
    public function it_can_deauthenticate_a_user()
    {
        Event::fake();

        $user = UserFactory::new()->create();

        $this->actingAs($user);

        $request = Request::create('/logout', 'POST', [], [], [], [
            'HTTP_ACCEPT' => 'application/json',
        ]);

        $response = $this->handleRequestUsing(
            $request, fn ($request) => $this->logout($request)
        )->assertStatus(204);

        Event::assertDispatched(fn (Logout $event) => $user->is($event->user));
    }

    #[Test]
=======
    /** @test */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function it_can_authenticate_a_user_with_remember_as_false()
    {
        Event::fake();

        $user = UserFactory::new()->create();

        $request = Request::create('/login', 'POST', [
            'email' => $user->email,
            'password' => 'password',
            'remember' => false,
        ], [], [], [
            'HTTP_ACCEPT' => 'application/json',
        ]);

        $response = $this->handleRequestUsing($request, function ($request) {
            return $this->login($request);
        })->assertStatus(204);

        Event::assertDispatched(function (Attempting $event) {
            return $event->remember === false;
        });
    }

<<<<<<< HEAD
    #[Test]
=======


    /** @test */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function it_can_authenticate_a_user_with_remember_as_true()
    {
        Event::fake();

        $user = UserFactory::new()->create();

        $request = Request::create('/login', 'POST', [
            'email' => $user->email,
            'password' => 'password',
            'remember' => true,
        ], [], [], [
            'HTTP_ACCEPT' => 'application/json',
        ]);

        $response = $this->handleRequestUsing($request, function ($request) {
            return $this->login($request);
        })->assertStatus(204);

        Event::assertDispatched(function (Attempting $event) {
            return $event->remember === true;
        });
    }

<<<<<<< HEAD
    #[Test]
=======
    /** @test */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function it_cant_authenticate_a_user_with_invalid_password()
    {
        $user = UserFactory::new()->create();

        $request = Request::create('/login', 'POST', [
            'email' => $user->email,
            'password' => 'invalid-password',
        ], [], [], [
            'HTTP_ACCEPT' => 'application/json',
        ]);

        $response = $this->handleRequestUsing($request, function ($request) {
            return $this->login($request);
        })->assertUnprocessable();

        $this->assertInstanceOf(ValidationException::class, $response->exception);
        $this->assertSame([
            'email' => [
                'These credentials do not match our records.',
            ],
        ], $response->exception->errors());
    }

<<<<<<< HEAD
    #[Test]
=======
     /** @test */
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function it_cant_authenticate_unknown_credential()
    {
        $request = Request::create('/login', 'POST', [
            'email' => 'taylor@laravel.com',
            'password' => 'password',
        ], [], [], [
            'HTTP_ACCEPT' => 'application/json',
        ]);

        $response = $this->handleRequestUsing($request, function ($request) {
            return $this->login($request);
        })->assertUnprocessable();

        $this->assertInstanceOf(ValidationException::class, $response->exception);
        $this->assertSame([
            'email' => [
                'These credentials do not match our records.',
            ],
        ], $response->exception->errors());
    }

    /**
     * Handle Request using the following pipeline.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  callable  $callback
     * @return \Illuminate\Testing\TestResponse
     */
    protected function handleRequestUsing(Request $request, callable $callback)
    {
        return new TestResponse(
            (new Pipeline($this->app))
                ->send($request)
                ->through([
                    \Illuminate\Session\Middleware\StartSession::class,
                ])
                ->then($callback)
        );
    }
}
