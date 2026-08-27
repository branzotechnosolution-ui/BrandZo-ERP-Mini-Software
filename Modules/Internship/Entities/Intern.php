<?php

namespace Modules\Internship\Entities;

use App\Models\BaseModel;

class Intern extends BaseModel
{
    protected $table = 'interns';

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'college_name',
        'department',
        'mentor_name',
        'start_date',
        'end_date',
        'status',
        'resume',
        'notes',
        'created_by',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
