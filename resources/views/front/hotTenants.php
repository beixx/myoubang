
<div class="tuijian"><h3><b>当前城市TOP24商家</b><span>(排名依次排序)</span></h3><ul>
        <?php foreach( $hotTenants as $v) {?>
        <li><a target="_blank" href="/detail/<?php echo $v['id'];?>"><?php echo $v['positionCity'].$v['name'];?></a></li>
        <?php }?>

    </ul></div>
