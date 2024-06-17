<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    use HasFactory;

    protected $table = 'bills';

    protected $fillable = [
        'user_id',
        'date',
        'category',
        'amount',
        'due_date',
        'status',
        'description',
    ];

<<<<<<< HEAD
    protected $casts = [
        'status' => 'boolean',
    ];

=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
    public function user()
    {
        return $this->belongsTo(User::class);
    }
<<<<<<< HEAD

    public function getStatusAttribute($value)
    {
        return $value ? 'Lunas' : 'Belum Lunas';
    }


    protected $dates = [
        'due_date',
    ];
=======
>>>>>>> c5264d886d63b2f4ebe67c9bf0ffa41218a9c485
}
