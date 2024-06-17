<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\AssignOp;

use PhpParser\Node\Expr\AssignOp;

<<<<<<< HEAD
<<<<<<< HEAD
class ShiftLeft extends AssignOp {
    public function getType(): string {
=======
class ShiftLeft extends AssignOp
{
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
class ShiftLeft extends AssignOp
{
    public function getType() : string {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_AssignOp_ShiftLeft';
    }
}
