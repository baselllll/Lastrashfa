<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['section','name','img'];
}
