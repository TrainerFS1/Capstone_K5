<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;

/** Nop/empty statement (;). */
<<<<<<< HEAD
<<<<<<< HEAD
class Nop extends Node\Stmt {
    public function getSubNodeNames(): array {
        return [];
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class Nop extends Node\Stmt
{
    public function getSubNodeNames() : array {
        return [];
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Stmt_Nop';
    }
}
