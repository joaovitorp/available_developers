<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'availability_to_start_working_in_days',
        'summary'
    ];

    protected $casts = [
        'is_available' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'profile');
    }

    public function socialNetworks()
    {
        return $this->belongsToMany(SocialNetwork::class, 'developer_social_network');
    }

    public function phones()
    {
        return $this->hasMany(DeveloperPhone::class);
    }

    public function address()
    {
        return $this->hasOne(DeveloperAddress::class);
    }

    public function educationalQualifications()
    {
        return $this->hasMany(DeveloperEducationalQualification::class);
    }

    public function professionalExperiences()
    {
        return $this->hasMany(DeveloperProfessionalExperience::class);
    }

    public function softSkills()
    {
        return $this->hasMany(DeveloperSoftSkill::class);
    }

    public function projects()
    {
        return $this->hasMany(DeveloperProject::class);
    }

    public function certifications()
    {
        return $this->hasMany(DeveloperCertification::class);
    }
}
