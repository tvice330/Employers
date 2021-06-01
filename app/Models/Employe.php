<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', ' first_name', 'last_name', 'middle_name', 'birthday', 'department_id', 'type_employe_id', 'active',
    ];

    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function type_employe()
    {
        return $this->belongsTo(TypeEmploye::class);
    }
}
