<?php
<<<<<<< HEAD
<<<<<<< HEAD

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link https://github.com/mockery/mockery for the canonical source repository
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
/**
 * Mockery
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://github.com/padraic/mockery/blob/master/LICENSE
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to padraic@php.net so we can send you a copy immediately.
 *
 * @category   Mockery
 * @package    Mockery
 * @copyright  Copyright (c) 2010 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    http://github.com/padraic/mockery/blob/master/LICENSE New BSD License
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */

namespace Mockery\Matcher;

<<<<<<< HEAD
<<<<<<< HEAD
use function array_replace_recursive;
use function implode;
use function is_array;

class Subset extends MatcherAbstract
{
    private $expected;

=======
class Subset extends MatcherAbstract
{
    private $expected;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
class Subset extends MatcherAbstract
{
    private $expected;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private $strict = true;

    /**
     * @param array $expected Expected subset of data
<<<<<<< HEAD
<<<<<<< HEAD
     * @param bool  $strict   Whether to run a strict or loose comparison
=======
     * @param bool $strict Whether to run a strict or loose comparison
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param bool $strict Whether to run a strict or loose comparison
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(array $expected, $strict = true)
    {
        $this->expected = $expected;
        $this->strict = $strict;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Return a string representation of this Matcher
     *
     * @return string
     */
    public function __toString()
    {
        return '<Subset' . $this->formatArray($this->expected) . '>';
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param array $expected Expected subset of data
     *
     * @return Subset
     */
    public static function strict(array $expected)
    {
        return new static($expected, true);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * @param array $expected Expected subset of data
     *
     * @return Subset
     */
    public static function loose(array $expected)
    {
        return new static($expected, false);
    }

    /**
     * Check if the actual value matches the expected.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @template TMixed
     *
     * @param TMixed $actual
     *
=======
     * @param mixed $actual
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param mixed $actual
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return bool
     */
    public function match(&$actual)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        if (! is_array($actual)) {
=======
        if (!is_array($actual)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if (!is_array($actual)) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return false;
        }

        if ($this->strict) {
            return $actual === array_replace_recursive($actual, $this->expected);
        }

        return $actual == array_replace_recursive($actual, $this->expected);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * @param array $expected Expected subset of data
     *
     * @return Subset
     */
    public static function strict(array $expected)
    {
        return new static($expected, true);
    }

    /**
     * Recursively format an array into the string representation for this matcher
     *
     * @return string
     */
    protected function formatArray(array $array)
    {
        $elements = [];
        foreach ($array as $k => $v) {
            $elements[] = $k . '=' . (is_array($v) ? $this->formatArray($v) : (string) $v);
        }

        return '[' . implode(', ', $elements) . ']';
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Return a string representation of this Matcher
     *
     * @return string
     */
    public function __toString()
    {
        $return = '<Subset[';
        $elements = array();
        foreach ($this->expected as $k=>$v) {
            $elements[] = $k . '=' . (string) $v;
        }
        $return .= implode(', ', $elements) . ']>';
        return $return;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
