<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    public static function getInfo()
    {
        $info = DB::table('info')->get();
        return $info;
    }
}
