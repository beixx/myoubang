<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcAdv extends Model{
    protected $table ="yfc_adv";
    public $pk = 'id';
    public $timestamps = false;


}
