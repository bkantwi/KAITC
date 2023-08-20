<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language4 extends Model
{
    use HasFactory;

    protected $table = 'language4s';

    protected $fillable =
    [
        'language4',
        'language4_competence',
        'user_id',
    ];

    // Define the relationship between Address and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
