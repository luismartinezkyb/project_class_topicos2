<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function comments()
    {
        return $this->hasMany(Comment::class);
        
    }//Esta es porque de un post vienen muchos comentarios
}
