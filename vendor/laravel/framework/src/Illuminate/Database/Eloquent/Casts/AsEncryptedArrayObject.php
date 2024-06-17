<?php

namespace Illuminate\Database\Eloquent\Casts;

use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Facades\Crypt;

class AsEncryptedArrayObject implements Castable
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
                if (isset($attributes[$key])) {
<<<<<<< HEAD
<<<<<<< HEAD
                    return new ArrayObject(Json::decode(Crypt::decryptString($attributes[$key])));
=======
                    return new ArrayObject(json_decode(Crypt::decryptString($attributes[$key]), true));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    return new ArrayObject(json_decode(Crypt::decryptString($attributes[$key]), true));
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                }

                return null;
            }

            public function set($model, $key, $value, $attributes)
            {
                if (! is_null($value)) {
<<<<<<< HEAD
<<<<<<< HEAD
                    return [$key => Crypt::encryptString(Json::encode($value))];
=======
                    return [$key => Crypt::encryptString(json_encode($value))];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
                    return [$key => Crypt::encryptString(json_encode($value))];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
                }

                return null;
            }

            public function serialize($model, string $key, $value, array $attributes)
            {
                return ! is_null($value) ? $value->getArrayCopy() : null;
            }
        };
    }
}
