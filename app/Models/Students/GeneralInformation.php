<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralInformation extends Model
{
    use HasFactory;

    protected $table = 'general_information';

    protected $fillable = [
        'title',
        'dob',
        'family_name',
        'country_of_residence',
        'given_name',
        'country_of_birth',
        'sex',
        'nationality',
        'address_for_corres',
        'tel_num',
        'cell_num',
        'country',
        'email',
        'user_id',
    ];
}
