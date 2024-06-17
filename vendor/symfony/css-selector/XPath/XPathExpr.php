<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\CssSelector\XPath;

/**
 * XPath expression translator interface.
 *
 * This component is a port of the Python cssselect library,
 * which is copyright Ian Bicking, @see https://github.com/SimonSapin/cssselect.
 *
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 *
 * @internal
 */
class XPathExpr
{
<<<<<<< HEAD
<<<<<<< HEAD
    public function __construct(
        private string $path = '',
        private string $element = '*',
        private string $condition = '',
        bool $starPrefix = false,
    ) {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private string $path;
    private string $element;
    private string $condition;

    public function __construct(string $path = '', string $element = '*', string $condition = '', bool $starPrefix = false)
    {
        $this->path = $path;
        $this->element = $element;
        $this->condition = $condition;

<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if ($starPrefix) {
            $this->addStarPrefix();
        }
    }

    public function getElement(): string
    {
        return $this->element;
    }

    /**
     * @return $this
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function addCondition(string $condition, string $operator = 'and'): static
    {
        $this->condition = $this->condition ? sprintf('(%s) %s (%s)', $this->condition, $operator, $condition) : $condition;
=======
    public function addCondition(string $condition): static
    {
        $this->condition = $this->condition ? sprintf('(%s) and (%s)', $this->condition, $condition) : $condition;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function addCondition(string $condition): static
    {
        $this->condition = $this->condition ? sprintf('(%s) and (%s)', $this->condition, $condition) : $condition;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $this;
    }

    public function getCondition(): string
    {
        return $this->condition;
    }

    /**
     * @return $this
     */
    public function addNameTest(): static
    {
        if ('*' !== $this->element) {
            $this->addCondition('name() = '.Translator::getXpathLiteral($this->element));
            $this->element = '*';
        }

        return $this;
    }

    /**
     * @return $this
     */
    public function addStarPrefix(): static
    {
        $this->path .= '*/';

        return $this;
    }

    /**
     * Joins another XPathExpr with a combiner.
     *
     * @return $this
     */
    public function join(string $combiner, self $expr): static
    {
        $path = $this->__toString().$combiner;

        if ('*/' !== $expr->path) {
            $path .= $expr->path;
        }

        $this->path = $path;
        $this->element = $expr->element;
        $this->condition = $expr->condition;

        return $this;
    }

    public function __toString(): string
    {
        $path = $this->path.$this->element;
<<<<<<< HEAD
<<<<<<< HEAD
        $condition = '' === $this->condition ? '' : '['.$this->condition.']';
=======
        $condition = null === $this->condition || '' === $this->condition ? '' : '['.$this->condition.']';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $condition = null === $this->condition || '' === $this->condition ? '' : '['.$this->condition.']';
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        return $path.$condition;
    }
}
