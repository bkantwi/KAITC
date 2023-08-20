<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LangCompetence extends Model
{
    use HasFactory;

    protected $table = 'lang_competences';

    protected $fillable =
    [
        'language',
        'language_competence',
        'user_id',
    ];
}
