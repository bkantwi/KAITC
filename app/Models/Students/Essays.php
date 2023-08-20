<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Essays extends Model
{
    use HasFactory;

    protected $table = 'essays';

    protected $fillable =
    [
        'essay_one',
        'essay_two',
        'user_id',
    ];
}

