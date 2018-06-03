<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/html5shiv.js"></script>
    <script type="text/javascript" src="lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="static/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="lib/Hui-iconfont/1.0.8/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="static/h-ui.admin/css/style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>我的桌面</title>
</head>
<body>
<div class="page-container">
    <p class="f-20 text-success">欢迎使用有榜网商家后台管理 <span class="f-14">v3.1</span></p>

    <style>
        .tongji {
            display: block;
            display: block;
            overflow: hidden;
            border-bottom: 1px solid #ccc;
            font-size: 14px;
            background: #F5F5F5;
            width: 98%;
            padding: 10px 12px;
            overflow: hidden;
        }

        .table-bordered td {
            border-top: 1px solid #c4c4c4;
        }

        .tongji span {
            width: 25%;
            float: left;
            padding: 10px 4%;
        }

        .shuoming {
            font-size: 12px;
            color: #ff6c32;
            margin: 20px 0;
            background: #fffaea;
            padding: 5px 20px;
        }

        .responsive {
            width: 100%;
            text-align: center;
        }

        .tongji em {
            font-size: 14px;
            font-weight: bold;
            font-style: initial;
        }
        .paging_simple_numbers{
            width: 100%;
            height: 30px;
            font-size:12px;
        }
        .pagination {
            margin-top: 5px;
            width:100%;
            height: 24px;
        }
        .paging_simple_numbers ul li {
            float:left;
            display: block;
            margin: 4px;
            padding: 2px  10px ;
            text-align: center;
            width:auto;
            border: 1px solid #eee;
        }
        .paging_simple_numbers ul .active{
            border: 0px solid #eee;
        }
    </style>

    <div class="tongji" style="margin-top: 35px;">
        <span>今日获客:<em><?php echo $c1;?>（人）</em></span>
        <span>本周获客:<em><?php echo $c2;?>（人）</em></span>
        <span>本月获客:<em><?php echo $c3;?>（人）</em></span></div>
    <div class="tongji">

        <span></span>
        <span>消耗积分:<?php echo $conscore;?></span>
        <span>剩余积分:<?php echo $user["balascore"];?></span>

    </div>
    <div class="shuoming">
        说明：积分变换时，如果该手机号同时预约两家商家，那么积分扣除金额会按照80%扣除。如果预约三家时，按照60扣除。四家及以上按照50%扣除。
    </div>
    <div>

        <table class="responsive table table-bordered">
            <thead>
            <tr>
                <th>添加时间</th>
                <th>用户手机号</th>
                <th>预约来源</th>
                <th>积分变换</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($poke as $v ) { ?>
            <tr>
                <td><?php echo date("Y-m-d H:i:s",$v->ctime);?></td>
                <td><?php echo $v->type==1?$v->phone:"******";?></td>
                <td>手机页面 </td>
                <td><?php echo $v->score;?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="paging_simple_numbers" id="DataTables_Table_0_paginate">
            <?php echo $poke->render();?>
        </div>
    </div>


</div>
<footer class="footer mt-20">
    <div class="container">
        <p>本后台系统由北京有榜信息科技有限公司提供前端技术支持</p>
    </div>
</footer>
<script type="text/javascript" src="lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/merchant/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/merchant/lib/layer/2.4/layer.js"></script>

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/merchant/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
    $(function () {
        /*$("#min_title_list li").contextMenu('Huiadminmenu', {
         bindings: {
         'closethis': function(t) {
         console.log(t);
         if(t.find("i")){
         t.find("i").trigger("click");
         }
         },
         'closeall': function(t) {
         alert('Trigger was '+t.id+'\nAction was Email');
         },
         }
         });*/
    });
    /*个人信息*/
    function myselfinfo() {
        layer.open({
            type: 1,
            area: ['300px', '200px'],
            fix: false, //不固定
            maxmin: true,
            shade: 0.4,
            title: '查看信息',
            content: '<div>管理员信息</div>'
        });
    }

    /*资讯-添加*/
    function article_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*图片-添加*/
    function picture_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*产品-添加*/
    function product_add(title, url) {
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*用户-添加*/
    function member_add(title, url, w, h) {
        layer_show(title, url, w, h);
    }


</script>

<!--此乃百度统计代码，请自行删除-->

<!--/此乃百度统计代码，请自行删除-->
</body>
</html>