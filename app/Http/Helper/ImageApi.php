<?php

namespace App\Http\Helper;

class ImageApi{
    public static $encryptStr = '~Jiayunhui#';

    static function  getPostImageApi($imageurl , $dress)
    {
        $post = array(
            'image_name' => $imageurl,
            'degress' => $dress,
        );
        $post['signature'] = ImageApi::checkSignature($post);
        return ImageApi::send_post(BILL_IMAGE_OPEN_BASE_URL.'/upload/bill/imagereload',$post);
    }

    # 验证参数合法
    static function checkSignature($data)
    {
        ksort($data);
        # 校验
        return  md5(http_build_query($data) . "&" . ImageApi::$encryptStr);
    }


    static function send_post($url, $post_data) {

        $postdata = http_build_query($post_data);
        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => "User-Agent: Java/1.6.0_2\r\n".
                    "X-Public-Key: skip-xiaodou-dev\r\n".
                    "X-UID: 1\r\n".
                    "X-CID: \r\n".
                    "X-TOKEN: \r\n".
                    "X-SOURCE: \r\n",
                'content' => $postdata,
                'timeout' => 30 // 超时时间（单位:s）
            )
        );
        $context = stream_context_create($options);
        $result = @file_get_contents($url, false, $context);
        return $result;
    }

    static function send_text_post($url, $post_data) {

        #$postdata = http_build_query($post_data);
        $options = array(
            'http' => array(
                'method' => 'POST',
                'header' => "User-Agent: Java/1.6.0_2" ,
                'content' => $post_data,
                'timeout' => 30 // 超时时间（单位:s）
            )
        );
        $context = stream_context_create($options);
        $result = @file_get_contents($url, false, $context);

        return $result;
    }
}
