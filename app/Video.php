<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable =['name','alias','image','description','views','likes','dislikes','date'];

    public function getRouteKeyName()
    {
        return 'alias';
    }
}
