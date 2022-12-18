<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecruiterCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'recruiter_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function recruiter()
    {
        return $this->belongsTo(Recruiter::class);
    }
}
