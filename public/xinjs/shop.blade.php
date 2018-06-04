<!DOCTYPE html><html lang="en"><head>    <meta charset="UTF-8">    
 <title>{{$tenantinfo->name}}_有榜{{$tenantinfo->shoptype}}行业榜单「第{{$tenantinfo->order_city}}名」</title>
 <meta name="Keywords" content="{{$tenantinfo->name}},{{$tenantinfo->name}}怎么样,{{$tenantinfo->name}}行业第{{$tenantinfo->order_city}}名">
 <meta name="Description" content="{{$tenantinfo->name}}在{{$tenantinfo->city}}地区{{$tenantinfo->shoptype}}行业综合排名第{{$tenantinfo->order_city}}名，该商户在品牌榜单中排名第{{$tenantinfo->brand_search_order}}名，好评榜单中排名第{{$tenantinfo->praise_order}}名，希望能够帮助您了解到{{$tenantinfo->name}}怎么样的问题。">
<link rel="stylesheet" href="/xincss/style1.css">
<script type="text/javascript" src="http://oxhlcovsf.bkt.clouddn.com/jquery-1.6.min.js"></script>
<script type="text/javascript" src="/xinjs/jquery.SuperSlide.2.1.1.js" ></script>
<script type="text/javascript" src="/xinjs/jquery.reveal.js" ></script>
<script charset="utf-8" src="http://map.qq.com/api/js?v=2.exp&key=WLGBZ-D2Y3P-SSBDA-LLPKT-5T6RJ-BZFF7"></script>
<script type="text/javascript" src="/xinjs/main2.js"></script>
<script type="text/javascript" src="/xinjs/template.js"></script>
<script type="text/javascript" src="/xinjs/timeline.js"></script>
<body><header> <div class="main"> <div class="lft logo"><a href="{{asset($pycity)}}/sheying"><img src="{{asset('xinimage/logo.png')}}"></a> </div>
<div class="city">
	<ul class="nav-main">
		<li id="li-1" class="txtCtr "><font class="area1" id="area" tt="{{$pycity}}">{{$city}}</font><span>[切换]</span></li>            </ul>          
  <!--隐藏盒子-->            <div id="box-1" class="hidden-box hidden-loc-index">          
  <h3>当前所在的地区：<span class="area2">{{$city}}</span></h3>             
  <p class="quyu">华北东北</p>                <p>
  <a href="/beijing/sheying">北京</a>
  <a href="/tianjin/sheying">天津</a>
  <a href="/shenyang/sheying">沈阳</a>
  <a href="/dalian/sheying">大连</a>
  <a href="/haierbin/sheying">哈尔滨</a>
  <a href="/shijiazhuang/sheying">石家庄</a></p>
  <p class="quyu">华东地区</p>                
  <p>                    
  <a href="/shanghai/sheying">上海</a>
  <a href="/hangzhou/sheying">杭州</a>
  <a href="/xiamen/sheying">厦门</a>
  <a href="/nanjing/sheying">南京</a>
  <a href="/suzhou/sheying">苏州</a>
  <a href="/wuxi/sheying">无锡</a>
  <a href="/ningbo/sheying">宁波</a>
  <a href="/fuzhou/sheying">福州</a>
  <a href="/qingdao/sheying">青岛</a>
  <a href="/hefei/sheying">合肥</a></p>
  <p class="quyu">中部西部</p>
  <p>                  
  <a href="/chengdu/sheying">成都</a>
  <a href="/chongqing/sheying">重庆</a>
  <a href="/changsha/sheying">长沙</a>
  <a href="/zhengzhou/sheying">郑州</a>
  <a href="/xian/sheying">西安</a>
  <a href="/wuhan/sheying">武汉</a></p>
  <p class="quyu">华南地区</p>
  <p>                
   <a href="/guangzhou/sheying">广州</a>
   <a href="/shenzhen/sheying">深圳</a></p>      
       </div>     
    </div>     
   <nav>            
    <a href="{{asset($pycity)}}/sheying">首页</a>
            <a href="{{asset($pycity)}}/sheying">婚纱摄影</a>
            <a href="{{asset($pycity)}}/hunli">婚礼策划</a>
            <a rel="nofollow" href="http://youbangkeyi.mikecrm.com/IBLzKFT"  target="_blank">商户入驻</a>
            <a href="/guize.html"  target="_blank">优选算法</a></nav>      
         <div class="search"><ul><form onsubmit="return false;" id="search_form" action="/search/index" method="get" ><li class="li1" style="position: relative;"><input type="text" name="keyword" placeholder="搜索商家" value="" id="search_keyword" autocomplete="off">               <input name="city" type="hidden" value="" id="city">               <button type="submit" id="submit"><svg viewBox="0 0 16 16" class="Icon Icon--search" width="16" height="16" aria-hidden="true" style="height: 16px; width: 16px;"><title></title><g><path d="M12.054 10.864c.887-1.14 1.42-2.57 1.42-4.127C13.474 3.017 10.457 0 6.737 0S0 3.016 0 6.737c0 3.72 3.016 6.737 6.737 6.737 1.556 0 2.985-.533 4.127-1.42l3.103 3.104c.765.46 1.705-.37 1.19-1.19l-3.103-3.104zm-5.317.925c-2.786 0-5.053-2.267-5.053-5.053S3.95 1.684 6.737 1.684 11.79 3.95 11.79 6.737 9.522 11.79 6.736 11.79z"></path></g></svg></button></li></form></ul></div>    </div></header>
