<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];
    
    // Задача 28.10 - связь hasMany с городами
    public function cities()
    {
        return $this->hasMany(City::class, 'country_id', 'id');
    }
}