<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable =['name','alias','image'];

    public function getRouteKeyName()
    {
        return 'alias';
    }

    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }

}
