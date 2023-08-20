<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funding extends Model
{
    use HasFactory;

    protected $table = 'fundings';

    protected $fillable =
    [
        'source_of_funds',
        'user_id',
    ];
}
