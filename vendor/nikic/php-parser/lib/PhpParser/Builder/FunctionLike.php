<?php declare(strict_types=1);

namespace PhpParser\Builder;

use PhpParser\BuilderHelpers;
use PhpParser\Node;

<<<<<<< HEAD
<<<<<<< HEAD
abstract class FunctionLike extends Declaration {
    protected bool $returnByRef = false;
    /** @var Node\Param[] */
    protected array $params = [];

    /** @var Node\Identifier|Node\Name|Node\ComplexType|null */
    protected ?Node $returnType = null;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
abstract class FunctionLike extends Declaration
{
    protected $returnByRef = false;
    protected $params = [];

    /** @var string|Node\Name|Node\NullableType|null */
    protected $returnType = null;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Make the function return by reference.
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function makeReturnByRef() {
        $this->returnByRef = true;

        return $this;
    }

    /**
     * Adds a parameter.
     *
     * @param Node\Param|Param $param The parameter to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addParam($param) {
        $param = BuilderHelpers::normalizeNode($param);

        if (!$param instanceof Node\Param) {
            throw new \LogicException(sprintf('Expected parameter node, got "%s"', $param->getType()));
        }

        $this->params[] = $param;

        return $this;
    }

    /**
     * Adds multiple parameters.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param (Node\Param|Param)[] $params The parameters to add
=======
     * @param array $params The parameters to add
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param array $params The parameters to add
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addParams(array $params) {
        foreach ($params as $param) {
            $this->addParam($param);
        }

        return $this;
    }

    /**
     * Sets the return type for PHP 7.
     *
     * @param string|Node\Name|Node\Identifier|Node\ComplexType $type
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function setReturnType($type) {
        $this->returnType = BuilderHelpers::normalizeType($type);

        return $this;
    }
}
