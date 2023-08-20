<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language2 extends Model
{
    use HasFactory;

    protected $table = 'language2s';

    protected $fillable =
    [
        'language2',
        'language2_competence',
        'user_id',
    ];
}
