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

use Mockery\Generator\MockConfiguration;
<<<<<<< HEAD
<<<<<<< HEAD
use function array_map;
use function implode;
use function ltrim;
use function preg_replace;

class TraitPass implements Pass
{
    /**
     * @param  string $code
     * @return string
     */
=======

class TraitPass implements Pass
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======

class TraitPass implements Pass
{
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function apply($code, MockConfiguration $config)
    {
        $traits = $config->getTargetTraits();

<<<<<<< HEAD
<<<<<<< HEAD
        if ($traits === []) {
            return $code;
        }

        $useStatements = array_map(static function ($trait) {
            return 'use \\\\' . ltrim($trait->getName(), '\\') . ';';
        }, $traits);

        return preg_replace('/^{$/m', "{\n    " . implode("\n    ", $useStatements) . "\n", $code);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (empty($traits)) {
            return $code;
        }

        $useStatements = array_map(function ($trait) {
            return "use \\\\" . ltrim($trait->getName(), "\\") . ";";
        }, $traits);

        $code = preg_replace(
            '/^{$/m',
            "{\n    " . implode("\n    ", $useStatements) . "\n",
            $code
        );

        return $code;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
