<script type="text/javascript" src="/js/tijiao.js?v1"></script>
<?php if(isset($tenants['pcount']['count']) &&$tenants['pcount']['count']>0 ) { ?>
<div id="zxsl"></div>
<?php } ?>
<?php if(!isset($index)) { ?>
<div class="zxyy down yuyueclick">免费预约咨询 · 3分钟响应</div>
<?php if(isset($tenants['pcount']['count']) &&$tenants['pcount']['count']>0 ) { ?>
<script type="text/javascript">
    $('#zxsl').html('今天已有<?php echo $tenants['pcount']['count'];?>人预约该商家').addClass('alert-success').show().delay(2000).fadeOut();
</script>
<?php } ?>
<?php } ?>