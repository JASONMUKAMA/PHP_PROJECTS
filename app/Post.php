<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;

class Post extends Model
{


 use Searchable;


 public function searchableAs()
    {
        return 'posts_index';
    }



 public function toSearchableArray()
    {
        $posts = $this->toArray();

        // Customize array...

        return $posts;
    }

    public function author()
    {
        return  $this->belongsTo(User::class, 'author_id');


    }


    public static function findBySlug($slug)
    {
        return static ::where('slug',$slug)->first();
    }
}
