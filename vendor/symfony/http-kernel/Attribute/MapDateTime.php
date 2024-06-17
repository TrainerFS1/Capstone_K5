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

<<<<<<< HEAD
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/**
 * Controller parameter tag to configure DateTime arguments.
 */
#[\Attribute(\Attribute::TARGET_PARAMETER)]
<<<<<<< HEAD
<<<<<<< HEAD
class MapDateTime extends ValueResolver
{
    public function __construct(
        public readonly ?string $format = null,
        bool $disabled = false,
        string $resolver = DateTimeValueResolver::class,
    ) {
        parent::__construct($resolver, $disabled);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class MapDateTime
{
    public function __construct(
        public readonly ?string $format = null
    ) {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
