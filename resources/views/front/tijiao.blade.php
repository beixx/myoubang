<div class="bgDiv"></div>
<div class="downNav">
    <div class="ask">
    <div class="tijiao"><p>提交信息，立即预约咨询商家</p>
<p class="current-li"><?php echo $tenants['package']?$tenants['package']:'是否有优惠？预约时请咨询商家';?></p></div>
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="hidden" name="source" id="source" value="1">
        <input type="tel" name="mobile" id="mobile" class="input" placeholder="请输入您的手机号（<?php echo $tenants['package']?$tenants['package']:'免费赠送超值结婚大礼包';?>）">
        <button type="submit" name="wapsubmit" id="tijiao" class="btn">免费预约咨询 · 3分钟响应</button>
    </div>
    <div class="tishik" style="display:none;"  >
        <div class="tishizi"><p>预约成功</p></div>
        <?php foreach($spread as $v) { ?>
        <div class="pic_box bdtj">
            <div class="num_txt">
                <div class="tit_box">
                    <div class="title"><span class="icot1"></span><a href="/detail/<?php echo $v['id'];?>"><?php echo $v['name'];s?></a></div>
                    <div class="txt"><span>人均消费 ¥4279</span><span>新街口地区</span><span class="fmr">本周用户预约最多商家</span>
                    </div>
                </div>
            </div>
            <div class="pic txtCtr">
                <div class="img">
                    <a class="suolv" href="/detail/14">
                        <span>
                            <img src="//img2.youbangkeyi.com/merchant/af9/0a2/dfc/3091d86c09a002e144f4ec506eada3d7.jpg?imageView2/1/w/300/h/250/q/75|imageslim">
                        </span>
                    </a>
                </div>
                <div class="img">
                    <a class="suolv" href="/detail/14">
                        <span>
                            <img src="//img2.youbangkeyi.com/merchant/325/fe2/8c2/67ed94744426295f96268f4ac1881b46.jpg?imageView2/1/w/300/h/250/q/75|imageslim">
                        </span>
                    </a>
                </div>
                <div class="img">
                    <a class="suolv" href="/detail/14">
                        <span>
                            <img src="//img2.youbangkeyi.com/merchant/8dd/5e1/dc6/798ed7d4ee7138d49b8828958048130a.jpg?imageView2/1/w/300/h/250/q/75|imageslim">
                        </span>
                    </a>
                </div>
            </div>
            <div class="yuyue">
                <i></i><span>滴滴专车接送+情侣对戒</span>
                <a class="discount-btn" href="/detail/14">去看看</a>
            </div>
            <div class="daodian"><span class="icot2"></span>
                <a class="sybj" href="/detail/14">查看商家详情</a>
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
        $("#tijiao").html("免费获取报价 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，立刻获取案例报价！");
    })
    $(".yuyueclick").click(function(){
        $("#source").val(1);
        $("#tijiao").html("免费预约咨询 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，商家3分钟响应！");
    })
    $(".liwuclick").click(function(){
        $("#source").val(2);
        $("#tijiao").html("免费领取优惠 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，领取优惠！");
    })

    $(".dangqiclick").click(function(){
        $("#source").val(4);
        $("#tijiao").html("免费咨询档期 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，优先安排拍摄档期！");
    })
    });
</script>
