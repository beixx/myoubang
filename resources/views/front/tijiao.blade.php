<div class="bgDiv"></div><div class="downNav"><div class="ask"><div class="tijiao"><p id="titlefield"></p><p class="current-li"><em>预约礼</em><?php echo isset($tenants['package'])?$tenants['package']:'是否有优惠？预约时请咨询商家';?></p></div><input type="hidden" name="tenantsId" id="tenantsId" value="<?php echo $tenants['id']??'';?>"><input type="hidden" name="ismobile" id="ismobile" value="<?php echo $ismobile??0;?>"><input type="hidden" name="source" id="source" value="1"><input type="tel" name="mobile" id="mobile" class="input" placeholder="请输入您的手机号 · 商家3分钟内会联系您！"><button type="submit" name="wapsubmit" id="tijiao" class="btn"></button></div><div class="tishik" style="display:none;"><div class="tishizi"><p>预约成功</p></div></div></div>