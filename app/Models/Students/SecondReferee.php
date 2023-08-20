<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondReferee extends Model
{
    use HasFactory;

    protected $table = 'second_referees';

    protected $fillable =
    [
        'ref2_name',
        'ref2_position',
        'ref2_relationship',
        'ref2_address',
        'ref2_telephone',
        'ref2_email',
        'user_id',
    ];

    // Define the relationship between Address and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
