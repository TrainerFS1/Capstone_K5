<?php declare(strict_types=1);
/*
 * This file is part of sebastian/complexity.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Complexity;

use function assert;
use function is_array;
use PhpParser\Node;
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Node\Expr\New_;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;
use PhpParser\Node\Stmt\Class_;
use PhpParser\Node\Stmt\ClassMethod;
use PhpParser\Node\Stmt\Function_;
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Node\Stmt\Interface_;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node\Stmt\Trait_;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitorAbstract;

final class ComplexityCalculatingVisitor extends NodeVisitorAbstract
{
    /**
     * @psalm-var list<Complexity>
     */
    private array $result = [];
    private bool $shortCircuitTraversal;

    public function __construct(bool $shortCircuitTraversal)
    {
        $this->shortCircuitTraversal = $shortCircuitTraversal;
    }

    public function enterNode(Node $node): ?int
    {
        if (!$node instanceof ClassMethod && !$node instanceof Function_) {
            return null;
        }

        if ($node instanceof ClassMethod) {
<<<<<<< HEAD
<<<<<<< HEAD
            if ($node->getAttribute('parent') instanceof Interface_) {
                return null;
            }

            if ($node->isAbstract()) {
                return null;
            }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            $name = $this->classMethodName($node);
        } else {
            $name = $this->functionName($node);
        }

        $statements = $node->getStmts();

        assert(is_array($statements));

        $this->result[] = new Complexity(
            $name,
<<<<<<< HEAD
<<<<<<< HEAD
            $this->cyclomaticComplexity($statements),
=======
            $this->cyclomaticComplexity($statements)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $this->cyclomaticComplexity($statements)
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        );

        if ($this->shortCircuitTraversal) {
            return NodeTraverser::DONT_TRAVERSE_CHILDREN;
        }

        return null;
    }

    public function result(): ComplexityCollection
    {
        return ComplexityCollection::fromList(...$this->result);
    }

    /**
     * @param Stmt[] $statements
<<<<<<< HEAD
<<<<<<< HEAD
     *
     * @psalm-return positive-int
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    private function cyclomaticComplexity(array $statements): int
    {
        $traverser = new NodeTraverser;

        $cyclomaticComplexityCalculatingVisitor = new CyclomaticComplexityCalculatingVisitor;

        $traverser->addVisitor($cyclomaticComplexityCalculatingVisitor);

        /* @noinspection UnusedFunctionResultInspection */
        $traverser->traverse($statements);

        return $cyclomaticComplexityCalculatingVisitor->cyclomaticComplexity();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function classMethodName(ClassMethod $node): string
    {
        $parent = $node->getAttribute('parent');

        assert($parent instanceof Class_ || $parent instanceof Trait_);
<<<<<<< HEAD
<<<<<<< HEAD

        if ($parent->getAttribute('parent') instanceof New_) {
            return 'anonymous class';
        }

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        assert(isset($parent->namespacedName));
        assert($parent->namespacedName instanceof Name);

        return $parent->namespacedName->toString() . '::' . $node->name->toString();
    }

<<<<<<< HEAD
<<<<<<< HEAD
    /**
     * @psalm-return non-empty-string
     */
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    private function functionName(Function_ $node): string
    {
        assert(isset($node->namespacedName));
        assert($node->namespacedName instanceof Name);

<<<<<<< HEAD
<<<<<<< HEAD
        $functionName = $node->namespacedName->toString();

        assert($functionName !== '');

        return $functionName;
=======
        return $node->namespacedName->toString();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        return $node->namespacedName->toString();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
