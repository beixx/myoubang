
<div class="tuijian"><h3>热门城市婚纱摄影榜单<span>(城市排名不分先后)</span></h3><ul>
        <?php foreach( $hotTenants as $v) {?>
        <li><a target="_blank" href="/detail/<?php echo $v['id'];?>"><?php echo $v['positionCity'].$v['name'];?></a></li>
        <?php }?>

    </ul></div>
