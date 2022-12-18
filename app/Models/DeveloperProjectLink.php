<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperProjectLink extends Model
{
    use HasFactory;

    protected $fillable = [
        'developer_project_id',
        'link'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function developerProject()
    {
        return $this->belongsTo(DeveloperProject::class);
    }
}
