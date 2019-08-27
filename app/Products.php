<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['id', 'name', 'webPath, image', 'description', 'short_description', 'price', 'weight'];
}

