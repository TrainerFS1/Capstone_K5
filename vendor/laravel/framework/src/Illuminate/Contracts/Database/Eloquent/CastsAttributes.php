<?php

namespace Illuminate\Contracts\Database\Eloquent;

use Illuminate\Database\Eloquent\Model;

/**
 * @template TGet
 * @template TSet
 */
interface CastsAttributes
{
    /**
     * Transform the attribute from the underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
<<<<<<< HEAD
     * @param  array<string, mixed>  $attributes
=======
     * @param  array  $attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return TGet|null
     */
    public function get(Model $model, string $key, mixed $value, array $attributes);

    /**
     * Transform the attribute to its underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  TSet|null  $value
<<<<<<< HEAD
     * @param  array<string, mixed>  $attributes
=======
     * @param  array  $attributes
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     * @return mixed
     */
    public function set(Model $model, string $key, mixed $value, array $attributes);
}
