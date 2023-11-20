<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automotor extends Model
{
    use HasFactory;
    
    protected $fillable = ['marca', 'modelo', 'patente', 'tipo', 'titular_id'];

    public function titular()
    {
        return $this->belongsTo(Titular::class);
    }

    public function infracciones()
    {
        return $this->hasMany(Infraccion::class);
    }
}
