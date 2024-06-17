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

<<<<<<< HEAD
use function array_pop;
use function explode;
use function implode;
use function ltrim;

class UndefinedTargetClass implements TargetClassInterface
{
    /**
     * @var class-string
     */
    private $name;

    /**
     * @param class-string $name
     */
=======
class UndefinedTargetClass implements TargetClassInterface
{
    private $name;

>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function __construct($name)
    {
        $this->name = $name;
    }

<<<<<<< HEAD
    /**
     * @return class-string
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * @param  class-string $name
     * @return self
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public static function factory($name)
    {
        return new self($name);
    }

<<<<<<< HEAD
    /**
     * @return list<class-string>
     */
    public function getAttributes()
    {
        return [];
    }

    /**
     * @return list<self>
     */
    public function getInterfaces()
    {
        return [];
    }

    /**
     * @return list<Method>
     */
    public function getMethods()
    {
        return [];
    }

    /**
     * @return class-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getName()
    {
        return $this->name;
    }

<<<<<<< HEAD
    /**
     * @return string
     */
    public function getNamespaceName()
    {
        $parts = explode('\\', ltrim($this->getName(), '\\'));
        array_pop($parts);
        return implode('\\', $parts);
    }

    /**
     * @return string
     */
    public function getShortName()
    {
        $parts = explode('\\', $this->getName());
        return array_pop($parts);
    }

    /**
     * @return bool
     */
    public function hasInternalAncestor()
    {
        return false;
    }

    /**
     * @param  class-string $interface
     * @return bool
     */
    public function implementsInterface($interface)
    {
        return false;
    }

    /**
     * @return bool
     */
    public function inNamespace()
    {
        return $this->getNamespaceName() !== '';
    }

    /**
     * @return bool
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isAbstract()
    {
        return false;
    }

<<<<<<< HEAD
    /**
     * @return bool
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function isFinal()
    {
        return false;
    }
<<<<<<< HEAD
=======

    public function getMethods()
    {
        return array();
    }

    public function getInterfaces()
    {
        return array();
    }

    public function getNamespaceName()
    {
        $parts = explode("\\", ltrim($this->getName(), "\\"));
        array_pop($parts);
        return implode("\\", $parts);
    }

    public function inNamespace()
    {
        return $this->getNamespaceName() !== '';
    }

    public function getShortName()
    {
        $parts = explode("\\", $this->getName());
        return array_pop($parts);
    }

    public function implementsInterface($interface)
    {
        return false;
    }

    public function hasInternalAncestor()
    {
        return false;
    }

    public function __toString()
    {
        return $this->name;
    }
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
