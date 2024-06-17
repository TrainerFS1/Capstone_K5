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

interface TargetClassInterface
{
    /**
<<<<<<< HEAD
     * Returns a new instance of the current TargetClassInterface's implementation.
     *
     * @param class-string $name
     *
=======
     * Returns a new instance of the current
     * TargetClassInterface's
     * implementation.
     *
     * @param string $name
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return TargetClassInterface
     */
    public static function factory($name);

    /**
<<<<<<< HEAD
     * Returns the targetClass's attributes.
     *
     * @return array<class-string>
     */
    public function getAttributes();

    /**
     * Returns the targetClass's interfaces.
     *
     * @return array<TargetClassInterface>
     */
    public function getInterfaces();
=======
     * Returns the targetClass's name.
     *
     * @return string
     */
    public function getName();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Returns the targetClass's methods.
     *
<<<<<<< HEAD
     * @return array<Method>
=======
     * @return array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function getMethods();

    /**
<<<<<<< HEAD
     * Returns the targetClass's name.
     *
     * @return class-string
     */
    public function getName();
=======
     * Returns the targetClass's interfaces.
     *
     * @return array
     */
    public function getInterfaces();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Returns the targetClass's namespace name.
     *
     * @return string
     */
    public function getNamespaceName();

    /**
     * Returns the targetClass's short name.
     *
     * @return string
     */
    public function getShortName();

    /**
<<<<<<< HEAD
     * Returns whether the targetClass has
     * an internal ancestor.
     *
     * @return bool
     */
    public function hasInternalAncestor();

    /**
     * Returns whether the targetClass is in
     * the passed interface.
     *
     * @param class-string|string $interface
     *
     * @return bool
     */
    public function implementsInterface($interface);

    /**
     * Returns whether the targetClass is in namespace.
     *
     * @return bool
     */
    public function inNamespace();

    /**
     * Returns whether the targetClass is abstract.
     *
     * @return bool
=======
     * Returns whether the targetClass is abstract.
     *
     * @return boolean
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function isAbstract();

    /**
     * Returns whether the targetClass is final.
     *
<<<<<<< HEAD
     * @return bool
     */
    public function isFinal();
=======
     * @return boolean
     */
    public function isFinal();

    /**
     * Returns whether the targetClass is in namespace.
     *
     * @return boolean
     */
    public function inNamespace();

    /**
     * Returns whether the targetClass is in
     * the passed interface.
     *
     * @param mixed $interface
     * @return boolean
     */
    public function implementsInterface($interface);

    /**
     * Returns whether the targetClass has
     * an internal ancestor.
     *
     * @return boolean
     */
    public function hasInternalAncestor();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