<?php if(isset($tenantinfo->isVip) && $tenantinfo->isVip==2){ 
	if(isset($advinfo->id)){
?>
<div id="ff" class="info-box"><div class="shopg">{{$advinfo->content}}</div></div>
<?php }}else{ 
	if(isset($advinfo->id)){
?>
<div id="ff" class="info-box"><div class="shopg">{{$advinfo->content}}</div></div>
<?php }} ?>
<div class="shop-index main">	<?php if(isset($tenantinfo) && isset($tenantinfo->id)){ ?>		
<input type="hidden" value="{{$tenantinfo->id}}" id="tenantId"><div id="f5" class="info-box"><div class="pic-box ff">
<a class="suolvd" href=“/detail/{{$tenantinfo->id}}”><span><img src="{{asset($tenantinfo->cover)}}"></span></a><div class="txt">
<h1>{{$tenantinfo->name}} <?php if($tenantinfo->isVip==2){?><ins class="iconr"></ins><?php }  ?></h1>
<div class="t1">人均消费：<span class="red">¥{{$tenantinfo->person_price}}</span></div>
<div class="t2"><span>营业时间：</span>周一至周日 09:00-18:00<?php if($tenantinfo->isVip==2){?><span class="tc5">|</span><span>联系电话：</span>{{$tenantinfo->phone}}<?php }  ?></div>
<div class="t2"><span>商家地址：</span><a rel="nofollow" target="_blank" href="http://ditu.baidu.com/?s=s%26wd%3D{{$city}}{{$tenantinfo->name}}" >{{$tenantinfo->address}}<em class="dizhi"></em></a></div>
<hr><div class="datas">
        <span class="icon lft"></span>
        <span class="lft txtCtr c1 br1">
            <em><i>{{$tenantinfo->heat_index}}</i></em>
            <p>指数</p>
        </span>
        <span class="lft txtCtr c1 br1">
            <em>Top<i>{{$tenantinfo->order_city}}</i></em>
            <p>综合榜</p>
        </span>
        <span class="lft txtCtr c1 br1">
            <em>Top<i>{{$tenantinfo->brand_search_order}}</i></em>
            <p>品牌榜</p>
        </span>
        <span class="lft txtCtr c1">
            <em>Top<i>{{$tenantinfo->praise_order}}</i></em>
            <p>好评榜</p>
        </span>
</div><hr>
<div class="submit">
<a rel="nofollow" target="_blank" href="<?php if($tenantinfo->isVip==2){  if($tenantinfo->pcadv){ echo  $tenantinfo->pcadv;}else{ echo 'javascript:void(0);';}}else{ echo 'javascript:void(0);'; } ?>" <?php if($tenantinfo->isVip==2){  if($tenantinfo->pcadv){ }else{?>data-reveal-id="myModal" data-animation="fade"<?php }}else{ ?> data-reveal-id="myModal" data-animation="fade" <?php } ?>>咨询商家</a>
<span class="zxyh">线上咨询或预约有优惠哦!<em></em></span>
</div>	
<div class="hot txtCtr">	                
<a rel="nofollow" href="/dafen/{{$pycity}}/{{$tenantinfo->id}}">打榜</a></div></div></div></div><?php }?>    
<div id="d_tab1" class="J_item info-box">
<div class="infoTab" id="infoTab" style="position:static;left:50%;margin-left:-620px;top:0;">
<div class="tit paiming">
<?php if($tenantinfo->isVip==2){?><div class="slogo"><img src="{{asset($tenantinfo->logo)}}" width="100px" height="100px"></div><?php }  ?>
<ul><li class="cur choose"><a href="#d_tab1">数据展示</a></li>
<li class="choose"><a href="#d_tab2">精选套系</a></li>
<li class="choose"><a href="#d_tab3">客片欣赏</a></li>
<li class="choose"><a href="#d_tab4">点评打榜</a></li>
<a rel="nofollow" class="zixun" target="_blank" href="<?php if($tenantinfo->isVip==2){  if($tenantinfo->pcadv){ echo  $tenantinfo->pcadv;}else{ echo 'javascript:void(0);';}}else{ echo 'javascript:void(0);'; } ?>" <?php if($tenantinfo->isVip==2){  if($tenantinfo->pcadv){ }else{?>data-reveal-id="myModal" data-animation="fade"<?php }}else{ ?> data-reveal-id="myModal" data-animation="fade" <?php } ?>>咨询商家</a>
</ul></div></div>
<div class="data">
<div class="title juzhong fB">
<span class="enbg">Most Popular Set Meal</span><b>数据概况</b></div>
<div class="hd">数据更新时间：2017-02-24</div> 
            <table width="100%" border="0" cellspacing="0" style="margin-top: 25px;" cellpadding="0">
                <tr style="background:#f5f5f5;">
                    <th align="left" width="120"></th>
                    <th align="center">品牌搜索</th>
                    <th align="center">全网好评</th>
                    <th align="center">全网差评</th>
                </tr>
                <tr>
                    <th align="right" class="bor">昨日数据</th>
                    <td class="bor" align="center"><em><?php if(isset($searchinfo->yesterday_search_nums)){ echo $searchinfo->yesterday_search_nums; }else{ echo ' - '; } ?>次</em></td>
                    <td class="bor" align="center"><em><?php if(isset($searchinfo->yesterday_praise_num)){ echo $searchinfo->yesterday_praise_num; }else{ echo ' - '; } ?>条</em></td>
                    <td class="bor" align="center"><em><?php if(isset($searchinfo->yesterday_bad_num)){ echo $searchinfo->yesterday_bad_num; }else{ echo ' - '; } ?>条</em></td>
                </tr>
                <tr style="background:#f5f5f5;">
                    <th align="right" class="bor">近一周</th>
                    <td class="bor" align="center"><?php if(isset($searchinfo->week_search_nums)){ echo $searchinfo->week_search_nums; }else{ echo ' - '; } ?>次</td>
                    <td class="bor" align="center"><?php if(isset($searchinfo->week_praise_num)){ echo $searchinfo->week_praise_num; }else{ echo ' - '; } ?>条</td>
                    <td class="bor" align="center"><?php if(isset($searchinfo->week_bad_num)){ echo $searchinfo->week_bad_num; }else{ echo ' - '; } ?>条</td>
                </tr>
                <tr>
                    <th align="right" class="bor">近30天</th>
                    <td class="bor" align="center"><?php if(isset($searchinfo->mouth_search_nums)){ echo $searchinfo->mouth_search_nums; }else{ echo ' - '; } ?>次</td>
                    <td class="bor" align="center"><?php if(isset($searchinfo->mouth_praise_num)){ echo $searchinfo->mouth_praise_num; }else{ echo ' - '; } ?>条</td>
                    <td class="bor" align="center"><?php if(isset($searchinfo->mouth_bad_num)){ echo $searchinfo->mouth_bad_num; }else{ echo ' - '; } ?>条</td>
                </tr>
                <tr style="background:#f5f5f5;">
                    <th align="right" class="bor">总体</th>
                    <td class="bor" align="center"><?php if(isset($searchinfo->all_search_nums)){ echo $searchinfo->praise_num; }else{ echo ' - '; } ?>次</td>
                    <td class="bor" align="center"><?php if(isset($searchinfo->praise_num)){ echo $searchinfo->praise_num; }else{ echo ' - '; } ?>条</td>
                    <td class="bor" align="center"><?php if(isset($searchinfo->bad_num)){ echo $searchinfo->bad_num; }else{ echo ' - '; } ?>条</td>
                </tr>
            </table>           


