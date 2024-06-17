<?php

namespace Illuminate\Database\Eloquent\Relations;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Concerns\AsPivot;

class Pivot extends Model
{
    use AsPivot;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that aren't mass assignable.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @var array<string>|bool
=======
     * @var array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
=======
     * @var array
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
     */
    protected $guarded = [];
}
