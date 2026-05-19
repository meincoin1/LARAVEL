<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['login', 'password', 'city_id'];
    
    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id', 'id');
    }
    
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
    
    // Задача 28.9 - получить страну через город
    public function country()
    {
        return $this->hasOneThrough(Country::class, City::class, 'id', 'id', 'city_id', 'country_id');
    }
}