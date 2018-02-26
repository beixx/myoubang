<?php
namespace App\Http\Helper;

class Str
{

    /**
     * 整数 转 字符
     *
     * @param $int
     *
     * @return string
     */
    static function int2str($int)
    {
        $tMap = array('j', 'u', 'b', 'i', 'c', 'o', 'm', 's', 'z', 'p');
        return strtr($int, $tMap);
    }

    /**
     * 字符 转 整数
     *
     * @param $str
     *
     * @return int
     */
    static function str2int($str)
    {
        $tMap = array('j' => 0, 'u' => 1, 'b' => 2, 'i' => 3, 'c' => 4, 'o' => 5, 'm' => 6, 's' => 7, 'z' => 8, 'p' => 9);
        return (int)strtr($str, $tMap);
    }

    /**
     * 替换危险字符串
     *
     * @param string $pStr 危险字符
     * @param array $pTrans 自定义替换规则
     *
     * @return string 安全字符
     */
    static function safe($pStr, $pTrans = array())
    {
        $tTrans = array("'" => '', '"' => '', '`' => '', '\\' => '', '<' => '＜', '>' => '＞');
        $pTrans && $tTrans = array_merge($tTrans, $pTrans);
        return strtr(trim($pStr), $tTrans);
    }

    /**
     * 迭代过滤
     *
     * @param array $pData
     */
    static function filter(&$pData)
    {
        if (is_array($pData)) {
            foreach ($pData as &$v1) self::filter($v1);
        } else {
            $pData = trim($pData);
        }
    }

    /**
     * 获得 KEY 对应的 数组值
     *
     * @param array $pArr
     * @param string $pKey
     * @param string $pDefault
     *
     * @return string
     */
    static function arr2str($pArr, $pKey, $pDefault = '')
    {
        return isset($pArr[$pKey]) ? $pArr[$pKey] : $pDefault;
    }

    /**
     * ID 转为 图片文件路径
     *
     * @param int $pId
     *
     * @return string
     */
    static function id2path($pId)
    {
        $tPid = str_pad($pId, 9, 0, 0);
        return array(substr($tPid, 0, 3) . '/' . substr($tPid, 3, 3) . '/', substr($tPid, 6));
    }

    /**
     * 整数转小数
     *
     * @param int $int 整数
     * @param int $scale 位数
     *
     * @return float
     */
    static function int2float($int, $scale = 2)
    {
        return (float)bcdiv($int, str_pad(1, $scale + 1, 0), $scale);
    }

    /**
     * 小数转整数
     *
     * @param float $float 小数
     * @param int $scale 位数
     *
     * @return int
     */
    static function float2int($float, $scale = 2)
    {
        return (int)bcmul($float, str_pad(1, $scale + 1, 0), 0);
    }

    /**
     * 加密
     *
     * @param string $data 加密字符
     * @param string $key 加密KEY
     *
     * @return string
     */
    static function encrypt($data, $key)
    {
        $char = $str = '';
        for ($i = $x = 0, $l = strlen($key = md5($key)), $len = strlen($data); $i < $len; $i++, ++$x) {
            $x == $l && $x = 0;
            $char .= $key{$x};
        }
        for ($i = 0; $i < $len; $i++) $str .= chr(ord($data{$i}) + (ord($char{$i})) % 256);
        return base64_encode($str);
    }

    /**
     * 解密
     *
     * @param string $data 密
     * @param string $key
     *
     * @return string
     */
    static function decrypt($data, $key)
    {
        $char = $str = '';
        for ($i = $x = 0, $l = strlen($key = md5($key)), $len = strlen($data = base64_decode($data)); $i < $len; $i++, ++$x) {
            $x == $l && $x = 0;
            $char .= substr($key, $x, 1);
        }
        for ($i = 0; $i < $len; $i++) {
            $o3 = ($o1 = ord(substr($data, $i, 1))) < ($o2 = ord(substr($char, $i, 1))) ? 256 : 0;
            $str .= chr($o1 + $o3 - $o2);
        }
        return $str;
    }

    /**
     * 密码加密
     *
     * @param $str
     *
     * @return string
     */
    static function saltmd5($str)
    {
        return md5('QY-PW:' . md5($str) . ', salt:20050401');
    }

    /**
     * 邮箱打码
     *
     * @param $mail
     *
     * @return string
     */
    static function formatMail($mail)
    {
        $arr = explode('@', $mail);
        if (count($arr) < 2) {
            return $mail;
        } else {
            return substr($arr[0], 0, 3) . '***@' . $arr[1];
        }
    }

    /**
     * 手机号打码
     * @param string $mobile
     * @return string
     */
    static function formatMobile($mobile)
    {
        if(empty($mobile)){
            return '';
        }
        return substr($mobile,0, 3).'****'.substr($mobile,-4, 4);
    }

    static function changeTimeType($seconds){
        if ($seconds>3600){
            $hours = intval($seconds/3600);
            $minutes = $seconds/600;
            $time = $hours.":".gmstrftime('%M:%S', $minutes);
        }else{
            $time = gmstrftime('%H:%M:%S', $seconds);
        }
        return $time;
    }
}
