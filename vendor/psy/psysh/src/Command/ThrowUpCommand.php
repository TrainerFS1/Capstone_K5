<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2023 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\Command;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr\New_;
<<<<<<< HEAD
<<<<<<< HEAD
use PhpParser\Node\Expr\Throw_;
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name\FullyQualified as FullyQualifiedName;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Expression;
use PhpParser\PrettyPrinter\Standard as Printer;
use Psy\Exception\ThrowUpException;
use Psy\Input\CodeArgument;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use PhpParser\Node\Expr\Variable;
use PhpParser\Node\Name\FullyQualified as FullyQualifiedName;
use PhpParser\Node\Scalar\String_;
use PhpParser\Node\Stmt\Throw_;
use PhpParser\PrettyPrinter\Standard as Printer;
use Psy\Context;
use Psy\ContextAware;
use Psy\Exception\ThrowUpException;
use Psy\Input\CodeArgument;
use Psy\ParserFactory;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Throw an exception or error out of the Psy Shell.
 */
<<<<<<< HEAD
<<<<<<< HEAD
class ThrowUpCommand extends Command
=======
class ThrowUpCommand extends Command implements ContextAware
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
class ThrowUpCommand extends Command implements ContextAware
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
{
    private $parser;
    private $printer;

    /**
     * {@inheritdoc}
     */
    public function __construct($name = null)
    {
<<<<<<< HEAD
<<<<<<< HEAD
        $this->parser = new CodeArgumentParser();
=======
        $parserFactory = new ParserFactory();

        $this->parser = $parserFactory->createParser();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
        $parserFactory = new ParserFactory();

        $this->parser = $parserFactory->createParser();
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $this->printer = new Printer();

        parent::__construct($name);
    }

    /**
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @deprecated throwUp no longer needs to be ContextAware
     *
     * @param Context $context
     */
    public function setContext(Context $context)
    {
        // Do nothing
    }

    /**
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('throw-up')
            ->setDefinition([
                new CodeArgument('exception', CodeArgument::OPTIONAL, 'Exception or Error to throw.'),
            ])
            ->setDescription('Throw an exception or error out of the Psy Shell.')
            ->setHelp(
                <<<'HELP'
Throws an exception or error out of the current the Psy Shell instance.

By default it throws the most recent exception.

e.g.
<return>>>> throw-up</return>
<return>>>> throw-up $e</return>
<return>>>> throw-up new Exception('WHEEEEEE!')</return>
<return>>>> throw-up "bye!"</return>
HELP
            );
    }

    /**
     * {@inheritdoc}
     *
     * @return int 0 if everything went fine, or an exit code
     *
     * @throws \InvalidArgumentException if there is no exception to throw
     */
<<<<<<< HEAD
<<<<<<< HEAD
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $args = $this->prepareArgs($input->getArgument('exception'));
        $throwStmt = new Expression(new Throw_(new New_(new FullyQualifiedName(ThrowUpException::class), $args)));
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $args = $this->prepareArgs($input->getArgument('exception'));
        $throwStmt = new Throw_(new New_(new FullyQualifiedName(ThrowUpException::class), $args));
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        $throwCode = $this->printer->prettyPrint([$throwStmt]);

        $shell = $this->getApplication();
        $shell->addCode($throwCode, !$shell->hasCode());

        return 0;
    }

    /**
     * Parse the supplied command argument.
     *
     * If no argument was given, this falls back to `$_e`
     *
     * @throws \InvalidArgumentException if there is no exception to throw
     *
     * @param string $code
     *
     * @return Arg[]
     */
<<<<<<< HEAD
<<<<<<< HEAD
    private function prepareArgs(?string $code = null): array
=======
    private function prepareArgs(string $code = null): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
    private function prepareArgs(string $code = null): array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    {
        if (!$code) {
            // Default to last exception if nothing else was supplied
            return [new Arg(new Variable('_e'))];
        }

<<<<<<< HEAD
<<<<<<< HEAD
        $nodes = $this->parser->parse($code);
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (\strpos($code, '<?') === false) {
            $code = '<?php '.$code;
        }

        $nodes = $this->parse($code);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        if (\count($nodes) !== 1) {
            throw new \InvalidArgumentException('No idea how to throw this');
        }

        $node = $nodes[0];
<<<<<<< HEAD
<<<<<<< HEAD
        $expr = $node->expr;
=======

        // Make this work for PHP Parser v3.x
        $expr = isset($node->expr) ? $node->expr : $node;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======

        // Make this work for PHP Parser v3.x
        $expr = isset($node->expr) ? $node->expr : $node;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

        $args = [new Arg($expr, false, false, $node->getAttributes())];

        // Allow throwing via a string, e.g. `throw-up "SUP"`
        if ($expr instanceof String_) {
            return [new New_(new FullyQualifiedName(\Exception::class), $args)];
        }

        return $args;
    }
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Lex and parse a string of code into statements.
     *
     * @param string $code
     *
     * @return array Statements
     */
    private function parse(string $code): array
    {
        try {
            return $this->parser->parse($code);
        } catch (\PhpParser\Error $e) {
            if (\strpos($e->getMessage(), 'unexpected EOF') === false) {
                throw $e;
            }

            // If we got an unexpected EOF, let's try it again with a semicolon.
            return $this->parser->parse($code.';');
        }
    }
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