<div class="data-chart">   <div class="title juzhong fB">
<span class="enbg">New Data Trends</span><b>数据趋势走向</b></div>
<div class="hd">数据更新时间：2017-02-24</div><div class="TxtBox"><div class="tit hd">
<ul><li class="mr39"><a href="javascript:" class="txtCtr lft b1"><em class="icon1"></em>品牌搜索</a></li>
<li><a href="javascript:" class="txtCtr lft b2"><em class="icon2"></em>全网评论</a></li> </ul>                                    </div>                <div class="bd">                                <div class="chart">                        <div id="dbmain" style="width: 960px;height:400px;"></div>                </div>                <div class="chart">                    <div id="dbmain2" style="width: 960px;height:400px;"></div>                </div>                <div class="chart">                    <div id="dbmain3" style="width: 960px;height:400px;"></div>                </div>                </div>                </div>                <script type="text/javascript">jQuery(".TxtBox").slide({trigger:"click"});</script>            </div>        </div></div>
<?php if($countsets){ ?><div id="d_tab2" class="J_item info-box">
<div class="jxuan">            <div class="title juzhong fB">
<span class="enbg">Most Popular Set Meal</span><b>热门套系</b></div>
<div class="multipleColumn">                
<div class="hd">最美套系，拍适合自己的婚纱照</div>
 <div class="bd">
 <div class="ulWrap">				                        
 <ul id="setlist"><!-- 把每次滚动的n个li放到1个ul里面 -->                       
  	<?php                         		if(count($tenantsets)){                     			foreach($tenantsets as $v){	                        	?>                          
  	 <li>                                
  	 <a class="suolvs" href="{{url('detail')}}/{{$tenantinfo->id}}/{{$v->id}}"><span><img src="{{asset($v->cover[0])}}"></span></a>                            
  	 <div class="title " tt="{{$v->id}}"><a href="{{url('detail')}}/{{$tenantinfo->id}}/{{$v->id}}">{{$v->setName}}</a></div>                              
  	 <div class="price">
<span class="red">¥{{$v->currentPrice}}</span><em>原价 ¥{{$v->price}}</em>                                
</div>                                
<?php if(isset($v->kind) && $v->kind)  { ?>
<div class="tag">                                	<?php                              		foreach( $v->kind as $t){                                	?>                                    
<a href="javascript:void(0)">{{$t}}</a>                                    <?php }?>                               
</div> 
<?php } ?>                          
</li>                                                        <?php }}?>                        </ul>						
         </div></div> </div>
<a href="{{ url('txlist') }}/<?php if(isset($tenantinfo) && isset($tenantinfo->id)){ echo $tenantinfo->id; } ?>" class="more">欣赏更多 <sup>MORE+</sup></a>   
</div></div>
<?php } ?>
<?php if($countpics){ ?>
<div id="d_tab3" class="J_item info-box">
<div class="case"><div class="title juzhong fB">
<span class="enbg">Appreciate The Best Pictures</span><b>客片欣赏</b></div><div id="auto1" class="Loop">               
 <div class="hd">                   
 海量高清客片，为您提供更多的借鉴</div>
<div class="bd"><ul id="setpics"> 
<?php if(isset($tenantpics)){                     			foreach($tenantpics as $v){                    		?>	                       
 <li><a class="suolvs" href="{{asset('kpdetail')}}/{{$v->id}}"><span><img src="{{asset($v->cover[0])}}"/></span></a>	                            
 <div class="title"><a href="{{asset('kpdetail')}}/{{$v->id}}">{{$v->picName}}</a></div>
 <div class="bg"></div> </li><?php }}?> </ul>
 </div>
 </div>
 <a href="{{asset('kplist')}}/{{$tenantinfo->id}}" class="more">欣赏更多 <sup>MORE+</sup></a>
 </div></div> 
<?php } ?>
<div id="d_tab4" class="J_item info-box">        <div class="comment_list">                        <div class="title juzhong fB">
<span class="enbg">THIS IS THE USER LIST CONTENT</span><b>网友打榜</b></div>             
<div class="dp-type">
<div class="hd">真实打榜，打榜内容供您借鉴</div></div>
<div class="msg txtCtr">温馨提示：关于{{$tenantinfo->name}}的评分仅供参考，不做为预定及评判商家好坏的依据</div>           
<div id="commentlist">         
<div class="shengji">系统升级中，网友打榜内容暂时无法展示！</div>
</div> 
</div><div class="proMsg"></div></div></div>
<input id="client_ip" type="hidden" value="202.115.81.246">    <input type="hidden" value="search">    <span style="height:30px;display:none" id="city"></span>    <div id="container" class="reveal-modal">    	<a class="close-reveal-modal" style="z-index:inherit;color:red;top: -3px;right: -3px;">×</a> 		<div>		<input id="address" type="textbox" value="{{$tenantinfo->address}}">		<button onclick="codeAddress()">search</button>		</div>		<div id="container"></div></div><div id="myModal" class="reveal-modal">    <div class="title">        <h1 class="txtCtr">有榜，免费为您提供1对1服务</h1>        <div class="txt txtCtr"><em></em><span class="fB">品质服务，百万新人的共同选择</span><em></em></div>    </div>    <a class="close-reveal-modal">&#215;</a>    <div class="login">        <div class="input">            <input type="text" name="name" id="name" value="" placeholder="姓名">        </div>        <div class="input">            <input type="text" name="phone" id="phone" value="" placeholder="手机">        </div>        <div class="submit yvyue">            <input type="submit" name="" value="确定" class="pcsubmit" class="appointment_shop">            <input type='hidden' name="tenantsId" id="tenantsId" value="<?php if(isset($tenantinfo) && isset($tenantinfo->id)){ echo $tenantinfo->id; }?>">        </div>        <div class="msg">确定提交，表示已阅读并同意<a href="/shuoming.html" target="_blank">《有榜服务条款》</a></div>    </div></div>   </div>     <footer class="txtCtr mt0">
<div class="tuijian"><h3>{{$tenantinfo->city}}优选{{$tenantinfo->shoptype}}机构<span>(按综合实力排序)</span></h3><ul>
<?php if(count($dbtenants)){
		foreach($dbtenants as $v){
?>
<li><a target="_blank" href="{{url('detail')}}/{{$v->id}}">{{$v->name}}</a></li><?php }} ?></ul></div>
<div class="foot">
        <div class="foots">
        <span><a href="/about.html">关于有榜</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/E09npdx">商务合作</a>|<a href="/mianze.html">免责说明</a>|<a href="/shuoming.html">服务说明</a>|<a href="#">营业执照</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/zJDl6sd">投诉建议</a>|<a target="_blank" href="http://youbangkeyi.mikecrm.com/QTsqDmZ">CEO信箱</a></span>
        © 2017 有榜 （youbangkeyi.com） 版权所有   京ICP备08107937号-1 北京智慧元素科技有限公司
        </div>
        </div>
