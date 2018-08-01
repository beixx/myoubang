<script type="text/javascript" src="/js/tijiao.js?v2"></script>
<?php if(isset($tenants['pcount']['count']) &&$tenants['pcount']['count']>0 ) { ?>
<div id="zxsl"></div>
<?php } ?>
<?php if(!isset($index)) { ?>
<div class="zxyy"><a href="<?php echo '/'.$pycity.'/'.($tenants['shoptype']=='婚纱摄影'?'sheying':'hunli');?>">2018<?php echo $city;?><?php if($type=='sheying') { ?>婚纱摄影<?php } else { ?>婚庆公司<?php } ?>排行榜</a></div>
<?php } ?>