<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcTenantsSet extends Model{
    protected $table ="yfc_tenants_set";
    public $pk = 'id';
    public $timestamps = false;


}
