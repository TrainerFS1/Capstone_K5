<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\AssignOp;

use PhpParser\Node\Expr\AssignOp;

<<<<<<< HEAD
class BitwiseOr extends AssignOp {
    public function getType(): string {
=======
class BitwiseOr extends AssignOp
{
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_AssignOp_BitwiseOr';
    }
}
