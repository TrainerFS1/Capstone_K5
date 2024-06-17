<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\VariadicPlaceholder;

abstract class CallLike extends Expr {
    /**
     * Return raw arguments, which may be actual Args, or VariadicPlaceholders for first-class
     * callables.
     *
     * @return array<Arg|VariadicPlaceholder>
     */
    abstract public function getRawArgs(): array;

    /**
     * Returns whether this call expression is actually a first class callable.
     */
    public function isFirstClassCallable(): bool {
<<<<<<< HEAD
<<<<<<< HEAD
        $rawArgs = $this->getRawArgs();
        return count($rawArgs) === 1 && current($rawArgs) instanceof VariadicPlaceholder;
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
        foreach ($this->getRawArgs() as $arg) {
            if ($arg instanceof VariadicPlaceholder) {
                return true;
            }
        }
        return false;
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Assert that this is not a first-class callable and return only ordinary Args.
     *
     * @return Arg[]
     */
    public function getArgs(): array {
        assert(!$this->isFirstClassCallable());
        return $this->getRawArgs();
    }
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
}
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
