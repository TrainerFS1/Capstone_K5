<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Contracts\Translation;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface TranslatableInterface
{
<<<<<<< HEAD
    public function trans(TranslatorInterface $translator, ?string $locale = null): string;
=======
    public function trans(TranslatorInterface $translator, string $locale = null): string;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
