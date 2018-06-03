<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcBespokeView extends Model{
    protected $table ="yfc_bespoke_view";
    public $pk = 'id';
    public $timestamps = false;


}
