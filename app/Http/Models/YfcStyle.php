<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcStyle extends Model{
    protected $table ="yfc_style";
    public $pk = 'id';
    public $timestamps = false;

}
