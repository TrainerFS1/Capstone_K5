<?php

namespace Illuminate\Validation;

use Illuminate\Support\Arr;

class NestedRules
{
    /**
     * The callback to execute.
     *
     * @var callable
     */
    protected $callback;

    /**
     * Create a new nested rule instance.
     *
     * @param  callable  $callback
     * @return void
     */
    public function __construct(callable $callback)
    {
        $this->callback = $callback;
    }

    /**
     * Compile the callback into an array of rules.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  mixed  $data
     * @return \stdClass
     */
    public function compile($attribute, $value, $data = null)
    {
        $rules = call_user_func($this->callback, $value, $attribute, $data);

        $parser = new ValidationRuleParser(
            Arr::undot(Arr::wrap($data))
        );

        if (is_array($rules) && ! array_is_list($rules)) {
            $nested = [];

            foreach ($rules as $key => $rule) {
                $nested[$attribute.'.'.$key] = $rule;
            }

<<<<<<< HEAD
<<<<<<< HEAD
            $rules = $nested;
        } else {
            $rules = [$attribute => $rules];
        }

        return $parser->explode(ValidationRuleParser::filterConditionalRules($rules, $data));
=======
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return $parser->explode($nested);
        }

        return $parser->explode([$attribute => $rules]);
<<<<<<< HEAD
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }
}
