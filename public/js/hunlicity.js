
var s = `<div class="city">
    <div class="city-list">
    <div class="current">
    <span class="city-letter">当前城市</span>
    <p data-id="110100"><?php echo $city;?></p>
</div>
<div class="hot">
    <span class="city-letter">华北东北</span>
    <p data-id="110100"> <a href="/beijing/hunli">北京</a></p>
    <p data-id="110101"> <a href="/tianjin/hunli">天津</a></p>
    <p data-id="110102"><a href="/shenyang/hunli">沈阳</a></p>
    <p data-id="110103"><a href="/dalian/hunli">大连</a></p>
    <p data-id="110104"><a href="/haerbin/hunli">哈尔滨</a></p>
    <p data-id="110105"><a href="/shijiazhuang/hunli">石家庄</a></p>
    <p data-id="1101041"><a href="/taiyuan/hunli">太原</a></p>
    <p data-id="1101042"><a href="/changchun/hunli">长春</a></p>
    <p data-id="1101043"><a href="/tangshan/hunli">唐山</a></p>
    <p data-id="1101044"><a href="/qinhuangdao/hunli">秦皇岛</a></p>
    <p data-id="1101045"><a href="/langfang/hunli">廊坊</a></p>
    <p data-id="1101046"><a href="/baoding/hunli">保定</a></p>
    <p data-id="1101047"><a href="/bangbu/hunli">蚌埠</a></p>
    <p data-id="1101048"><a href="/jinzhou/hunli">锦州</a></p>
    <p data-id="1101049"><a href="/daqing/hunli">大庆</a></p>
    <p data-id="1101040"><a href="/changzhi/hunli">长治</a></p>
    <span class="city-letter">华东地区</span>
    <p data-id="110107"> <a href="/shanghai/hunli">上海</a></p>
    <p data-id="110106"> <a href="/hangzhou/hunli">杭州</a></p>
    <p data-id="110108"><a href="/xiamen/hunli">厦门</a></p>
    <p data-id="110109"><a href="/nanjing/hunli">南京</a></p>
    <p data-id="110110"><a href="/suzhou/hunli">苏州</a></p>
    <p data-id="110111"><a href="/wuxi/hunli">无锡</a></p>
    <p data-id="110112"><a href="/ningbo/hunli">宁波</a></p>
    <p data-id="110113"><a href="/fuzhou/hunli">福州</a></p>
    <p data-id="110114"><a href="/qingdao/hunli">青岛</a></p>
    <p data-id="110115"><a href="/hefei/hunli">合肥</a></p>
    <p data-id="1101121"><a href="/jinan/hunli">济南</a></p>
    <p data-id="1101122"><a href="/changzhou/hunli">常州</a></p>
    <p data-id="1101123"><a href="/wenzhou/hunli">温州</a></p>
    <p data-id="1101124"><a href="/quanzhou/hunli">泉州</a></p>
    <p data-id="1101125"><a href="/nantong/hunli">南通</a></p>
    <p data-id="1101126"><a href="/xuzhou/hunli">徐州</a></p>
    <p data-id="1101127"><a href="/wuhu/hunli">芜湖</a></p>
    <p data-id="1101128"><a href="/weifang/hunli">潍坊</a></p>
    <p data-id="1101129"><a href="/yangzhou/hunli">扬州</a></p>
    <p data-id="1101120"><a href="/jinhua/hunli">金华</a></p>
    <p data-id="11011"><a href="/linyi/hunli">临沂</a></p>
    <p data-id="11012"><a href="/huzhou/hunli">湖州</a></p>
    <p data-id="11013"><a href="/yancheng/hunli">盐城</a></p>
    <p data-id="11014"><a href="/shaoxing/hunli">绍兴</a></p>
    <p data-id="11015"><a href="/jiaxing/hunli">嘉兴</a></p>
    <p data-id="11016"><a href="/huaian/hunli">淮安</a></p>
    <p data-id="11017"><a href="/maanshan/hunli">马鞍山</a></p>
    <p data-id="11018"><a href="/taian/hunli">泰安</a></p>
    <span class="city-letter">中部西部</span>
    <p data-id="110116"><a href="/chengdu/hunli">成都</a></p>
    <p data-id="110117"><a href="/chongqing/hunli">重庆</a></p>
    <p data-id="110118"><a href="/changsha/hunli">长沙</a></p>
    <p data-id="110119"><a href="/zhengzhou/hunli">郑州</a></p>
    <p data-id="110120"><a href="/xian/hunli">西安</a></p>
    <p data-id="110121"><a href="/wuhan/hunli">武汉</a></p>
    <p data-id="1101191"><a href="/nanchang/hunli">南昌</a></p>
    <p data-id="1101192"><a href="/lanzhou/hunli">兰州</a></p>
    <p data-id="1101193"><a href="/yichang/hunli">宜昌</a></p>
    <p data-id="1101194"><a href="/kunming/hunli">昆明</a></p>
    <p data-id="1101195"><a href="/guiyang/hunli">贵阳</a></p>
    <p data-id="1101196"><a href="/hanzhong/hunli">汉中</a></p>
    <p data-id="1101197"><a href="/hengyang/hunli">衡阳</a></p>
    <span class="city-letter">华南地区</span>
    <p data-id="110122"> <a href="/guangzhou/hunli">广州</a></p>
    <p data-id="110123"><a href="/shenzhen/hunli">深圳</a></p>
    <p data-id="1101231"><a href="/sanya/hunli">三亚</a></p>
    <p data-id="1101232"><a href="/nanning/hunli">南宁</a></p>
    <p data-id="1101233"><a href="/zhuhai/hunli">珠海</a></p>
    <p data-id="1101234"><a href="/haikou/hunli">海口</a></p>
    <p data-id="1101235"><a href="/guilin/hunli">桂林</a></p>
    <p data-id="1101236"><a href="/foshan/hunli">佛山</a></p>
    <p data-id="1101237"><a href="/huizhou/hunli">惠州</a></p>
    <p data-id="1101238"> <a href="/shantou/hunli">汕头</a></p>
    <p data-id="1101239"><a href="/jiangmen/hunli">江门</a></p>
    <p data-id="1101230"><a href="/dongwan/hunli">东莞</a></p>
    <p data-id="11012311"><a href="/zhanjiang/hunli">湛江</a></p>
    </div>
    </div>
    </div>`

$(document).ready(function(){
    $(".container").html(s);
})
