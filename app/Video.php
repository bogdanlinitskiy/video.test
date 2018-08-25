<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Video extends Model
{
    protected $fillable =['name','alias','image','description','views','likes','dislikes','date'];

    public function getRouteKeyName()
    {
        return 'alias';
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function attachingID($video)
    {
        $lastCategory = Category::latest()->limit(1)->get();
        foreach ($lastCategory as $category) {
            for ($i = 1; $i <= $category['id']; $i++) {
                if (request($i) == "on") {
                    $video->categories()->attach($i);
                }elseif(request($i) == !"on"){
                    $video->categories()->detach($i);
                }
            }
        }
    }

}
