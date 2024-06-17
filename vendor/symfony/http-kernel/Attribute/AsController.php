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
<<<<<<< HEAD
<<<<<<< HEAD
 * Autoconfigures controllers as services by applying
 * the `controller.service_arguments` tag to them.
 *
 * This enables injecting services as method arguments in addition
 * to other conventional dependency injection strategies.
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_FUNCTION)]
=======
 * Service tag to autoconfigure controllers.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
 * Service tag to autoconfigure controllers.
 */
#[\Attribute(\Attribute::TARGET_CLASS)]
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class AsController
{
    public function __construct()
    {
    }
}
