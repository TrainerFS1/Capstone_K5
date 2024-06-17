<?php

namespace Illuminate\Routing\Middleware;

use Closure;
use Illuminate\Routing\Exceptions\InvalidSignatureException;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Arr;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class ValidateSignature
{
    /**
     * The names of the parameters that should be ignored.
     *
     * @var array<int, string>
     */
    protected $ignore = [
        //
    ];

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Specify that the URL signature is for a relative URL.
     *
     * @param  array|string  $ignore
     * @return string
     */
    public static function relative($ignore = [])
    {
        $ignore = Arr::wrap($ignore);

        return static::class.':'.implode(',', empty($ignore) ? ['relative'] : ['relative',  ...$ignore]);
    }

    /**
     * Specify that the URL signature is for an absolute URL.
     *
     * @param  array|string  $ignore
     * @return class-string
     */
    public static function absolute($ignore = [])
    {
        $ignore = Arr::wrap($ignore);

        return empty($ignore)
            ? static::class
            : static::class.':'.implode(',', $ignore);
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
<<<<<<< HEAD
<<<<<<< HEAD
     * @param  array|null  $args
=======
     * @param  string|null  $relative
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param  string|null  $relative
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Routing\Exceptions\InvalidSignatureException
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function handle($request, Closure $next, ...$args)
    {
        [$relative, $ignore] = $this->parseArguments($args);

        if ($request->hasValidSignatureWhileIgnoring($ignore, ! $relative)) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function handle($request, Closure $next, $relative = null)
    {
        $ignore = property_exists($this, 'except') ? $this->except : $this->ignore;

        if ($request->hasValidSignatureWhileIgnoring($ignore, $relative !== 'relative')) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return $next($request);
        }

        throw new InvalidSignatureException;
    }
<<<<<<< HEAD
<<<<<<< HEAD

    /**
     * Parse the additional arguments given to the middleware.
     *
     * @param  array  $args
     * @return array
     */
    protected function parseArguments(array $args)
    {
        $relative = ! empty($args) && $args[0] === 'relative';

        if ($relative) {
            array_shift($args);
        }

        $ignore = array_merge(
            property_exists($this, 'except') ? $this->except : $this->ignore,
            $args
        );

        return [$relative, $ignore];
    }
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
