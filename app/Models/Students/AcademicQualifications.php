<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicQualifications extends Model
{
    use HasFactory;

    protected $table = 'academic_qualifications';

    protected $fillable =
        [
          'from',
          'to',
          'name_of_insti',
          'insti_loc',
          'programme',
          'class_awarded',
          'user_id',
        ];

    // Define the relationship between Address and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
