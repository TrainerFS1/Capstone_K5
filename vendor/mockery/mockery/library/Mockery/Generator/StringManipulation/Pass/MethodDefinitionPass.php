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

use Mockery\Generator\Method;
<<<<<<< HEAD
<<<<<<< HEAD
use Mockery\Generator\MockConfiguration;
use Mockery\Generator\Parameter;
use function array_values;
use function count;
use function enum_exists;
use function get_class;
use function implode;
use function in_array;
use function is_object;
use function preg_match;
use function sprintf;
use function strpos;
use function strrpos;
use function strtolower;
use function substr;
use function var_export;
use const PHP_VERSION_ID;

class MethodDefinitionPass implements Pass
{
    /**
     * @param  string $code
     * @return string
     */
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Mockery\Generator\Parameter;
use Mockery\Generator\MockConfiguration;

class MethodDefinitionPass implements Pass
{
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function apply($code, MockConfiguration $config)
    {
        foreach ($config->getMethodsToMock() as $method) {
            if ($method->isPublic()) {
                $methodDef = 'public';
            } elseif ($method->isProtected()) {
                $methodDef = 'protected';
            } else {
                $methodDef = 'private';
            }

            if ($method->isStatic()) {
                $methodDef .= ' static';
            }

            $methodDef .= ' function ';
            $methodDef .= $method->returnsReference() ? ' & ' : '';
            $methodDef .= $method->getName();
            $methodDef .= $this->renderParams($method, $config);
            $methodDef .= $this->renderReturnType($method);
            $methodDef .= $this->renderMethodBody($method, $config);

            $code = $this->appendToClass($code, $methodDef);
        }

        return $code;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    protected function appendToClass($class, $code)
    {
        $lastBrace = strrpos($class, '}');
        return substr($class, 0, $lastBrace) . $code . "\n    }\n";
    }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function renderParams(Method $method, $config)
    {
        $class = $method->getDeclaringClass();
        if ($class->isInternal()) {
            $overrides = $config->getParameterOverrides();

            if (isset($overrides[strtolower($class->getName())][$method->getName()])) {
                return '(' . implode(',', $overrides[strtolower($class->getName())][$method->getName()]) . ')';
            }
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $methodParams = [];
        $params = $method->getParameters();
        $isPhp81 = PHP_VERSION_ID >= 80100;
=======
        $methodParams = array();
        $params = $method->getParameters();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $methodParams = array();
        $params = $method->getParameters();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        foreach ($params as $param) {
            $paramDef = $this->renderTypeHint($param);
            $paramDef .= $param->isPassedByReference() ? '&' : '';
            $paramDef .= $param->isVariadic() ? '...' : '';
            $paramDef .= '$' . $param->getName();

<<<<<<< HEAD
<<<<<<< HEAD
            if (! $param->isVariadic()) {
                if ($param->isDefaultValueAvailable() !== false) {
                    $defaultValue = $param->getDefaultValue();

                    if (is_object($defaultValue)) {
                        $prefix = get_class($defaultValue);
                        if ($isPhp81) {
                            if (enum_exists($prefix)) {
                                $prefix = var_export($defaultValue, true);
                            } elseif (
                                ! $param->isDefaultValueConstant() &&
                                // "Parameter #1 [ <optional> F\Q\CN $a = new \F\Q\CN(param1, param2: 2) ]
                                preg_match(
                                    '#<optional>\s.*?\s=\snew\s(.*?)\s]$#',
                                    $param->__toString(),
                                    $matches
                                ) === 1
                            ) {
                                $prefix = 'new ' . $matches[1];
                            }
                        }
                    } else {
                        $prefix = var_export($defaultValue, true);
                    }

                    $paramDef .= ' = ' . $prefix;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            if (!$param->isVariadic()) {
                if (false !== $param->isDefaultValueAvailable()) {
                    $defaultValue = $param->getDefaultValue();
                    $paramDef .= ' = ' . (is_object($defaultValue) ? get_class($defaultValue) : var_export($defaultValue, true));
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                } elseif ($param->isOptional()) {
                    $paramDef .= ' = null';
                }
            }

            $methodParams[] = $paramDef;
        }
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return '(' . implode(', ', $methodParams) . ')';
    }

    protected function renderReturnType(Method $method)
    {
        $type = $method->getReturnType();

        return $type ? sprintf(': %s', $type) : '';
    }

<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function appendToClass($class, $code)
    {
        $lastBrace = strrpos($class, "}");
        $class = substr($class, 0, $lastBrace) . $code . "\n    }\n";
        return $class;
    }

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function renderTypeHint(Parameter $param)
    {
        $typeHint = $param->getTypeHint();

        return $typeHint === null ? '' : sprintf('%s ', $typeHint);
    }

    private function renderMethodBody($method, $config)
    {
        $invoke = $method->isStatic() ? 'static::_mockery_handleStaticMethodCall' : '$this->_mockery_handleMethodCall';
        $body = <<<BODY
{
\$argc = func_num_args();
\$argv = func_get_args();

BODY;

        // Fix up known parameters by reference - used func_get_args() above
        // in case more parameters are passed in than the function definition
        // says - eg varargs.
        $class = $method->getDeclaringClass();
        $class_name = strtolower($class->getName());
        $overrides = $config->getParameterOverrides();
        if (isset($overrides[$class_name][$method->getName()])) {
            $params = array_values($overrides[$class_name][$method->getName()]);
            $paramCount = count($params);
            for ($i = 0; $i < $paramCount; ++$i) {
                $param = $params[$i];
                if (strpos($param, '&') !== false) {
                    $body .= <<<BODY
<<<<<<< HEAD
<<<<<<< HEAD
if (\$argc > {$i}) {
    \$argv[{$i}] = {$param};
=======
if (\$argc > $i) {
    \$argv[$i] = {$param};
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
if (\$argc > $i) {
    \$argv[$i] = {$param};
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}

BODY;
                }
            }
        } else {
            $params = array_values($method->getParameters());
            $paramCount = count($params);
            for ($i = 0; $i < $paramCount; ++$i) {
                $param = $params[$i];
<<<<<<< HEAD
<<<<<<< HEAD
                if (! $param->isPassedByReference()) {
                    continue;
                }

                $body .= <<<BODY
if (\$argc > {$i}) {
    \$argv[{$i}] =& \${$param->getName()};
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                if (!$param->isPassedByReference()) {
                    continue;
                }
                $body .= <<<BODY
if (\$argc > $i) {
    \$argv[$i] =& \${$param->getName()};
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}

BODY;
            }
        }

        $body .= "\$ret = {$invoke}(__FUNCTION__, \$argv);\n";

<<<<<<< HEAD
<<<<<<< HEAD
        if (! in_array($method->getReturnType(), ['never', 'void'], true)) {
            $body .= "return \$ret;\n";
        }

        return $body . "}\n";
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (! in_array($method->getReturnType(), ['never','void'], true)) {
            $body .= "return \$ret;\n";
        }

        $body .= "}\n";
        return $body;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
