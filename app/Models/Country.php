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
    
    // Задача 28.12 - связь hasManyThrough для получения пользователей через города
    public function users()
    {
        return $this->hasManyThrough(
            User::class,
            City::class,
            'country_id',
            'city_id',   
            'id',        
            'id'        
        );
    }
}