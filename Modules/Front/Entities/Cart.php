<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['section','name','type','quantity','price','category_id','sector','track'];
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
