<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperProject extends Model
{
    use HasFactory;

    protected $fillable = [
        'developer_id',
        'description',
        'image'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function links()
    {
        return $this->hasMany(DeveloperProjectLink::class);
    }
}
