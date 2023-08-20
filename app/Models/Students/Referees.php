<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referees extends Model
{
    use HasFactory;

    protected $table = 'referees';

    protected $fillable =
    [
        'referee_name',
        'referee_phone',
        'referee_email',
        'referee_relationship',
        'referee_position',
        'referee_address',
        'user_id',
    ];

    // Define the relationship between Address and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
