<?php

namespace App;



class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comment::class);
    }
//    public function addcomment($body){
//       $this->comments()->create(compact('body'));
//    }


    public function user(){
        return  $this->belongsTo(user::class);
    }
}
