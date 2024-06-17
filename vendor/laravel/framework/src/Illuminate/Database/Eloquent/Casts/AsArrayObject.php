<?php

namespace Illuminate\Database\Eloquent\Casts;

use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class AsArrayObject implements Castable
{
    /**
     * Get the caster class to use when casting from / to this cast target.
     *
     * @param  array  $arguments
     * @return \Illuminate\Contracts\Database\Eloquent\CastsAttributes<\Illuminate\Database\Eloquent\Casts\ArrayObject<array-key, mixed>, iterable>
     */
    public static function castUsing(array $arguments)
    {
        return new class implements CastsAttributes
        {
            public function get($model, $key, $value, $attributes)
            {
                if (! isset($attributes[$key])) {
                    return;
                }

<<<<<<< HEAD
<<<<<<< HEAD
                $data = Json::decode($attributes[$key]);

                return is_array($data) ? new ArrayObject($data, ArrayObject::ARRAY_AS_PROPS) : null;
=======
                $data = json_decode($attributes[$key], true);

                return is_array($data) ? new ArrayObject($data) : null;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                $data = json_decode($attributes[$key], true);

                return is_array($data) ? new ArrayObject($data) : null;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }

            public function set($model, $key, $value, $attributes)
            {
<<<<<<< HEAD
<<<<<<< HEAD
                return [$key => Json::encode($value)];
=======
                return [$key => json_encode($value)];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                return [$key => json_encode($value)];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }

            public function serialize($model, string $key, $value, array $attributes)
            {
                return $value->getArrayCopy();
            }
        };
    }
}
