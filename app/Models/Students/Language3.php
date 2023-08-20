<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language3 extends Model
{
    use HasFactory;

    protected $table = 'language3s';

    protected $fillable =
    [
        'language3',
        'language3_competence',
        'user_id',
    ];
}
