<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language5 extends Model
{
    use HasFactory;

    protected $table = 'language5s';

    protected $fillable =
    [
        'language5',
        'language5_competence',
        'user_id',
    ];
}
