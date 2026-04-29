<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
  
    protected $table = 'posts';
  
    protected $primaryKey = 'id';
   
    protected $keyType = 'int';
    
    public $incrementing = true;
    
    public $timestamps = false;
    
    protected $fillable = [
        'title',
        'desc',
        'text',
        'date'
    ];
    
    protected $casts = [
        'date' => 'date',
        'id' => 'integer',
    ];
}