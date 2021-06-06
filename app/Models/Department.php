<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'position', 'title', 'active',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function scopeByPosition($query)
    {
        return $query->orderBy('position');
    }
    public function employe()
    {
        return $this->belongsToMany(Employe::class);
    }
}
