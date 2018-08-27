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

    public function addView($id)
    {
        $video = Video::find($id);
        if($video['views'] == NULL){
            $video->update(['views' => 1 ]);
        }else{
            $video->update(['views' => $video['views']+1 ]);
    }

    }

    public function attachingID($video)
    {
        $lastActor = Actor::latest()->limit(1)->get();
        foreach ($lastActor as $actor) {
            for ($i = 1; $i <= $actor['id']; $i++) {
                if (request("act_".$i) == "on") {
                    $video->actors()->attach($i);
                }elseif(request("act_".$i) == !"on"){
                    $video->actors()->detach($i);
                }
            }
        }
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

    public function time_ago($date,$granularity=2) {
        $difference = time() - strtotime($date);
        $retval = '';
        $periods = array('decade' => 315360000,
            'year' => 31536000,
            'month' => 2628000,
            'week' => 604800,
            'day' => 86400,
            'hour' => 3600,
            'minute' => 60,
            'second' => 1);
        if ($difference < 60) { // less than 60 seconds ago, let's say "just now"
            $retval = "added just now";
            return $retval;
        } else {
            foreach ($periods as $key => $value) {
                if ($difference >= $value) {
                    $time = floor($difference/$value);
                    $difference %= $value;
                    $retval .= ($retval ? ' ' : '').$time.' ';
                    $retval .= (($time > 1) ? $key.'s' : $key);
                    $granularity--;
                }
                if ($granularity == '0') { break; }
            }
            return $retval;
        }
    }

}
