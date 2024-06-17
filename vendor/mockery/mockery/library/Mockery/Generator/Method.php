<?php
<<<<<<< HEAD

/**
 * Mockery (https://docs.mockery.io/)
 *
 * @copyright https://github.com/mockery/mockery/blob/HEAD/COPYRIGHT.md
 * @license https://github.com/mockery/mockery/blob/HEAD/LICENSE BSD 3-Clause License
 * @link https://github.com/mockery/mockery for the canonical source repository
=======
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
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
 */

namespace Mockery\Generator;

use Mockery\Reflector;
<<<<<<< HEAD
use ReflectionMethod;
use ReflectionParameter;

use function array_map;

/**
 * @mixin ReflectionMethod
 */
class Method
{
    /**
     * @var ReflectionMethod
     */
    private $method;

    public function __construct(ReflectionMethod $method)
=======

class Method
{
    /** @var \ReflectionMethod */
    private $method;

    public function __construct(\ReflectionMethod $method)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->method = $method;
    }

<<<<<<< HEAD
    /**
     * @template TArgs
     * @template TMixed
     *
     * @param string       $method
     * @param array<TArgs> $args
     *
     * @return TMixed
     */
    public function __call($method, $args)
    {
        /** @var TMixed */
        return $this->method->{$method}(...$args);
    }

    /**
     * @return list<Parameter>
     */
    public function getParameters()
    {
        return array_map(static function (ReflectionParameter $parameter) {
=======
    public function __call($method, $args)
    {
        return call_user_func_array(array($this->method, $method), $args);
    }

    /**
     * @return Parameter[]
     */
    public function getParameters()
    {
        return array_map(function (\ReflectionParameter $parameter) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return new Parameter($parameter);
        }, $this->method->getParameters());
    }

    /**
<<<<<<< HEAD
     * @return null|string
=======
     * @return string|null
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function getReturnType()
    {
        return Reflector::getReturnType($this->method);
    }
}
