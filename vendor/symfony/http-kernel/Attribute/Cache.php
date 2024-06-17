<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Attribute;

/**
 * Describes the default HTTP cache headers on controllers.
<<<<<<< HEAD
<<<<<<< HEAD
 * Headers defined in the Cache attribute are ignored if they are already set
 * by the controller.
 *
 * @see https://symfony.com/doc/current/http_cache.html#making-your-responses-http-cacheable
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::TARGET_FUNCTION)]
final class Cache
{
    public function __construct(
        /**
         * The expiration date as a valid date for the strtotime() function.
         */
        public ?string $expires = null,

        /**
         * The number of seconds that the response is considered fresh by a private
         * cache like a web browser.
         */
        public int|string|null $maxage = null,

        /**
         * The number of seconds that the response is considered fresh by a public
         * cache like a reverse proxy cache.
         */
        public int|string|null $smaxage = null,

        /**
<<<<<<< HEAD
<<<<<<< HEAD
         * If true, the contents will be stored in a public cache and served to all
         * the next requests.
=======
         * Whether the response is public or not.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
         * Whether the response is public or not.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
         */
        public ?bool $public = null,

        /**
<<<<<<< HEAD
<<<<<<< HEAD
         * If true, the response is not served stale by a cache in any circumstance
         * without first revalidating with the origin.
=======
         * Whether or not the response must be revalidated.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
         * Whether or not the response must be revalidated.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
         */
        public bool $mustRevalidate = false,

        /**
<<<<<<< HEAD
<<<<<<< HEAD
         * Set "Vary" header.
         *
         * Example:
         * ['Accept-Encoding', 'User-Agent']
         *
         * @see https://symfony.com/doc/current/http_cache/cache_vary.html
         *
         * @var string[]
=======
         * Additional "Vary:"-headers.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
         * Additional "Vary:"-headers.
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
         */
        public array $vary = [],

        /**
         * An expression to compute the Last-Modified HTTP header.
<<<<<<< HEAD
<<<<<<< HEAD
         *
         * The expression is evaluated by the ExpressionLanguage component, it
         * receives all the request attributes and the resolved controller arguments.
         *
         * The result of the expression must be a DateTimeInterface.
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
         */
        public ?string $lastModified = null,

        /**
         * An expression to compute the ETag HTTP header.
<<<<<<< HEAD
<<<<<<< HEAD
         *
         * The expression is evaluated by the ExpressionLanguage component, it
         * receives all the request attributes and the resolved controller arguments.
         *
         * The result must be a string that will be hashed.
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
         */
        public ?string $etag = null,

        /**
         * max-stale Cache-Control header
         * It can be expressed in seconds or with a relative time format (1 day, 2 weeks, ...).
         */
        public int|string|null $maxStale = null,

        /**
         * stale-while-revalidate Cache-Control header
         * It can be expressed in seconds or with a relative time format (1 day, 2 weeks, ...).
         */
        public int|string|null $staleWhileRevalidate = null,

        /**
         * stale-if-error Cache-Control header
         * It can be expressed in seconds or with a relative time format (1 day, 2 weeks, ...).
         */
        public int|string|null $staleIfError = null,
    ) {
    }
}
