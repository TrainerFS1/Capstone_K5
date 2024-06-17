<?php

namespace Illuminate\View\Compilers\Concerns;

trait CompilesClasses
{
    /**
     * Compile the conditional class statement into valid PHP.
     *
     * @param  string  $expression
     * @return string
     */
    protected function compileClass($expression)
    {
        $expression = is_null($expression) ? '([])' : $expression;

<<<<<<< HEAD
        return "class=\"<?php echo \Illuminate\Support\Arr::toCssClasses{$expression}; ?>\"";
=======
        return "class=\"<?php echo \Illuminate\Support\Arr::toCssClasses{$expression} ?>\"";
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
