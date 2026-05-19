<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'country_id'];
    
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    // Задача 28.7 - связь belongsTo со страной
    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}