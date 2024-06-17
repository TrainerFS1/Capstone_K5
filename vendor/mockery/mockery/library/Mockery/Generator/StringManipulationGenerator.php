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

namespace Mockery\Generator;

<<<<<<< HEAD
<<<<<<< HEAD
use Mockery\Generator\StringManipulation\Pass\AvoidMethodClashPass;
use Mockery\Generator\StringManipulation\Pass\CallTypeHintPass;
use Mockery\Generator\StringManipulation\Pass\ClassAttributesPass;
=======
use Mockery\Generator\StringManipulation\Pass\CallTypeHintPass;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use Mockery\Generator\StringManipulation\Pass\CallTypeHintPass;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Mockery\Generator\StringManipulation\Pass\ClassNamePass;
use Mockery\Generator\StringManipulation\Pass\ClassPass;
use Mockery\Generator\StringManipulation\Pass\ConstantsPass;
use Mockery\Generator\StringManipulation\Pass\InstanceMockPass;
use Mockery\Generator\StringManipulation\Pass\InterfacePass;
use Mockery\Generator\StringManipulation\Pass\MagicMethodTypeHintsPass;
use Mockery\Generator\StringManipulation\Pass\MethodDefinitionPass;
use Mockery\Generator\StringManipulation\Pass\Pass;
use Mockery\Generator\StringManipulation\Pass\RemoveBuiltinMethodsThatAreFinalPass;
use Mockery\Generator\StringManipulation\Pass\RemoveDestructorPass;
use Mockery\Generator\StringManipulation\Pass\RemoveUnserializeForInternalSerializableClassesPass;
use Mockery\Generator\StringManipulation\Pass\TraitPass;
<<<<<<< HEAD
<<<<<<< HEAD
use function file_get_contents;

class StringManipulationGenerator implements Generator
{
    /**
     * @var list<Pass>
     */
    protected $passes = [];

    /**
     * @var string
     */
    private $code;

    /**
     * @param list<Pass> $passes
     */
    public function __construct(array $passes)
    {
        $this->passes = $passes;

        $this->code = file_get_contents(__DIR__ . '/../Mock.php');
    }

    /**
     * @param  Pass $pass
     * @return void
     */
    public function addPass(Pass $pass)
    {
        $this->passes[] = $pass;
    }

    /**
     * @return MockDefinition
     */
    public function generate(MockConfiguration $config)
    {
        $className = $config->getName() ?: $config->generateName();

        $namedConfig = $config->rename($className);

        $code = $this->code;
        foreach ($this->passes as $pass) {
            $code = $pass->apply($code, $namedConfig);
        }

        return new MockDefinition($namedConfig, $code);
    }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Mockery\Generator\StringManipulation\Pass\AvoidMethodClashPass;

class StringManipulationGenerator implements Generator
{
    protected $passes = array();
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Creates a new StringManipulationGenerator with the default passes
     *
     * @return StringManipulationGenerator
     */
    public static function withDefaultPasses()
    {
        return new static([
            new CallTypeHintPass(),
            new MagicMethodTypeHintsPass(),
            new ClassPass(),
            new TraitPass(),
            new ClassNamePass(),
            new InstanceMockPass(),
            new InterfacePass(),
            new AvoidMethodClashPass(),
            new MethodDefinitionPass(),
            new RemoveUnserializeForInternalSerializableClassesPass(),
            new RemoveBuiltinMethodsThatAreFinalPass(),
            new RemoveDestructorPass(),
            new ConstantsPass(),
<<<<<<< HEAD
<<<<<<< HEAD
            new ClassAttributesPass(),
        ]);
    }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        ]);
    }

    public function __construct(array $passes)
    {
        $this->passes = $passes;
    }

    public function generate(MockConfiguration $config)
    {
        $code = file_get_contents(__DIR__ . '/../Mock.php');
        $className = $config->getName() ?: $config->generateName();

        $namedConfig = $config->rename($className);

        foreach ($this->passes as $pass) {
            $code = $pass->apply($code, $namedConfig);
        }

        return new MockDefinition($namedConfig, $code);
    }

    public function addPass(Pass $pass)
    {
        $this->passes[] = $pass;
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
