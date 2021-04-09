<?php

namespace Modules\Front\Entities;

use Illuminate\Database\Eloquent\Model;

class Locationsec extends Model
{
    protected $table = 'locations';
    protected $fillable = ['sector','track'];

}
