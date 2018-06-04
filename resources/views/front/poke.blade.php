<div class="downNav bt00">
    <div class="ask">
        <input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id'];?>">
        <input type="hidden" name="source" id="source" value="1">
        <input type="number" name="mobile" id="mobile" class="input" placeholder="请输入您的手机号（<?php echo $tenants['package']?$tenants['package']:'免费赠送超值结婚大礼包';?>）">
        <button type="submit" name="wapsubmit" id="tijiao" class="btn">免费预约咨询 · 3分钟响应</button>
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
                    alert("预约成功" + '\n' + "请注意接听商家的来电！");
                    <?php if($tenants['isVip'] ==2) { ?>
                            location.href="<?php echo $tenants['modeladvurl'];?>";
                    <?php } else {?>
                        location.reload();
                    <?php } ?>
                }
            }
        });
    });
    $(".anliclick").click(function(){
        $("#source").val(3);
        $("#tijiao").html("免费获取报价 · 3分钟响应");
        $("#mobile").attr("placeholder","请输入手机号，立刻获取案例报价！");
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
</script>