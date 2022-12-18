<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperProfessionalExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'developer_id',
        'company_name',
        'role',
        'description',
        'is_still_working_at_it',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }
}
