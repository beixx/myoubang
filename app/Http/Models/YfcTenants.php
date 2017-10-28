<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcTenants extends Model{
    protected $table ="yfc_tenants";
    public $pk = 'id';
    public $timestamps = false;


}
