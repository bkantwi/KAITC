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
        'ref1_name',
        'ref1_position',
        'ref1_relationship',
        'ref1_address',
        'ref1_telephone',
        'ref1_email',
        'user_id',
    ];

    // Define the relationship between Address and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
