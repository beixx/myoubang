<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="lib/html5shiv.js"></script>
    <script type="text/javascript" src="lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/merchant/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/merchant/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/merchant/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/merchant/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/merchant/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/merchant/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>品牌管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商户管理 <span class="c-gray en">&gt;</span> 案例管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
    <div class="text-c">

    </div>

    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="" value=""></th>
                <th width="70">ID</th>
                <th width="80">手机</th>
                <th width="200">商户id</th>
                <th width="200">状态</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($poke as $k => $v) { ?>
            <?php $status = [
                1=>'商户',
                2=> "礼物",
                3 => '案例',
                4=> "套系",
                5=> '推荐'
            ];?>
            <tr class="text-c">
                <td><input name="" type="checkbox" value="<?php echo $v->id;?>"></td>
                <td><?php echo $v->id;?></td>
                <td><?php echo $v->phone;?></td>
                <td><?php echo $v->tenantsId;?></td>
                <td><?php echo date("Y-m-d H:i:s",$v->ctime);?></td>
                <td><?php echo $status[$v['source']]??'未知';?></td>
                <td class="f-14 product-brand-manage">
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
        <div class="paging_simple_numbers" id="DataTables_Table_0_paginate">
            <?php echo $poke->render();?>
        </div>
    </div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/merchant/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/merchant/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/merchant/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/merchant/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/merchant/lib/jquery.contextmenu/jquery.contextmenu.r2.js"></script>
<script type="text/javascript">
    $(function(){
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
    function myselfinfo(){
        layer.open({
            type: 1,
            area: ['300px','200px'],
            fix: false, //不固定
            maxmin: true,
            shade:0.4,
            title: '查看信息',
            content: '<div>管理员信息</div>'
        });
    }

    /*资讯-添加*/
    function article_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*图片-添加*/
    function picture_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*产品-添加*/
    function product_add(title,url){
        var index = layer.open({
            type: 2,
            title: title,
            content: url
        });
        layer.full(index);
    }
    /*用户-添加*/
    function member_add(title,url,w,h){
        layer_show(title,url,w,h);
    }


</script>


<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/merchant/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/merchant/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/merchant/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">

</script>
</body>
</html>