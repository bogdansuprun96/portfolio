<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class News extends Model
{
    public static function getAllPosts()
    {
        $posts = DB::table('blog')->orderBy('id', 'desc')->paginate('3');
        return $posts;
    }
}
