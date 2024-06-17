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
use function file_get_contents;
use PhpParser\Error;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use PhpParser\Lexer;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use PhpParser\Lexer;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node;
use PhpParser\NodeTraverser;
use PhpParser\NodeVisitor\NameResolver;
use PhpParser\NodeVisitor\ParentConnectingVisitor;
<<<<<<< HEAD
<<<<<<< HEAD
=======
use PhpParser\Parser;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
use PhpParser\Parser;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\ParserFactory;

final class Calculator
{
    /**
     * @throws RuntimeException
     */
    public function calculateForSourceFile(string $sourceFile): ComplexityCollection
    {
        return $this->calculateForSourceString(file_get_contents($sourceFile));
    }

    /**
     * @throws RuntimeException
     */
    public function calculateForSourceString(string $source): ComplexityCollection
    {
        try {
<<<<<<< HEAD
<<<<<<< HEAD
            $nodes = (new ParserFactory)->createForHostVersion()->parse($source);
=======
            $nodes = $this->parser()->parse($source);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
            $nodes = $this->parser()->parse($source);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            assert($nodes !== null);

            return $this->calculateForAbstractSyntaxTree($nodes);

            // @codeCoverageIgnoreStart
        } catch (Error $error) {
            throw new RuntimeException(
                $error->getMessage(),
                $error->getCode(),
<<<<<<< HEAD
<<<<<<< HEAD
                $error,
=======
                $error
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $error
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
        // @codeCoverageIgnoreEnd
    }

    /**
     * @param Node[] $nodes
     *
     * @throws RuntimeException
     */
    public function calculateForAbstractSyntaxTree(array $nodes): ComplexityCollection
    {
        $traverser                    = new NodeTraverser;
        $complexityCalculatingVisitor = new ComplexityCalculatingVisitor(true);

        $traverser->addVisitor(new NameResolver);
        $traverser->addVisitor(new ParentConnectingVisitor);
        $traverser->addVisitor($complexityCalculatingVisitor);

        try {
            /* @noinspection UnusedFunctionResultInspection */
            $traverser->traverse($nodes);
            // @codeCoverageIgnoreStart
        } catch (Error $error) {
            throw new RuntimeException(
                $error->getMessage(),
                $error->getCode(),
<<<<<<< HEAD
<<<<<<< HEAD
                $error,
=======
                $error
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $error
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            );
        }
        // @codeCoverageIgnoreEnd

        return $complexityCalculatingVisitor->result();
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    private function parser(): Parser
    {
        return (new ParserFactory)->create(ParserFactory::PREFER_PHP7, new Lexer);
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
