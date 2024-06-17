<?php declare(strict_types=1);

namespace PhpParser\Node;

use PhpParser\Node;

<<<<<<< HEAD
<<<<<<< HEAD
interface FunctionLike extends Node {
    /**
     * Whether to return by reference
     */
    public function returnsByRef(): bool;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
interface FunctionLike extends Node
{
    /**
     * Whether to return by reference
     *
     * @return bool
     */
    public function returnsByRef() : bool;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * List of parameters
     *
     * @return Param[]
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getParams(): array;
=======
    public function getParams() : array;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getParams() : array;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Get the declared return type or null
     *
     * @return null|Identifier|Name|ComplexType
     */
    public function getReturnType();

    /**
     * The function body
     *
     * @return Stmt[]|null
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getStmts(): ?array;
=======
    public function getStmts();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getStmts();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Get PHP attribute groups.
     *
     * @return AttributeGroup[]
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getAttrGroups(): array;
=======
    public function getAttrGroups() : array;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    public function getAttrGroups() : array;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
