<?php
/**
 * Created by PhpStorm.
 * User: liulipeng
 * Date: 2016/11/10
 * Time: 下午4:45
 */

namespace App\Http\Helper;


class Date
{

    public static function formatTime($date) {
        $str = '';
        $timer = strtotime($date);
        $diff = $_SERVER['REQUEST_TIME'] - $timer;
        $day = floor($diff / 86400);
        $free = $diff % 86400;
        if($day > 0) {
            return $day."天前";
        }else{
            if($free>0){
                $hour = floor($free / 3600);
                $free = $free % 3600;
                if($hour>0){
                    return $hour."小时前";
                }else{
                    if($free>0){
                        $min = floor($free / 60);
                        $free = $free % 60;
                        if($min>0){
                            return $min."分钟前";
                        }else{
                            if($free>0){
                                return $free."秒前";
                            }else{
                                return '刚刚';
                            }
                        }
                    }else{
                        return '刚刚';
                    }
                }
            }else{
                return '刚刚';
            }
        }
    }

    public static function xtime ($time){
        $t = time() - $time;
        if($t > 86400) {
            return date("m-d H:i",$time);
        }
        else if($t < 3600){
            return intval($t/60)."分钟前";
        }
        else {
            return intval($t/3600)."小时前";
        }
    }

}