<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperCertification extends Model
{
    use HasFactory;

    protected $fillable = [
        'developer_id',
        'name',
        'link'
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
