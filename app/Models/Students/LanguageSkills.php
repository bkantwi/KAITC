<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LanguageSkills extends Model
{
    use HasFactory;

    protected $table = 'language_skills';

    protected $fillable =
        [
            'first_language',
            'eng_buss_context',
            'end_study_context',
            'eng_competence',
            'user_id',
        ];
}
