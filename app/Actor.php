<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['nickname','first_name','last_name','alias','birth_date','height','image'];

    public function getRouteKeyName()
    {
        return 'alias';
    }
    public function videos()
    {
        return $this->belongstoMany(Video::class);
    }
}
