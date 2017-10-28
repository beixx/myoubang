<?php
namespace App\Http\Models;

use App\Lib\Bill\DBModel;
use Illuminate\Database\Eloquent\Model;
use DB;

class YfcTenantsSortviewComment extends Model{
    protected $table ="yfc_tenants_sortview_comment";
    public $pk = 'id';
    public $timestamps = false;


}
