<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = ['webPath, imagePath', 'title', 'description', 'price',];
}
