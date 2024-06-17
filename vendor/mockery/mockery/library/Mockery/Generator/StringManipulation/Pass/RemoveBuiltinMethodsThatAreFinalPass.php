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
use Mockery\Generator\TargetClassInterface;
use function preg_replace;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

/**
 * The standard Mockery\Mock class includes some methods to ease mocking, such
 * as __wakeup, however if the target has a final __wakeup method, it can't be
 * mocked. This pass removes the builtin methods where they are final on the
 * target
 */
<<<<<<< HEAD
<<<<<<< HEAD
class RemoveBuiltinMethodsThatAreFinalPass implements Pass
{
    protected $methods = [
        '__wakeup' => '/public function __wakeup\(\)\s+\{.*?\}/sm',
        '__toString' => '/public function __toString\(\)\s+(:\s+string)?\s*\{.*?\}/sm',
    ];

    /**
     * @param  string $code
     * @return string
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class RemoveBuiltinMethodsThatAreFinalPass
{
    protected $methods = array(
        '__wakeup' => '/public function __wakeup\(\)\s+\{.*?\}/sm',
        '__toString' => '/public function __toString\(\)\s+(:\s+string)?\s*\{.*?\}/sm',
    );

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function apply($code, MockConfiguration $config)
    {
        $target = $config->getTargetClass();

<<<<<<< HEAD
<<<<<<< HEAD
        if (! $target instanceof TargetClassInterface) {
=======
        if (!$target) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        if (!$target) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return $code;
        }

        foreach ($target->getMethods() as $method) {
<<<<<<< HEAD
<<<<<<< HEAD
            if (! $method->isFinal()) {
                continue;
            }

            if (! isset($this->methods[$method->getName()])) {
                continue;
            }

            $code = preg_replace($this->methods[$method->getName()], '', $code);
=======
            if ($method->isFinal() && isset($this->methods[$method->getName()])) {
                $code = preg_replace($this->methods[$method->getName()], '', $code);
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            if ($method->isFinal() && isset($this->methods[$method->getName()])) {
                $code = preg_replace($this->methods[$method->getName()], '', $code);
            }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $code;
    }
}
