<?php
namespace App\Http\Helper;

class Msg{
    # 通用错误码
    const ERROR = 0;
    # 通用成功码
    const SUCCESS = 1;
    # 数据库操作通用错误码
    const DB_ERROR = 3;

    # 已经认证
    const IS_AUTH = 1;
    # 没有认证
    const NOT_AUTH = 0;
    /**
     * Json 消息
     *
     * @param string $pMsg 提示信息
     * @param int $pStatus 返回状态
     * @param mixed $pData 要返回的数据
     * @param string $pStatus ajax返回类型
     */
    static function ajax($pMsg = '', $pStatus = self::ERROR, $pData = '', $pType = 'json'){
        if(defined('JSON_CODE')){
            exit(strtr(JSON_CODE, array('$msg' => $pMsg)));
        }
        $tResult = array('status' => intval($pStatus), 'msg' => $pMsg, 'data' => $pData);
        # 格式
        'json' == $pType && exit(json_encode($tResult, JSON_UNESCAPED_UNICODE));
        'xml' == $pType && exit(xml_encode($tResult));
        exit($pData);
    }

    /**
     * JavaScript 消息
     *
     * @param string $pMsg 消息
     * @param bool $pUrl 网址
     */
    static function js($pMsg = '', $pUrl = false){
        # 页面使用 utf-8
        header('Content-Type: text/html; charset=utf-8');
        # 输出信息
        echo '<script type="text/javascript">';
        # 提示信息
        if($pMsg){
            echo "alert('", (is_array($pMsg)? implode('\n', $pMsg): $pMsg), "');";
        }
        # 指定跳转
        if($pUrl){
            if('.' == $pUrl) $pUrl = $_SERVER['REDIRECT_URL'];
            echo "self.location='{$pUrl}'";
        }
        # 后退
        elseif(empty($_SERVER['HTTP_REFERER'])){
            echo 'window.history.back(-1);';
        }
        # 返回来源页
        else{
            echo "self.location='{$_SERVER['HTTP_REFERER']}';";
        }
        # 退出
        exit('</script>');
    }

    /**
     * HTML 页面
     * @param $msg 消息
     * @param string $url 网址
     * @param string $title 标题
     */
    static function html($msg, $url = '', $title = ''){
        header('Content-Type: text/html; charset=utf-8');
        exit($msg);
    }

    /**
     * 生成html，审核票据的时候
     */
    static function billabstracthtml($name ,$billtype,$fieldname, $data)
    {
        $html = '';
        if($billtype['unit_price'] & 1 ) {
            $html = '<div class="row cl">
                <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>'.$fieldname[$name].'：</label>
                <div class="formControls col-xs-8 col-sm-9">
                    <input type="text" value="'.$data[$name].'" id="datemax" class="input-text Wdate">
                </div>
            </div>' ;
        }
        return $html;
    }

    /**
     * 生成html ，修改票据类型的时候
     */
    static function billtypeedithtml($name ,$fieldname, $data,$append=array())
    {
        if(!$data){
            $html = '<div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3">'.$fieldname[$name].'：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="checkbox"  value="1" id="'.$name.'" name="'.$name.'[]">显示
                        <input type="checkbox"  value="2"  id="'.$name.'" name="'.$name.'[]">必填
                    </div>
                 </div>' ;
            if(isset($append['name'])) {
                $html = '<div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3">'.$fieldname[$name].'：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="checkbox"  value="1"  id="'.$name.'" name="'.$name.'[]">显示
                        <input type="checkbox"  value="2"  id="'.$name.'" name="'.$name.'[]">必填
                        <input type="checkbox"  value="4"  id="'.$name.'" name="'.$name.'[]">'.$append['name'].'
                    </div>
                 </div>' ;
            }
        }else{
            $html = '<div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3">'.$fieldname[$name].'：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="checkbox"  value="1" '.($data[$name]&1?'checked':'').' id="'.$name.'" name="'.$name.'[]">显示
                        <input type="checkbox"  value="2" '.($data[$name]&2?'checked':'').' id="'.$name.'" name="'.$name.'[]">必填
                    </div>
                 </div>' ;
            if(isset($append['name'])) {
                $html = '<div class="row cl">
                    <label class="form-label col-xs-4 col-sm-3">'.$fieldname[$name].'：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="checkbox"  value="1" '.($data[$name]&1?'checked':'').' id="'.$name.'" name="'.$name.'[]">显示
                        <input type="checkbox"  value="2" '.($data[$name]&2?'checked':'').' id="'.$name.'" name="'.$name.'[]">必填
                        <input type="checkbox"  value="4" '.($data[$name]&4?'checked':'').' id="'.$name.'" name="'.$name.'[]">'.$append['name'].'
                    </div>
                 </div>' ;
            }
        }

        return $html;
    }
}