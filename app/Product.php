<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'product_code',
        'image',
        'description',
        '_token',
       ];


}
