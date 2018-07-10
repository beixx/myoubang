<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcAskCity extends Model{
    protected $table ="yfc_ask_city";
    public $pk = 'id';
    public $timestamps = false;


}
