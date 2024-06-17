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

namespace Mockery;

<<<<<<< HEAD
<<<<<<< HEAD
use Mockery;
use Mockery\Exception\NoMatchingExpectationException;

use function array_pop;
use function array_unshift;
use function end;

use const PHP_EOL;

class ExpectationDirector
{
    /**
     * Stores an array of all default expectations for this mock
     *
     * @var list<ExpectationInterface>
     */
    protected $_defaults = [];
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class ExpectationDirector
{
    /**
     * Method name the director is directing
     *
     * @var string
     */
    protected $_name = null;

    /**
     * Mock object the director is attached to
     *
     * @var \Mockery\MockInterface|\Mockery\LegacyMockInterface
     */
    protected $_mock = null;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Stores an array of all expectations for this mock
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var list<ExpectationInterface>
     */
    protected $_expectations = [];
=======
     * @var array
     */
    protected $_expectations = array();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @var array
     */
    protected $_expectations = array();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * The expected order of next call
     *
     * @var int
     */
    protected $_expectedOrder = null;

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Mock object the director is attached to
     *
     * @var LegacyMockInterface|MockInterface
     */
    protected $_mock = null;

    /**
     * Method name the director is directing
     *
     * @var string
     */
    protected $_name = null;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Stores an array of all default expectations for this mock
     *
     * @var array
     */
    protected $_defaults = array();
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructor
     *
     * @param string $name
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function __construct($name, LegacyMockInterface $mock)
=======
     * @param \Mockery\LegacyMockInterface $mock
     */
    public function __construct($name, \Mockery\LegacyMockInterface $mock)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param \Mockery\LegacyMockInterface $mock
     */
    public function __construct($name, \Mockery\LegacyMockInterface $mock)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->_name = $name;
        $this->_mock = $mock;
    }

