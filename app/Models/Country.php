<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function phones()
    {
        return $this->hasMany(DeveloperPhone::class);
    }

    public function addresses()
    {
        return $this->hasMany(DeveloperAddress::class);
    }
}
