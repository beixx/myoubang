<?php

namespace App\Http\Helper;
/**
 * 数据验证
 */
class Validate{

    /**
     * 验证 EMAIL
     */
    static function email($pStr){
        return preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/", $pStr);
    }

    /**
     * 验证 数值
     */
    static function int($pStr, $pMin = false, $pMax = false){
        if(!is_numeric($pStr)) return false;
        if(false !== $pMin && $pStr < $pMin) return false;
        if(false !== $pMax && $pStr > $pMax) return false;
        return true;
    }

    /**
     * 验证 用户名
     */
    static function name($pStr){
        return preg_match("/^[\s0-9a-zA-Z_\-\x80-\xff]+$/", $pStr);
    }

    /**
     * 银行卡户名
     */
    static function account($pStr){
        return preg_match("/^[0-9a-zA-Z@\.]+$/", $pStr);
    }

    /**
     * 验证 字母数字
     */
    static function az09($pStr){
        return preg_match("/^[0-9a-zA-Z]+$/", $pStr);
    }

    /**
     * 验证qq
     */
    static function qq($pStr) {
        return   preg_match('/^\d{5,10}$/',$pStr);
    }

    /**
     * 危险字符(XSS, 注入)
     */
    static function safe($pStr){
        return preg_match("/^[0-9a-zA-Z\x80-\xff@_?&=.-]+$/", $pStr);
    }

    /**
     * 验证 手机
     */
    static function mo($pStr){
        if(11 != strlen($pStr)) return false;
        return preg_match("/13[0-9]{9}|15[0-9]{9}|18[0-9]{9}|147[0-9]{8}|17[0-9]{9}/", $pStr);
    }

    /**
     * 验证电话号码
     */
    static function tel($tel){
        return preg_match("((\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$)", $tel);
    }

    /**
     * 验证公钥
     * 格式：0-f:7组，分隔:-
     */
    static function pubkey($pStr){
        return preg_match("/[0-9a-z]{5}-[0-9a-z]{5}-[0-9a-z]{5}-[0-9a-z]{5}-[0-9a-z]{5}-[0-9a-z]{5}-[0-9a-z]{5}/", $pStr);
    }

    /**
     * 过滤评论
     */
    static function comment($pStr){
        return strtr(strip_tags(trim($pStr)), array("'" => '', '"' => '', '<' => '', '>' => '', '`' => '', '{' => '', '}' => '', '%' => '', '\\' => '', '?' => '', ':' => ''));
    }

    /**
     * 验证身份证
     * @param $pStr
     * @return int
     */
    static function idcard($pStr){
        return preg_match("/^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}[0-9xX]$/", $pStr);
    }

    /**
     * 验证手机访问
     * @return bool 手机:true, 其他:false
     */
    public static function is_mobile_device()
    {
        if(empty($_SERVER['HTTP_USER_AGENT'])) return false;
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))){
            return true;
        }
        return false;
    }
}