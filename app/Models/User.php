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
    
    // Задача 28.4 - связь belongsTo с городом
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}