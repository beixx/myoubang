<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcAsk extends Model{
    protected $table ="yfc_ask";
    public $pk = 'id';
    public $timestamps = false;


}