</footer>	

<script type="text/javascript">  
//模糊搜索商家
	$('#submit').click(function(){
		var keyword = $('#search_keyword').val();
		var city = $('#area').text();
		var link = $('#area').attr('tt');
		location.href="http://ceshi.youbangkeyi.com/search/"+link+'?keyword='+keyword;
	});
$('.pcsubmit').click(function(){
	var tenantsId = $('#tenantsId').val();					var name = $('#name').val();					var phone = $('#phone').val();					var source = 4;					if(!name){						alert('姓名必填');						return false;							}					if(!phone){						alert('手机必填');						return false;					}					if(phone){						 if(!(/^1[34578]\d{9}$/.test(phone))){ 						        alert("手机号码有误，请重填");  						        return false; 						  } 					}					$.ajax({						url: "http://ceshi.youbangkeyi.com/index/saveview",						type: "post",						dataType: "json",						data: {'tenantsId': tenantsId,'name': name,'phone': phone,'source':source},						success: function(data){							console.log(data);							if(data.result=='00'){								alert('预约成功');								location.reload();							}						}					});                 });                $('.paiming .choose').click(function(){                    $('.choose').removeClass('cur');					$(this).toggleClass('cur');                });				$('.detail').click(function(){					var flag = 'detail'+$(this).attr('tt');					$('#'+flag).submit();				});				$('#nextset').click(function(){					var allsetpage = $('#nextset').attr('tt');					var currentpage = $('#nextset').attr('dd');					var id = $('#tenantId').val();					if(currentpage<allsetpage){						$('#nextset').attr('dd',parseInt(currentpage)+1);						$.ajax({								url: "http://ceshi.youbangkeyi.com/index/detailtaoxi",								type: "get",								dataType: "json",								data: {'id': id,'page': parseInt(currentpage)+1},								success: function(data){									console.log(data);									if(data.result=='00'){										$("#setlist").html(template("setlisttemp",data));											$('.detail').click(function(){											var flag = 'detail'+$(this).attr('tt');											$('#'+flag).submit();										})									}								}							});					}else{						alert('暂无更多数据');						return false;					}				});				$('#prevset').click(function(){					var allsetpage = $('#nextset').attr('tt');					var currentpage = $('#nextset').attr('dd');					var id = $('#tenantId').val();					if(parseInt(currentpage)-1<=0){						alert('当前就是第一页');						return false;					}else{						if(currentpage<=allsetpage){							if(currentpage>1){								$('#nextset').attr('dd',parseInt(currentpage)-1);							}							$.ajax({									url: "http://ceshi.youbangkeyi.com/index/detailtaoxi",									type: "get",									dataType: "json",									data: {'id': id,'page': parseInt(currentpage)-1},									success: function(data){										console.log(data);										if(data.result=='00'){											$("#setlist").html(template("setlisttemp",data));												$('.detail').click(function(){				 								var flag = 'detail'+$(this).attr('tt');				 								$('#'+flag).submit();				 							})										}									}								});						}					}									});                //子导航展开收缩                $(".sewvtop").click(function(){                    $(this).find("em").removeClass("lbaxztop2").addClass("lbaxztop").parents(".sewv").siblings().children(".sewvtop").find("em").removeClass("lbaxztop").addClass(".lbaxztop2");                    $(this).next(".sewvbm").toggle().parents(".sewv").siblings().find(".sewvbm").hide();                });				//定制服务start                $('.xq1').click(function(){					$('.xq1').removeClass('cur');					$(this).addClass('cur');                 });                 $('.xq2').click(function(){					$('.xq2').removeClass('cur');					$(this).addClass('cur');                 });                 $('.yvyue').click(function(){ 					var name = $('#name').val(); 					var phone = $('#phone').val(); 					var tenantsId = $('#tenantsId').val(); 					if(!name){ 						alert('姓名不能为空'); 						return false; 					} 					var phone = $('#phone').val(); 					if(!phone){ 						alert('手机号码不能为空'); 						return false; 					}else{ 						    if(!(/^1[34578]\d{9}$/.test(phone))){  						        alert("手机号码有误，请重填");   						        return false;  						    }  	 				} 					 $.ajax({ 		 					url: "{{ url('index/saveorder') }}", 		 					type: "post", 		 					dataType: "json", 		 					data: {'name': name,'phone': phone,'tenantsId': tenantsId}, 		 					success: function(data){ 		 						if(data.result == "00") 		 						{ 		 							alert('预约成功'); 		 						}else{ 									alert('预约失败'); 			 					}; 		 					} 		 			});  	 			});                                  //定制服务end                /*鼠标离开下拉框关闭*/                $(".sewv").mouseleave(function(){                    $(".sewvbm").hide();                    $(this).children(".sewvtop").find("em").addClass("lbaxztop2");                });                                                //赋值                $(".sewvbm>li").click(function(){                    var selva=$(this).text();                    $(this).parents(".sewvbm").siblings(".sewvtop").find("span").text(selva);                    $(this).parent("ul").hide();                    $(this).parents(".sewv").children(".sewvtop").find("em").addClass("lbaxztop2");                });              //模糊搜索商家    			$('#submit').click(function(){    				var keyword = $('#search_keyword').val();    				var city = $('#area').text();    				location.href="http://ceshi.youbangkeyi.com/"+link+'?city='+city+'?keyword='+keyword;    			});    	
		/*
		$('.cy').click(function(){    				
  	  			$('#area').html($(this).html());    				
  	  			$('.area2').html($(this).html());    				
  	  			var type=$("li").filter(".on").attr('tt');    				
  	  			var city = $(this).html();    				
  	  			var link = $(this).attr('tt')    				
  	  				location.href="http://ceshi.youbangkeyi.com/city/"+link;  		  
  	  			 })	
  	  			 */					
  	  			 $('.active').click(function(){				
  	  	  			 var type=$(this).attr('tt');				
  	  	  			 var city = $('#area').text();				 
  	  	  			 $.ajax({	 					
  	  	  	  			 url: "{{ url('index/search') }}",	 					
  	  	  	  			 type: "post",	 					
  	  	  	  			 dataType: "json",	 					
  	  	  	  			 data: {'type': type,'city': city},	 					
  	  	  	  			 success: function(data){	 						
  	  	  	  	  			 if(data.result=='00'){	 							
  	  	  	  	  	  			 $("#main").html(template("maintemp",data));			 					
  	  	  	  	  	  			 }	 					
	  	  	  	  	  			 }	 			
	  	  	  	  			 });			
	  	  	  			 });			
	  			 var set = 1;									//格式化年收入			template.helper("formatCover",function (covers) {				if(covers){					console.log(covers[0]);					return covers[0];				}else{					return '';				}			});									</script>
