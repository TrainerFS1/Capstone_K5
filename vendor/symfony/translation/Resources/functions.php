<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation;

if (!\function_exists(t::class)) {
    /**
     * @author Nate Wiebe <nate@northern.co>
     */
<<<<<<< HEAD
<<<<<<< HEAD
    function t(string $message, array $parameters = [], ?string $domain = null): TranslatableMessage
=======
    function t(string $message, array $parameters = [], string $domain = null): TranslatableMessage
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    function t(string $message, array $parameters = [], string $domain = null): TranslatableMessage
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        return new TranslatableMessage($message, $parameters, $domain);
    }
}