    /**
     * Add a new expectation to the director
<<<<<<< HEAD
<<<<<<< HEAD
     */
    public function addExpectation(Expectation $expectation)
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @param \Mockery\Expectation $expectation
     */
    public function addExpectation(\Mockery\Expectation $expectation)
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        $this->_expectations[] = $expectation;
    }

    /**
     * Handle a method call being directed by this instance
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param array $args
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param array $args
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return mixed
     */
    public function call(array $args)
    {
        $expectation = $this->findExpectation($args);
<<<<<<< HEAD
<<<<<<< HEAD
        if ($expectation !== null) {
            return $expectation->verifyCall($args);
        }

        $exception = new NoMatchingExpectationException(
            'No matching handler found for '
            . $this->_mock->mockery_getName() . '::'
            . Mockery::formatArgs($this->_name, $args)
            . '. Either the method was unexpected or its arguments matched'
            . ' no expected argument list for this method'
            . PHP_EOL . PHP_EOL
            . Mockery::formatObjects($args)
        );

        $exception->setMock($this->_mock)
            ->setMethodName($this->_name)
            ->setActualArguments($args);

        throw $exception;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (is_null($expectation)) {
            $exception = new \Mockery\Exception\NoMatchingExpectationException(
                'No matching handler found for '
                . $this->_mock->mockery_getName() . '::'
                . \Mockery::formatArgs($this->_name, $args)
                . '. Either the method was unexpected or its arguments matched'
                . ' no expected argument list for this method'
                . PHP_EOL . PHP_EOL
                . \Mockery::formatObjects($args)
            );
            $exception->setMock($this->_mock)
                ->setMethodName($this->_name)
                ->setActualArguments($args);
            throw $exception;
        }
        return $expectation->verifyCall($args);
    }

    /**
     * Verify all expectations of the director
     *
     * @throws \Mockery\CountValidator\Exception
     * @return void
     */
    public function verify()
    {
        if (!empty($this->_expectations)) {
            foreach ($this->_expectations as $exp) {
                $exp->verify();
            }
        } else {
            foreach ($this->_defaults as $exp) {
                $exp->verify();
            }
        }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Attempt to locate an expectation matching the provided args
     *
<<<<<<< HEAD
<<<<<<< HEAD
=======
     * @param array $args
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param array $args
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return mixed
     */
    public function findExpectation(array $args)
    {
        $expectation = null;

<<<<<<< HEAD
<<<<<<< HEAD
        if ($this->_expectations !== []) {
            $expectation = $this->_findExpectationIn($this->_expectations, $args);
        }

        if ($expectation === null && $this->_defaults !== []) {
            return $this->_findExpectationIn($this->_defaults, $args);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (!empty($this->_expectations)) {
            $expectation = $this->_findExpectationIn($this->_expectations, $args);
        }

        if ($expectation === null && !empty($this->_defaults)) {
            $expectation = $this->_findExpectationIn($this->_defaults, $args);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        }

        return $expectation;
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * Return all expectations assigned to this director
     *
     * @return array<ExpectationInterface>
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * Make the given expectation a default for all others assuming it was
     * correctly created last
     *
     * @param \Mockery\Expectation $expectation
     */
    public function makeExpectationDefault(\Mockery\Expectation $expectation)
    {
        $last = end($this->_expectations);
        if ($last === $expectation) {
            array_pop($this->_expectations);
            array_unshift($this->_defaults, $expectation);
        } else {
            throw new \Mockery\Exception(
                'Cannot turn a previously defined expectation into a default'
            );
        }
    }

    /**
     * Search current array of expectations for a match
     *
     * @param array $expectations
     * @param array $args
     * @return mixed
     */
    protected function _findExpectationIn(array $expectations, array $args)
    {
        foreach ($expectations as $exp) {
            if ($exp->isEligible() && $exp->matchArgs($args)) {
                return $exp;
            }
        }
        foreach ($expectations as $exp) {
            if ($exp->matchArgs($args)) {
                return $exp;
            }
        }
    }

    /**
     * Return all expectations assigned to this director
     *
     * @return array
     */
    public function getExpectations()
    {
        return $this->_expectations;
    }

    /**
     * Return all expectations assigned to this director
     *
     * @return array
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function getDefaultExpectations()
    {
        return $this->_defaults;
    }

    /**
     * Return the number of expectations assigned to this director.
     *
     * @return int
     */
    public function getExpectationCount()
    {
        $count = 0;
<<<<<<< HEAD
<<<<<<< HEAD

        $expectations = $this->getExpectations();

        if ($expectations === []) {
            $expectations = $this->getDefaultExpectations();
        }

        foreach ($expectations as $expectation) {
            if ($expectation->isCallCountConstrained()) {
                ++$count;
            }
        }

        return $count;
    }

    /**
     * Return all expectations assigned to this director
     *
     * @return array<ExpectationInterface>
     */
    public function getExpectations()
    {
        return $this->_expectations;
    }

    /**
     * Make the given expectation a default for all others assuming it was correctly created last
     *
     * @throws Exception
     *
     * @return void
     */
    public function makeExpectationDefault(Expectation $expectation)
    {
        if (end($this->_expectations) === $expectation) {
            array_pop($this->_expectations);

            array_unshift($this->_defaults, $expectation);

            return;
        }

        throw new Exception('Cannot turn a previously defined expectation into a default');
    }

    /**
     * Verify all expectations of the director
     *
     * @throws Exception
     *
     * @return void
     */
    public function verify()
    {
        if ($this->_expectations !== []) {
            foreach ($this->_expectations as $expectation) {
                $expectation->verify();
            }

            return;
        }

        foreach ($this->_defaults as $expectation) {
            $expectation->verify();
        }
    }

    /**
     * Search current array of expectations for a match
     *
     * @param array<ExpectationInterface> $expectations
     *
     * @return null|ExpectationInterface
     */
    protected function _findExpectationIn(array $expectations, array $args)
    {
        foreach ($expectations as $expectation) {
            if (! $expectation->isEligible()) {
                continue;
            }

            if (! $expectation->matchArgs($args)) {
                continue;
            }

            return $expectation;
        }

        foreach ($expectations as $expectation) {
            if ($expectation->matchArgs($args)) {
                return $expectation;
            }
        }

        return null;
    }
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        /** @var Expectation $expectations */
        $expectations = $this->getExpectations() ?: $this->getDefaultExpectations();
        foreach ($expectations as $expectation) {
            if ($expectation->isCallCountConstrained()) {
                $count++;
            }
        }
        return $count;
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
