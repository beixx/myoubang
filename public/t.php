<?php


$urls = array(
 'http://www.youbangkeyi.com/wenda/17332',
 'http://www.youbangkeyi.com/wenda/17333',
 'http://www.youbangkeyi.com/wenda/17334',
 'http://www.youbangkeyi.com/wenda/17335',
 'http://www.youbangkeyi.com/wenda/17336',
 'http://www.youbangkeyi.com/wenda/17337',
 'http://www.youbangkeyi.com/wenda/17338',
 'http://www.youbangkeyi.com/wenda/17339',
 'http://www.youbangkeyi.com/wenda/17340',
 'http://www.youbangkeyi.com/wenda/17341',
);
$api = 'http://data.zz.baidu.com/urls?appid=1605753876149174&token=bRfBPnNwWn6fhL7N&type=realtime';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>
