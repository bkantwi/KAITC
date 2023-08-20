<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    use HasFactory;

    protected $table = 'declarations';

    protected $fillable =
    [
        'signature',
        'date',
        'user_id',
    ];
}
