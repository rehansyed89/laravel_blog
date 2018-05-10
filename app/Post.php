<?php

namespace App;

use App\Author;
use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeLatestFirst($query){
        return $query->orderBy('created_at','desc');
    }

    public function scopeIsLive($query){
        return $query->where('live',true);
    }
    public function tags(){
        return $this->morphToMany(Tag::class,'taggable');
    }
}
