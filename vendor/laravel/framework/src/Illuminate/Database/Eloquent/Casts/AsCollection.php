<?php

namespace Illuminate\Database\Eloquent\Casts;

use Illuminate\Contracts\Database\Eloquent\Castable;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Collection;
<<<<<<< HEAD
use InvalidArgumentException;
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485

class AsCollection implements Castable
{
    /**
     * Get the caster class to use when casting from / to this cast target.
     *
     * @param  array  $arguments
     * @return \Illuminate\Contracts\Database\Eloquent\CastsAttributes<\Illuminate\Support\Collection<array-key, mixed>, iterable>
     */
    public static function castUsing(array $arguments)
    {
<<<<<<< HEAD
        return new class($arguments) implements CastsAttributes
        {
            public function __construct(protected array $arguments)
            {
            }

=======
        return new class implements CastsAttributes
        {
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            public function get($model, $key, $value, $attributes)
            {
                if (! isset($attributes[$key])) {
                    return;
                }

<<<<<<< HEAD
                $data = Json::decode($attributes[$key]);

                $collectionClass = $this->arguments[0] ?? Collection::class;

                if (! is_a($collectionClass, Collection::class, true)) {
                    throw new InvalidArgumentException('The provided class must extend ['.Collection::class.'].');
                }

                return is_array($data) ? new $collectionClass($data) : null;
=======
                $data = json_decode($attributes[$key], true);

                return is_array($data) ? new Collection($data) : null;
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }

            public function set($model, $key, $value, $attributes)
            {
<<<<<<< HEAD
                return [$key => Json::encode($value)];
=======
                return [$key => json_encode($value)];
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
            }
        };
    }
}
