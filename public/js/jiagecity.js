
var s = `<div class="city">
    <div class="city-list">
    <div class="current">
    <span class="city-letter">当前城市</span>
    <p data-id="110100"><?php echo $city;?></p>
</div>
<div class="hot">
    <span class="city-letter">华北东北</span>
    <p data-id="110100"> <a href="/baojia/beijing">北京</a></p>
    <p data-id="110101"> <a href="/baojia/tianjin">天津</a></p>
    <p data-id="110102"><a href="/baojia/shenyang">沈阳</a></p>
    <p data-id="110103"><a href="/baojia/dalian">大连</a></p>
    <p data-id="110104"><a href="/baojia/haerbin">哈尔滨</a></p>
    <p data-id="110105"><a href="/baojia/shijiazhuang">石家庄</a></p>
    <p data-id="1101041"><a href="/baojia/taiyuan">太原</a></p>
    <p data-id="1101042"><a href="/baojia/changchun">长春</a></p>
    <p data-id="1101043"><a href="/baojia/tangshan">唐山</a></p>
    <p data-id="1101044"><a href="/baojia/qinhuangdao">秦皇岛</a></p>
    <p data-id="1101045"><a href="/baojia/langfang">廊坊</a></p>
    <p data-id="1101046"><a href="/baojia/baoding">保定</a></p>
    <p data-id="1101047"><a href="/baojia/bangbu">蚌埠</a></p>
    <p data-id="1101048"><a href="/baojia/jinzhou">锦州</a></p>
    <p data-id="1101049"><a href="/baojia/daqing">大庆</a></p>
    <p data-id="1101040"><a href="/baojia/changzhi">长治</a></p>
    <span class="city-letter">华东地区</span>
    <p data-id="110107"> <a href="/baojia/shanghai">上海</a></p>
    <p data-id="110106"> <a href="/baojia/hangzhou">杭州</a></p>
    <p data-id="110108"><a href="/baojia/xiamen">厦门</a></p>
    <p data-id="110109"><a href="/baojia/nanjing">南京</a></p>
    <p data-id="110110"><a href="/baojia/suzhou">苏州</a></p>
    <p data-id="110111"><a href="/baojia/wuxi">无锡</a></p>
    <p data-id="110112"><a href="/baojia/ningbo">宁波</a></p>
    <p data-id="110113"><a href="/baojia/fuzhou">福州</a></p>
    <p data-id="110114"><a href="/baojia/qingdao">青岛</a></p>
    <p data-id="110115"><a href="/baojia/hefei">合肥</a></p>
    <p data-id="1101121"><a href="/baojia/jinan">济南</a></p>
    <p data-id="1101122"><a href="/baojia/changzhou">常州</a></p>
    <p data-id="1101123"><a href="/baojia/wenzhou">温州</a></p>
    <p data-id="1101124"><a href="/baojia/quanzhou">泉州</a></p>
    <p data-id="1101125"><a href="/baojia/nantong">南通</a></p>
    <p data-id="1101126"><a href="/baojia/xuzhou">徐州</a></p>
    <p data-id="1101127"><a href="/baojia/wuhu">芜湖</a></p>
    <p data-id="1101128"><a href="/baojia/weifang">潍坊</a></p>
    <p data-id="1101129"><a href="/baojia/yangzhou">扬州</a></p>
    <p data-id="1101120"><a href="/baojia/jinhua">金华</a></p>
    <p data-id="11011"><a href="/baojia/linyi">临沂</a></p>
    <p data-id="11012"><a href="/baojia/huzhou">湖州</a></p>
    <p data-id="11013"><a href="/baojia/yancheng">盐城</a></p>
    <p data-id="11014"><a href="/baojia/shaoxing">绍兴</a></p>
    <p data-id="11015"><a href="/baojia/jiaxing">嘉兴</a></p>
    <p data-id="11016"><a href="/baojia/huaian">淮安</a></p>
    <p data-id="11017"><a href="/baojia/maanshan">马鞍山</a></p>
    <p data-id="11018"><a href="/baojia/taian">泰安</a></p>
    <span class="city-letter">中部西部</span>
    <p data-id="110116"><a href="/baojia/chengdu">成都</a></p>
    <p data-id="110117"><a href="/baojia/chongqing">重庆</a></p>
    <p data-id="110118"><a href="/baojia/changsha">长沙</a></p>
    <p data-id="110119"><a href="/baojia/zhengzhou">郑州</a></p>
    <p data-id="110120"><a href="/baojia/xian">西安</a></p>
    <p data-id="110121"><a href="/baojia/wuhan">武汉</a></p>
    <p data-id="1101191"><a href="/baojia/nanchang">南昌</a></p>
    <p data-id="1101192"><a href="/baojia/lanzhou">兰州</a></p>
    <p data-id="1101193"><a href="/baojia/yichang">宜昌</a></p>
    <p data-id="1101194"><a href="/baojia/kunming">昆明</a></p>
    <p data-id="1101195"><a href="/baojia/guiyang">贵阳</a></p>
    <p data-id="1101196"><a href="/baojia/hanzhong">汉中</a></p>
    <p data-id="1101197"><a href="/baojia/hengyang">衡阳</a></p>
    <span class="city-letter">华南地区</span>
    <p data-id="110122"> <a href="/baojia/guangzhou">广州</a></p>
    <p data-id="110123"><a href="/baojia/shenzhen">深圳</a></p>
    <p data-id="1101231"><a href="/baojia/sanya">三亚</a></p>
    <p data-id="1101232"><a href="/baojia/nanning">南宁</a></p>
    <p data-id="1101233"><a href="/baojia/zhuhai">珠海</a></p>
    <p data-id="1101234"><a href="/baojia/haikou">海口</a></p>
    <p data-id="1101235"><a href="/baojia/guilin">桂林</a></p>
    <p data-id="1101236"><a href="/baojia/foshan">佛山</a></p>
    <p data-id="1101237"><a href="/baojia/huizhou">惠州</a></p>
    <p data-id="1101238"> <a href="/baojia/shantou">汕头</a></p>
    <p data-id="1101239"><a href="/baojia/jiangmen">江门</a></p>
    <p data-id="1101230"><a href="/baojia/dongwan">东莞</a></p>
    <p data-id="11012311"><a href="/baojia/zhanjiang">湛江</a></p>
    </div>
    </div>
    </div>`

$(document).ready(function(){
    $(".container").html(s);
})
