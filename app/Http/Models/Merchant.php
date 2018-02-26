<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Merchant extends Model{
    protected $table ="merchant";
    public $pk = 'id';
    public $timestamps = false;

}
