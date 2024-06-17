<?php declare(strict_types=1);
/*
 * This file is part of sebastian/lines-of-code.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\LinesOfCode;

use function assert;
use function file_get_contents;
use function substr_count;
use PhpParser\Error;
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Node;
use PhpParser\NodeTraverser;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Lexer;
use PhpParser\Node;
use PhpParser\NodeTraverser;
use PhpParser\Parser;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\ParserFactory;

final class Counter
{
    /**
     * @throws RuntimeException
     */
    public function countInSourceFile(string $sourceFile): LinesOfCode
    {
        return $this->countInSourceString(file_get_contents($sourceFile));
    }

    /**
     * @throws RuntimeException
     */
    public function countInSourceString(string $source): LinesOfCode
    {
        $linesOfCode = substr_count($source, "\n");

        if ($linesOfCode === 0 && !empty($source)) {
            $linesOfCode = 1;
        }

<<<<<<< HEAD
<<<<<<< HEAD
        assert($linesOfCode >= 0);

        try {
            $nodes = (new ParserFactory)->createForHostVersion()->parse($source);
=======
        try {
            $nodes = $this->parser()->parse($source);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        try {
            $nodes = $this->parser()->parse($source);
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

            assert($nodes !== null);

            return $this->countInAbstractSyntaxTree($linesOfCode, $nodes);

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
<<<<<<< HEAD
<<<<<<< HEAD
     * @psalm-param non-negative-int $linesOfCode
     *
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @param Node[] $nodes
     *
     * @throws RuntimeException
     */
    public function countInAbstractSyntaxTree(int $linesOfCode, array $nodes): LinesOfCode
    {
        $traverser = new NodeTraverser;
        $visitor   = new LineCountingVisitor($linesOfCode);

        $traverser->addVisitor($visitor);

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

        return $visitor->result();
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
