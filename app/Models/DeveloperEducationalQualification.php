<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperEducationalQualification extends Model
{
    use HasFactory;

    protected $fillable = [
        'developer_id',
        'name',
        'institution',
        'is_finished',
        'start_date',
        'end_date'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
