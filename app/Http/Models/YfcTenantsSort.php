<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcTenantsSort extends Model{
    protected $table ="yfc_tenants_sort";
    public $pk = 'id';
    public $timestamps = false;


}
