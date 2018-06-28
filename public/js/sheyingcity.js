
var s = `<div class="city">
    <div class="city-list">
    <div class="current">
    <span class="city-letter">当前城市</span>
    <p data-id="110100"><?php echo $city;?></p>
</div>
<div class="hot">
    <span class="city-letter">华北东北</span>
    <p data-id="110100"> <a href="/beijing/sheying">北京</a></p>
    <p data-id="110101"> <a href="/tianjin/sheying">天津</a></p>
    <p data-id="110102"><a href="/shenyang/sheying">沈阳</a></p>
    <p data-id="110103"><a href="/dalian/sheying">大连</a></p>
    <p data-id="110104"><a href="/haerbin/sheying">哈尔滨</a></p>
    <p data-id="110105"><a href="/shijiazhuang/sheying">石家庄</a></p>
    <p data-id="1101041"><a href="/taiyuan/sheying">太原</a></p>
    <p data-id="1101042"><a href="/changchun/sheying">长春</a></p>
    <p data-id="1101043"><a href="/tangshan/sheying">唐山</a></p>
    <p data-id="1101044"><a href="/qinhuangdao/sheying">秦皇岛</a></p>
    <p data-id="1101045"><a href="/langfang/sheying">廊坊</a></p>
    <p data-id="1101046"><a href="/baoding/sheying">保定</a></p>
    <p data-id="1101047"><a href="/bangbu/sheying">蚌埠</a></p>
    <p data-id="1101048"><a href="/jinzhou/sheying">锦州</a></p>
    <p data-id="1101049"><a href="/daqing/sheying">大庆</a></p>
    <p data-id="1101040"><a href="/changzhi/sheying">长治</a></p>
    <span class="city-letter">华东地区</span>
    <p data-id="110107"> <a href="/shanghai/sheying">上海</a></p>
    <p data-id="110106"> <a href="/hangzhou/sheying">杭州</a></p>
    <p data-id="110108"><a href="/xiamen/sheying">厦门</a></p>
    <p data-id="110109"><a href="/nanjing/sheying">南京</a></p>
    <p data-id="110110"><a href="/suzhou/sheying">苏州</a></p>
    <p data-id="110111"><a href="/wuxi/sheying">无锡</a></p>
    <p data-id="110112"><a href="/ningbo/sheying">宁波</a></p>
    <p data-id="110113"><a href="/fuzhou/sheying">福州</a></p>
    <p data-id="110114"><a href="/qingdao/sheying">青岛</a></p>
    <p data-id="110115"><a href="/hefei/sheying">合肥</a></p>
    <p data-id="1101121"><a href="/jinan/sheying">济南</a></p>
    <p data-id="1101122"><a href="/changzhou/sheying">常州</a></p>
    <p data-id="1101123"><a href="/wenzhou/sheying">温州</a></p>
    <p data-id="1101124"><a href="/quanzhou/sheying">泉州</a></p>
    <p data-id="1101125"><a href="/nantong/sheying">南通</a></p>
    <p data-id="1101126"><a href="/xuzhou/sheying">徐州</a></p>
    <p data-id="1101127"><a href="/wuhu/sheying">芜湖</a></p>
    <p data-id="1101128"><a href="/weifang/sheying">潍坊</a></p>
    <p data-id="1101129"><a href="/yangzhou/sheying">扬州</a></p>
    <p data-id="1101120"><a href="/jinhua/sheying">金华</a></p>
    <p data-id="11011"><a href="/linyi/sheying">临沂</a></p>
    <p data-id="11012"><a href="/huzhou/sheying">湖州</a></p>
    <p data-id="11013"><a href="/yancheng/sheying">盐城</a></p>
    <p data-id="11014"><a href="/shaoxing/sheying">绍兴</a></p>
    <p data-id="11015"><a href="/jiaxing/sheying">嘉兴</a></p>
    <p data-id="11016"><a href="/huaian/sheying">淮安</a></p>
    <p data-id="11017"><a href="/maanshan/sheying">马鞍山</a></p>
    <p data-id="11018"><a href="/taian/sheying">泰安</a></p>
    <span class="city-letter">中部西部</span>
    <p data-id="110116"><a href="/chengdu/sheying">成都</a></p>
    <p data-id="110117"><a href="/chongqing/sheying">重庆</a></p>
    <p data-id="110118"><a href="/changsha/sheying">长沙</a></p>
    <p data-id="110119"><a href="/zhengzhou/sheying">郑州</a></p>
    <p data-id="110120"><a href="/xian/sheying">西安</a></p>
    <p data-id="110121"><a href="/wuhan/sheying">武汉</a></p>
    <p data-id="1101191"><a href="/nanchang/sheying">南昌</a></p>
    <p data-id="1101192"><a href="/lanzhou/sheying">兰州</a></p>
    <p data-id="1101193"><a href="/yichang/sheying">宜昌</a></p>
    <p data-id="1101194"><a href="/kunming/sheying">昆明</a></p>
    <p data-id="1101195"><a href="/guiyang/sheying">贵阳</a></p>
    <p data-id="1101196"><a href="/hanzhong/sheying">汉中</a></p>
    <p data-id="1101197"><a href="/hengyang/sheying">衡阳</a></p>
    <span class="city-letter">华南地区</span>
    <p data-id="110122"> <a href="/guangzhou/sheying">广州</a></p>
    <p data-id="110123"><a href="/shenzhen/sheying">深圳</a></p>
    <p data-id="1101231"><a href="/sanya/sheying">三亚</a></p>
    <p data-id="1101232"><a href="/nanning/sheying">南宁</a></p>
    <p data-id="1101233"><a href="/zhuhai/sheying">珠海</a></p>
    <p data-id="1101234"><a href="/haikou/sheying">海口</a></p>
    <p data-id="1101235"><a href="/guilin/sheying">桂林</a></p>
    <p data-id="1101236"><a href="/foshan/sheying">佛山</a></p>
    <p data-id="1101237"><a href="/huizhou/sheying">惠州</a></p>
    <p data-id="1101238"> <a href="/shantou/sheying">汕头</a></p>
    <p data-id="1101239"><a href="/jiangmen/sheying">江门</a></p>
    <p data-id="1101230"><a href="/dongwan/sheying">东莞</a></p>
    <p data-id="11012311"><a href="/zhanjiang/sheying">湛江</a></p>
    </div>
    </div>
    </div>`

$(document).ready(function(){
    $(".container").html(s);
})
