<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcAskAnswer extends Model{
    protected $table ="yfc_ask_answer";
    public $pk = 'id';
    public $timestamps = false;


}
