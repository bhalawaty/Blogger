<?php

namespace App;
use App\Tag;

use Carbon\Carbon;
class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
//    public function addcomment($body){
//       $this->comments()->create(compact('body'));
//    }


    public function user(){
        return  $this->belongsTo(User::class);
    }

    public function tags(){
        return  $this->belongsToMany(Tag::class);
    }


    public function scopeFilter($query,$filters){
        if(isset($filters['month'])){
            $query->whereMonth('created_at',Carbon::parse($filters['month'])->month);
        }
        if(isset($filters['year'])){
            $query->whereYear('created_at',$filters['year']);
        }
    }
    public static function archives(){
        return static::selectRaw('monthname(created_at)month ,year(created_at)year,count(*) published')

            ->groupBy('month','year')

            ->orderByRaw('min(created_at) desc')

            ->get()

            ->toArray();
    }

}
