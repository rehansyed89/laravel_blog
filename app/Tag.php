<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
