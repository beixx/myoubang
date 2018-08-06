<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/merchant/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/merchant/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/merchant/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/merchant/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/merchant/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/merchant/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/merchant/static/h-ui.admin/css/style.css" />

    <link href="/css/foundation.min.css" rel="stylesheet" type="text/css">
    <link href="/css/foundation-datepicker.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">

    <!--[if IE 6]>
    <script type="text/javascript" src="/merchant/lib/DD_belatedPNG_0.0.8a-min.js" ></script>

    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>新增图片</title>

    <style >
        .lftat{
            float: left;
            border: 1px solid #09F;
            border-radius: 5px;
            width: 170px;
            height: 150px;
            margin-top: 5px;
            margin-left: 5px;
            overflow: hidden;
            position: relative;
            background-color: #099;
        }
        .close {
            width: 23px;
            height: 23px;
            background: url(//c.youbangkeyi.com/images/close.png);
            position: absolute;
            right: -10px;
            top: -10px;
        }
    </style>
</head>
<body>
<div class="page-container">
    <form class="form form-horizontal" action="/admin/askNewCityPost" method="post" enctype="multipart/form-data" id="formarticleadd">
        <input type="hidden" name="type" value="{{$type}}" />

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>后缀名称：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="{城市}{类别}" placeholder="" id="" name="name">
            </div>
        </div>


        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                <button onClick="formarticleadd.submit();" class="btn btn-primary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
                <button onClick="layer_close();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/merchant/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/merchant/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/merchant/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/merchant/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/merchant/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/merchant/lib/datatables/1.10.0/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/merchant/lib/laypage/1.2/laypage.js"></script>
<script src="/js/foundation-datepicker.js"></script>
<script src="/js/foundation-datepicker.zh-CN.js"></script>

<script type="text/javascript">
    $('#demo').fdatepicker({
        format: 'yyyy-mm-dd',
    });

    $('.table-sort').dataTable({
        "lengthMenu":false,//显示数量选择
        "bFilter": false,//过滤功能
        "bPaginate": false,//翻页信息
        "bInfo": false,//数量信息
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable":false,"aTargets":[0,7]}// 制定列不参与排序
        ]
    });

    /*查看日志*/
    function system_log_show(){

    }
    /*日志-删除*/
    function system_log_del(obj,id){
        layer.confirm('确认要删除吗？',function(index){
            $.ajax({
                type: 'POST',
                url: '',
                dataType: 'json',
                success: function(data){
                    $(obj).parents("tr").remove();
                    layer.msg('已删除!',{icon:1,time:1000});
                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }
</script>

</body>
</html>