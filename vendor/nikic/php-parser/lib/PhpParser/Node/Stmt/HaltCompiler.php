<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node\Stmt;

<<<<<<< HEAD
<<<<<<< HEAD
class HaltCompiler extends Stmt {
    /** @var string Remaining text after halt compiler statement. */
    public string $remaining;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class HaltCompiler extends Stmt
{
    /** @var string Remaining text after halt compiler statement. */
    public $remaining;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

    /**
     * Constructs a __halt_compiler node.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $remaining Remaining text after halt compiler statement.
     * @param array<string, mixed> $attributes Additional attributes
=======
     * @param string $remaining  Remaining text after halt compiler statement.
     * @param array  $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @param string $remaining  Remaining text after halt compiler statement.
     * @param array  $attributes Additional attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    public function __construct(string $remaining, array $attributes = []) {
        $this->attributes = $attributes;
        $this->remaining = $remaining;
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function getSubNodeNames(): array {
        return ['remaining'];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function getSubNodeNames() : array {
        return ['remaining'];
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_HaltCompiler';
    }
}
