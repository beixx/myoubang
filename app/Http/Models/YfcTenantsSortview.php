<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcTenantsSortview extends Model{
    protected $table ="yfc_tenants_sortview";
    public $pk = 'id';
    public $timestamps = false;


}
