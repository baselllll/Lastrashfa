<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['section','name','user_id'];
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function cart(){
        return $this->hasOne(Cart::class,'category_id');
    }
}
