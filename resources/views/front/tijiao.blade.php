<div class="bgDiv"></div>
<div class="downNav">
    <div class="ask">
    <div class="tijiao"><p id="titlefield">提交信息，立即预约咨询商家</p>
<p class="current-li"><em>预约礼</em><?php echo $tenants['package']?$tenants['package']:'是否有优惠？预约时请咨询商家';?></p></div>
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="hidden" name="source" id="source" value="1">
        <input type="tel" name="mobile" id="mobile" class="input" placeholder="请输入您的手机号（<?php echo $tenants['package']?$tenants['package']:'免费赠送超值结婚大礼包';?>）">
        <button type="submit" name="wapsubmit" id="tijiao" class="btn">免费预约咨询 · 3分钟响应</button>
    </div>
    <div class="tishik" style="display:none;"  >
        <div class="tishizi"><p>预约成功</p></div>
        <?php foreach($spread as $v) { ?>
        <div class="tit">猜你还喜欢</div>
        <div class="pic_box bdtj">
            <div class="num_txt">
                <div class="tit_box">
                    <div class="title"><span class="icot1"></span><a href="/detail/<?php echo $v['id'];?>"><?php echo $v['name'];?></a></div>
                    <div class="txt"><span>人均消费 ¥<?php echo $v['price'];?></span>
                        <span><?php echo $v['area'];?></span>
                        <span class="fmr"><?php echo $v['spreadcontent']?></span>
                    </div>
                </div>
            </div>
            <div class="pic txtCtr">
                <?php $i = 0 ;?>
                <?php foreach($v['taoxi'] as $v2) { if($i++ >2) break;  ?>
                <?php if(isset($v2['cover'][0])) { ?>
                <div class="img">
                    <a class="suolv" href="/detail/<?php echo $v['id'];?><?php echo isset($_GET['from'])? '?from='.$_GET['from'] : ''?>">
                        <span>
                            <?php if(strpos($v2['cover'][0],'http') === false) {?>
                            <img src="//img2.youbangkeyi.com<?php echo $v2['cover'][0];?>?<?php echo  $ismobile?"imageView2/1/w/300/h/250/q/75":'imageView2/1/w/464/h/387/q/75';?>|imageslim">
                            <?php } else {?>
                            <img src="<?php echo $v2['cover'][0];?>?imageView2/1/w/300/h/250/q/75|imageslim">
                            <?php } ?>
                        </span>
                    </a>
                </div>
                <?php } ?>
                <?php } ?>
            </div>
            <div class="yuyue">
                <i></i><span><?php echo $v['package'];?></span>
                <a class="discount-btn" href="/detail/<?php echo $v['id'];?>">去看看</a>
            </div>
            <div class="daodian"><span class="icot2"></span>
                <a class="sybj" href="/detail/<?php echo $v['id'];?>">查看商家详情</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<script type="text/javascript">
    $('button[name=wapsubmit]').click(function(){
        var tenantsId = $('#tenantsId').val();
        var phone = $('#mobile').val();
        var source = $("#source").val();

        if(!phone){
            alert('手机必填');
            return false;
        }
        if(phone){
            if(!(/^1[34578]\d{9}$/.test(phone))){
                alert("亲，手机号码填写的不对哦");
                return false;
            }
        }
        $(this).attr('disabled', true);
        $.ajax({
            url: "/saveview",
            type: "post",
            dataType: "json",
            data: {'tenantsId': tenantsId,'phone': phone,'source':source},
            success: function(data){
                console.log(data);
                if(data.result=='00'){
                    $(".ask").css("display","none");
                    $(".tishik").css("display","block");
		}
            }
        });
    });
    $(function(){
    $(".anliclick").click(function(){
        $("#source").val(3);
        $("#titlefield").html("提交信息，快速获取报价");
        $("#tijiao").html("免费获取报价 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，立刻获取案例报价！");
    })
    $(".yuyueclick").click(function(){
        $("#source").val(1);
        $("#titlefield").html("提交信息，快速预约咨询");
        $("#tijiao").html("免费预约咨询");
        $("#mobile").attr("placeholder","请输入手机号，商家3分钟响应！");
    })
    $(".liwuclick").click(function(){
        $("#source").val(2);
        $("#titlefield").html("提交信息，领取优惠并预约");
        $("#tijiao").html("免费领取优惠 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，领取优惠！");
    })

    $(".dangqiclick").click(function(){
        $("#source").val(4);
        $("#titlefield").html("提交信息，预约拍摄档期");
        $("#tijiao").html("免费咨询档期 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，优先安排拍摄档期！");
    })
    });
</script>
<div id="zxsl"></div>
<div class="zxyy"><em class="down yuyueclick">免费预约咨询 · 3分钟响应</em></div>
    <?php if(isset($tenants['pcount']['count']) &&$tenants['pcount']['count']>0 ) { ?>
    <script type="text/javascript">
    $('#zxsl').html('今天已有<?php echo $tenants['pcount']['count'];?>人预约该商家').addClass('alert-success').show().delay(3000).fadeOut();
    </script>
    <?php } ?>
