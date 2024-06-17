<?php

namespace Illuminate\Auth\Middleware;

use Closure;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Contracts\Routing\UrlGenerator;

class RequirePassword
{
    /**
     * The response factory instance.
     *
     * @var \Illuminate\Contracts\Routing\ResponseFactory
     */
    protected $responseFactory;

    /**
     * The URL generator instance.
     *
     * @var \Illuminate\Contracts\Routing\UrlGenerator
     */
    protected $urlGenerator;

    /**
     * The password timeout.
     *
     * @var int
     */
    protected $passwordTimeout;

    /**
     * Create a new middleware instance.
     *
     * @param  \Illuminate\Contracts\Routing\ResponseFactory  $responseFactory
     * @param  \Illuminate\Contracts\Routing\UrlGenerator  $urlGenerator
     * @param  int|null  $passwordTimeout
     * @return void
     */
    public function __construct(ResponseFactory $responseFactory, UrlGenerator $urlGenerator, $passwordTimeout = null)
    {
        $this->responseFactory = $responseFactory;
        $this->urlGenerator = $urlGenerator;
        $this->passwordTimeout = $passwordTimeout ?: 10800;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Specify the redirect route and timeout for the middleware.
     *
     * @param  string|null  $redirectToRoute
     * @param  string|int|null  $passwordTimeoutSeconds
     * @return string
     *
     * @named-arguments-supported
     */
    public static function using($redirectToRoute = null, $passwordTimeoutSeconds = null)
    {
        return static::class.':'.implode(',', func_get_args());
    }

    /**
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $redirectToRoute
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  string|int|null  $passwordTimeoutSeconds
=======
     * @param  int|null  $passwordTimeoutSeconds
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param  int|null  $passwordTimeoutSeconds
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return mixed
     */
    public function handle($request, Closure $next, $redirectToRoute = null, $passwordTimeoutSeconds = null)
    {
        if ($this->shouldConfirmPassword($request, $passwordTimeoutSeconds)) {
            if ($request->expectsJson()) {
                return $this->responseFactory->json([
                    'message' => 'Password confirmation required.',
                ], 423);
            }

            return $this->responseFactory->redirectGuest(
<<<<<<< HEAD
<<<<<<< HEAD
                $this->urlGenerator->route($redirectToRoute ?: 'password.confirm')
=======
                $this->urlGenerator->route($redirectToRoute ?? 'password.confirm')
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $this->urlGenerator->route($redirectToRoute ?? 'password.confirm')
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }

        return $next($request);
    }

    /**
     * Determine if the confirmation timeout has expired.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int|null  $passwordTimeoutSeconds
     * @return bool
     */
    protected function shouldConfirmPassword($request, $passwordTimeoutSeconds = null)
    {
        $confirmedAt = time() - $request->session()->get('auth.password_confirmed_at', 0);

        return $confirmedAt > ($passwordTimeoutSeconds ?? $this->passwordTimeout);
    }
}
