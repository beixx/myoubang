<?php
namespace App\Http\Helper;

use Illuminate\Support\Facades\Redis;

class File
{

    /**
     * 获取复审数据
     */
    static function getrecheck()
    {
        $file_path = storage_path('framework/cache/recheck');
        if(file_exists($file_path)){
            $s = file_get_contents($file_path);
            return $s ? json_decode($s, true) : array('ischeck'=>false,'count' =>0);
        }
        return array('ischeck'=>false,'count' =>0) ;
    }
    /**
     * 写入复审数据
     */
    static function setrecheck()
    {
        $recheck = array(
            'ischeck' => (isset($_POST['ischeck']) && $_POST['ischeck']==1)? 1 : 0,
            'count' => isset($_POST['count'])?intval($_POST['count']):0
        );
        $file_path = storage_path('framework/cache/recheck');
        return file_put_contents($file_path,json_encode($recheck));
    }

    /**
     * 获取api城市数据
     */
    static function getApiCity()
    {
        $file_path = storage_path('framework/cache/city');
        if(file_exists($file_path)){
            $s = file_get_contents($file_path);
            return $s ? $s : '';
        }
        return '' ;
    }
    /**
     * 写入api城市数据
     */
    static function setApiCity()
    {
        $city = (isset($_POST['city']) && $_POST['city']) ? $_POST['city'] : '  ';
        $file_path = storage_path('framework/cache/city');
        return file_put_contents($file_path,$city);
    }

    /**
     * 获取api状态数据
     */
    static function getApiStatus()
    {
        $file_path = storage_path('framework/cache/apistatus');
        if(file_exists($file_path)){
            $s = file_get_contents($file_path);
            return $s ? $s : 0;
        }
        return 0 ;
    }
    /**
     * 写入api城市数据
     */
    static function setApistatus()
    {
        $status = (isset($_POST['status']) && $_POST['status']) ? $_POST['status'] : 0;
        $file_path = storage_path('framework/cache/apistatus');
        Redis::del('api_working_error');
        file_put_contents($file_path,$status);
        chmod($file_path,0777);
        return 1 ;
    }

    /**
     * 获取api状态数据
     */
    static function getGSApiStatus()
    {
        $file_path = storage_path('framework/cache/apigsstatus');
        if(file_exists($file_path)){
            $s = file_get_contents($file_path);
            return $s ? $s : 0;
        }
        return 0 ;
    }
    /**
     * 写入api城市数据
     */
    static function setGSApiStatus()
    {
        $status = (isset($_POST['status']) && $_POST['status']) ? $_POST['status'] : 0;
        $file_path = storage_path('framework/cache/apigsstatus');
        file_put_contents($file_path,$status);
        chmod($file_path,0777);
        return 1 ;
    }

    static function setApiLog($string){
        $file_path = storage_path('logs/api'.date('Y-m-d').'.log') ;
        file_put_contents($file_path,date('Y-m-d H:i:s').$string."\n",FILE_APPEND);
        return true;
    }

    static function setBillServerLog($string){
        $file_path = storage_path('logs/billserver'.date('Y-m-d').'.log') ;
        file_put_contents($file_path,date('Y-m-d H:i:s').$string."\n",FILE_APPEND);
        return true;
    }
    static function setLog($filename,$string){
        $file_path = storage_path('logs/'.$filename.date('Y-m-d').'.log') ;
        file_put_contents($file_path,date('Y-m-d H:i:s').$string."\n",FILE_APPEND);
        return true;
    }
}
