<?php

declare(strict_types=1);

/*
 * This file is part of the league/commonmark package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace League\CommonMark\Util;

<<<<<<< HEAD
<<<<<<< HEAD
use League\CommonMark\Exception\InvalidArgumentException;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/**
 * @psalm-immutable
 */
final class HtmlFilter
{
    // Return the entire string as-is
    public const ALLOW = 'allow';
    // Escape the entire string so any HTML/JS won't be interpreted as such
    public const ESCAPE = 'escape';
    // Return an empty string
    public const STRIP = 'strip';

    /**
     * Runs the given HTML through the given filter
     *
     * @param string $html   HTML input to be filtered
     * @param string $filter One of the HtmlFilter constants
     *
     * @return string Filtered HTML
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @throws InvalidArgumentException when an invalid $filter is given
=======
     * @throws \InvalidArgumentException when an invalid $filter is given
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @throws \InvalidArgumentException when an invalid $filter is given
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @psalm-pure
     */
    public static function filter(string $html, string $filter): string
    {
        switch ($filter) {
            case self::STRIP:
                return '';
            case self::ESCAPE:
                return \htmlspecialchars($html, \ENT_NOQUOTES);
            case self::ALLOW:
                return $html;
            default:
<<<<<<< HEAD
<<<<<<< HEAD
                throw new InvalidArgumentException(\sprintf('Invalid filter provided: "%s"', $filter));
=======
                throw new \InvalidArgumentException(\sprintf('Invalid filter provided: "%s"', $filter));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                throw new \InvalidArgumentException(\sprintf('Invalid filter provided: "%s"', $filter));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }
    }
}
