<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    public function getCatCount()
    {
        return $this::hasMany('App\Models\Article', 'id', 'cat')->count();
    }
}
