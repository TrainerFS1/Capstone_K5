<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Formatter;

/**
 * @author Tien Xuan Vo <tien.xuan.vo@gmail.com>
 */
final class NullOutputFormatterStyle implements OutputFormatterStyleInterface
{
    public function apply(string $text): string
    {
        return $text;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setBackground(?string $color = null): void
=======
    public function setBackground(string $color = null): void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function setBackground(string $color = null): void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (1 > \func_num_args()) {
            trigger_deprecation('symfony/console', '6.2', 'Calling "%s()" without any arguments is deprecated, pass null explicitly instead.', __METHOD__);
        }
        // do nothing
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function setForeground(?string $color = null): void
=======
    public function setForeground(string $color = null): void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function setForeground(string $color = null): void
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (1 > \func_num_args()) {
            trigger_deprecation('symfony/console', '6.2', 'Calling "%s()" without any arguments is deprecated, pass null explicitly instead.', __METHOD__);
        }
        // do nothing
    }

    public function setOption(string $option): void
    {
        // do nothing
    }

    public function setOptions(array $options): void
    {
        // do nothing
    }

    public function unsetOption(string $option): void
    {
        // do nothing
    }
}
