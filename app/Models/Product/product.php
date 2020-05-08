<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable = ['name','category','price','stock'];
}
