<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['login', 'password', 'city_id'];
    
    // Задача 28.1 - связь один к одному с профилем
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }
    
    // Задача 28.4 - связь belongsTo с городом
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
    
    // Задача 28.12 - связь hasManyThrough для получения страны через город
    public function country()
    {
        return $this->hasOneThrough(
            Country::class,
            City::class,
            'id',        
            'id',     
            'city_id',  
            'country_id'
        );
    }
}