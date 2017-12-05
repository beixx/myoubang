<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
class DianpingHunshaComments extends Model{
    protected $table = 'dianping_hunsha_comments';
    public $timestamps = false;


    /**
     * 初始化bill的db对象
     */
    public static function instance()
    {
        return (new static)->setConnection('mysql2')->newQuery();
    }
}