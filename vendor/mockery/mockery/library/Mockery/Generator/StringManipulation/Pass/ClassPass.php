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

namespace Mockery\Generator\StringManipulation\Pass;

<<<<<<< HEAD
<<<<<<< HEAD
use Mockery;
use Mockery\Generator\MockConfiguration;
use function class_exists;
use function ltrim;
use function str_replace;

class ClassPass implements Pass
{
    /**
     * @param  string $code
     * @return string
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Mockery\Generator\MockConfiguration;

class ClassPass implements Pass
{
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function apply($code, MockConfiguration $config)
    {
        $target = $config->getTargetClass();

<<<<<<< HEAD
<<<<<<< HEAD
        if (! $target) {
=======
        if (!$target) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if (!$target) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return $code;
        }

        if ($target->isFinal()) {
            return $code;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $className = ltrim($target->getName(), '\\');

        if (! class_exists($className)) {
            Mockery::declareClass($className);
        }

        return str_replace(
            'implements MockInterface',
            'extends \\' . $className . ' implements MockInterface',
            $code
        );
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $className = ltrim($target->getName(), "\\");

        if (!class_exists($className)) {
            \Mockery::declareClass($className);
        }

        $code = str_replace(
            "implements MockInterface",
            "extends \\" . $className . " implements MockInterface",
            $code
        );

        return $code;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
