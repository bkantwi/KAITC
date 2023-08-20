<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language1 extends Model
{
    use HasFactory;

    protected $table = 'language1s';

    protected $fillable =
    [
        'language1',
        'language1_competence',
        'user_id',
    ];

    // Define the relationship between Address and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