</script>
<script type="text/javascript" src="https://cdn.bootcss.com/echarts/3.7.1/echarts.common.min.js"></script>
<script type="text/javascript">
var myChart=echarts.init(document.getElementById('dbmain'));
var option={
    title: {
        text: ''
    },
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data: [
            '全网指数',
            'PC搜索指数',
            '移动搜索指数'
        ]
    },
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    toolbox: {
        feature: {
            saveAsImage: {
                
            }
        }
    },
    xAxis: {
        type: 'category',
        boundaryGap: false,
        data: [
            '9月1日',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12',
            '13',
            '14',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
            '21',
            '22',
            '23',
            '24',
            '25',
            '26',
            '27',
            '28',
            '29',
            '30'
        ]
    },
    yAxis: {
        type: 'value'
    },
    series: [
        {
            name: '全网指数',
            type: 'line',
            stack: '总量',
            data: [
                <?php if(isset($searchs) && count($searchs)){
                    $len=count($searchs)-1;
                    foreach($searchs as $key=>$v){
                        if($len!=$key){
                            echo $v->all_search_nums.',';
                        }else{
                            echo $v->all_search_nums;
                        }
                    }
                }?>
            ]
        },
        {
            name: 'PC搜索指数',
            type: 'line',
            stack: '总量',
            data: [
                <?php if(isset($searchs) && count($searchs)){
                    $len=count($searchs)-1;foreach($searchs as $key=>$v){
                        if($len!=$key){
                            echo $v->pc_search_nums.',';
                        }else{
                            echo $v->pc_search_nums;
                        }
                    }
                }?>
            ]
        },
        {
            name: '移动搜索指数',
            type: 'line',
            stack: '总量',
            data: [
                <?php if(isset($searchs) && count($searchs)){
                    $len=count($searchs)-1;foreach($searchs as $key=>$v){
                        if($len!=$key){
                            echo $v->mobile_search_nums.',';
                        }else{
                            echo $v->mobile_search_nums;
                        }
                    }
                }?>
            ]
        }
    ]
};
	myChart.setOption(option);
	$('.b1').click(function(){
		var myChart=echarts.init(document.getElementById('dbmain'));
		var option={
		    title: {
		        text: ''
		    },
		    tooltip: {
		        trigger: 'axis'
		    },
		    legend: {
		        data: [
		            '全网指数',
		            'PC搜索指数',
		            '移动搜索指数'
		        ]
		    },
		    grid: {
		        left: '3%',
		        right: '4%',
		        bottom: '3%',
		        containLabel: true
		    },
		    toolbox: {
		        feature: {
		            saveAsImage: {
		                
		            }
		        }
		    },
		    xAxis: {
		        type: 'category',
		        boundaryGap: false,
		        data: [
		            '1',
		            '2',
		            '3',
		            '4',
		            '5',
		            '6',
		            '7',
		            '8',
		            '9',
		            '10',
		            '11',
		            '12',
		            '13',
		            '14',
		            '15',
		            '16',
		            '17',
		            '18',
		            '19',
		            '20',
		            '21',
		            '22',
		            '23',
		            '24',
		            '25',
		            '26',
		            '27',
		            '28',
		            '29',
		            '30'
		        ]
		    },
		    yAxis: {
		        type: 'value'
		    },
		    series: [
		        {
		            name: '全网指数',
		            type: 'line',
		            stack: '总量',
		            data: [
		                <?php if(isset($searchs) && count($searchs)){
		                    $len=count($searchs)-1;
		                    foreach($searchs as $key=>$v){
		                        if($len!=$key){
		                            echo $v->all_search_nums.',';
		                        }else{
		                            echo $v->all_search_nums;
		                        }
		                    }
		                }?>
		            ]
		        },
		        {
		            name: 'PC搜索指数',
		            type: 'line',
		            stack: '总量',
		            data: [
		                <?php if(isset($searchs) && count($searchs)){
		                    $len=count($searchs)-1;foreach($searchs as $key=>$v){
		                        if($len!=$key){
		                            echo $v->pc_search_nums.',';
		                        }else{
		                            echo $v->pc_search_nums;
		                        }
		                    }
		                }?>
		            ]
		        },
		        {
		            name: '移动搜索指数',
		            type: 'line',
		            stack: '总量',
		            data: [
		                <?php if(isset($searchs) && count($searchs)){
		                    $len=count($searchs)-1;foreach($searchs as $key=>$v){
		                        if($len!=$key){
		                            echo $v->mobile_search_nums.',';
		                        }else{
		                            echo $v->mobile_search_nums;
		                        }
		                    }
		                }?>
		            ]
		        }
		    ]
		};
			myChart.setOption(option);
	})

	
	$('.b2').click(function(){
    var myChart=echarts.init(document.getElementById('dbmain2'));
    var option={
        title: {
            text: ''
        },
        tooltip: {
            trigger: 'axis'
        },
        legend: {
            data: [
                '全网评价',
                '全网好评',
                '全网差评',
            ]
        },
        grid: {
            left: '3%',
            right: '4%',
            bottom: '3%',
            containLabel: true
        },
        toolbox: {
            feature: {
                saveAsImage: {
                    
                }
            }
        },
        xAxis: {
            type: 'category',
            boundaryGap: false,
            data: [
                '9月1日',
                '2',
                '3',
                '4',
                '5',
                '6',
                '7',
                '8',
                '9',
                '10',
                '11',
                '12',
                '13',
                '14',
                '15',
                '16',
                '17',
                '18',
                '19',
                '20',
                '21',
                '22',
                '23',
                '24',
                '25',
                '26',
                '27',
                '28',
                '29',
                '30'
            ]
        },
        yAxis: {
            type: 'value'
        },
        series: [
            {
                name: '全网评价',
                type: 'line',
                stack: '总量',
                data: [
                    <?php if(isset($searchs) && count($searchs)){
                        $len=count($searchs)-1;
                        foreach($searchs as $key=>$v){
                            if($len!=$key){
                                echo ($v->bad_num+$v->praise_num).',
                                ';
                            }else{
                                echo ($v->bad_num+$v->praise_num);
                            }
                        }
                    }?>
                ]
            },
            {
                name: '全网好评',
                type: 'line',
                stack: '总量',
                data: [
                    <?php if(isset($searchs) && count($searchs)){
                        $len=count($searchs)-1; foreach($searchs as $key=>$v){
                            if($len!=$key){
                                echo $v->praise_num.',
                                ';
                            }else{
                                echo $v->praise_num;
                            }
                        }
                    }?>
                ]
            },
            {
                name: '全网差评',
                type: 'line',
                stack: '总量',
                data: [
                    <?php if(isset($searchs)&&count($searchs)){
                        $len=count($searchs)-1;
                        foreach($searchs as $key=>$v){
                            if($len!=$key){
                                echo $v->bad_num.',
                                ';
                            }else{
                                echo $v->bad_num;
                            }
                        }
                    }?>
                ]
            }
        ]
    };
    myChart.setOption(option);
});
$('.leibie').click(function(){
			var type = $(this).attr('tt');
			if(type==1){
				var gourl = "http://ceshi.youbangkeyi.com/index/googscomment";
			}else if(type==2){
				var gourl = "http://ceshi.youbangkeyi.com/index/badcomment";
			}else if(type==3){
				var gourl = "http://ceshi.youbangkeyi.com/index/zhongcomment";
			}else if(type==4){
				var gourl = "http://ceshi.youbangkeyi.com/index/hastu";
			}else if(type==5){
				var gourl = "http://ceshi.youbangkeyi.com/index/shaidan";
			}else{
				var gourl = "http://ceshi.youbangkeyi.com/index/morecomment";
			}
			var id = {{$tenantinfo->id}};
			$.ajax({
					url: gourl,
					type: "get",
					dataType: "json",
					data: {'id': id,'page': 1},
					success: function(data){
						console.log(data);
						if(data.result=='00'){
							if(type!=0){
								$('#more').css('display','none');
							}else{
								$('#more').css('display','block');
							}
							$("#commentlist").html(template("commentlistTemp",data));	
 						}
					}
			});
		})
</script>
   </body></html>