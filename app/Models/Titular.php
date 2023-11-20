<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titular extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'dni', 'licencia'];

    public function automotores()
    {
        return $this->hasMany(Automotor::class);
    }
}
