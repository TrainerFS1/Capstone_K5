<?php

namespace Illuminate\Database\Eloquent\Relations\Concerns;

use BackedEnum;
<<<<<<< HEAD
use InvalidArgumentException;
=======
use Doctrine\Instantiator\Exception\InvalidArgumentException;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
use UnitEnum;

trait InteractsWithDictionary
{
    /**
     * Get a dictionary key attribute - casting it to a string if necessary.
     *
     * @param  mixed  $attribute
     * @return mixed
     *
<<<<<<< HEAD
     * @throws \InvalidArgumentException
=======
     * @throws \Doctrine\Instantiator\Exception\InvalidArgumentException
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected function getDictionaryKey($attribute)
    {
        if (is_object($attribute)) {
            if (method_exists($attribute, '__toString')) {
                return $attribute->__toString();
            }

<<<<<<< HEAD
            if ($attribute instanceof UnitEnum) {
=======
            if (function_exists('enum_exists') &&
                $attribute instanceof UnitEnum) {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                return $attribute instanceof BackedEnum ? $attribute->value : $attribute->name;
            }

            throw new InvalidArgumentException('Model attribute value is an object but does not have a __toString method.');
        }

        return $attribute;
    }
}
