<?php

namespace Illuminate\Validation\Rules;

<<<<<<< HEAD
use BackedEnum;
use Illuminate\Contracts\Support\Arrayable;
use UnitEnum;

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
class In
{
    /**
     * The name of the rule.
     *
     * @var string
     */
    protected $rule = 'in';

    /**
     * The accepted values.
     *
     * @var array
     */
    protected $values;

    /**
     * Create a new in rule instance.
     *
<<<<<<< HEAD
     * @param  \Illuminate\Contracts\Support\Arrayable|array|string  $values
     * @return void
     */
    public function __construct($values)
    {
        if ($values instanceof Arrayable) {
            $values = $values->toArray();
        }

        $this->values = is_array($values) ? $values : func_get_args();
=======
     * @param  array  $values
     * @return void
     */
    public function __construct(array $values)
    {
        $this->values = $values;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    }

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     *
     * @see \Illuminate\Validation\ValidationRuleParser::parseParameters
     */
    public function __toString()
    {
        $values = array_map(function ($value) {
<<<<<<< HEAD
            $value = match (true) {
                $value instanceof BackedEnum => $value->value,
                $value instanceof UnitEnum => $value->name,
                default => $value,
            };

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            return '"'.str_replace('"', '""', $value).'"';
        }, $this->values);

        return $this->rule.':'.implode(',', $values);
    }
}
