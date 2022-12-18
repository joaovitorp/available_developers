<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeveloperPhone extends Model
{
    use HasFactory;

    protected $fillable = [
        'developer_id',
        'country_id',
        'phone'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
