<?php

namespace App\Models\Students;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $table = 'employments';

    protected $fillable =
    [
        'name_of_org',
        'job_title',
        'date_emp',
        'department',
        'total_experience',
        'address',
        'country',
        'prev_org',
        'prev_job_title',
        'prev_date_emp',
        'prev_address',
        'user_id',
    ];

    // Define the relationship between Address and User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
