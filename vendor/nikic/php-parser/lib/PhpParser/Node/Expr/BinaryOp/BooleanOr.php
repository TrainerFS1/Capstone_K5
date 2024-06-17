<?php declare(strict_types=1);

namespace PhpParser\Node\Expr\BinaryOp;

use PhpParser\Node\Expr\BinaryOp;

<<<<<<< HEAD
<<<<<<< HEAD
class BooleanOr extends BinaryOp {
    public function getOperatorSigil(): string {
        return '||';
    }

    public function getType(): string {
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class BooleanOr extends BinaryOp
{
    public function getOperatorSigil() : string {
        return '||';
    }
    
    public function getType() : string {
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        return 'Expr_BinaryOp_BooleanOr';
    }
}
