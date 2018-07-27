<?php


$urls = array(
 'http://www.youbangkeyi.com/wenda/18118',
 'http://www.youbangkeyi.com/wenda/18119',
 'http://www.youbangkeyi.com/wenda/18120',
 'http://www.youbangkeyi.com/wenda/18121',
 'http://www.youbangkeyi.com/wenda/18122',
 'http://www.youbangkeyi.com/wenda/18123',
 'http://www.youbangkeyi.com/wenda/18124',
 'http://www.youbangkeyi.com/wenda/18125',
 'http://www.youbangkeyi.com/wenda/18126',
 'http://www.youbangkeyi.com/wenda/18127',
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
