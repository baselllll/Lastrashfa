<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name','password','phone','addresse'];
    public function category(){
        return $this->hasMany(Category::class,'user_id');
    }
}
