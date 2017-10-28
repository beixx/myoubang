<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcTenantsPic extends Model{
    protected $table ="yfc_tenants_pic";
    public $pk = 'id';
    public $timestamps = false;


}
