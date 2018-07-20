<?php


$urls = array(
 'http://www.youbangkeyi.com/wenda/16327',
 'http://www.youbangkeyi.com/wenda/16328',
 'http://www.youbangkeyi.com/wenda/16329',
 'http://www.youbangkeyi.com/wenda/16330',
 'http://www.youbangkeyi.com/wenda/16331',
 'http://www.youbangkeyi.com/wenda/16332',
 'http://www.youbangkeyi.com/wenda/16333',
 'http://www.youbangkeyi.com/wenda/16334',
 'http://www.youbangkeyi.com/wenda/16335',
 'http://www.youbangkeyi.com/wenda/16336',
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
