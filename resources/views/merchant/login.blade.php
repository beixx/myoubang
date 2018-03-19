<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/merchant/lib/html5.js"></script>
    <script type="text/javascript" src="/merchant/lib/respond.min.js"></script>
    <script type="text/javascript" src="/merchant/lib/PIE_IE678.js"></script>
    <![endif]-->
    <link href="/merchant/static/h-ui/css/H-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/merchant/static/h-ui.admin/css/H-ui.login.css" rel="stylesheet" type="text/css" />
    <link href="/merchant/static/h-ui.admin/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/merchant/lib/Hui-iconfont/1.0.8/iconfont.css" rel="stylesheet" type="text/css" />
    <title>有榜商家管理后台</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"><div class="lft logo"><a href="http://www.youbangkeyi.com/beijing"><img alt="有榜" width="120px" src="//c.youbangkeyi.com/images/logo.png"></a> </div></div>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <form class="form form-horizontal" action="index.html" method="post">
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input id="name" name="name" type="text" placeholder="账户" class="input-text size-L">
                </div>
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input id="password" name="password" type="password" placeholder="密码" class="input-text size-L">
                </div>
            </div>

            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <label for="online">
                        <input type="checkbox" name="online" id="online" value="">
                        使我保持登录状态</label>
                </div>
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="" id="c" type="button" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">Copyright 北京有榜信息科技有限公司</div>
<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
<script>
    <!--
    $(function (){
        $("#c").click(function(){
            var name = $("#name").val();
            var pass = $("#password").val();
            $.post('/merchant/check',{'name':name,'password':pass},function(data){
                if(data.status ==1) {
                    location.href='/';
                }
                else {
                    alert(data.msg);
                }
            },'json');
        });

    });
    -->
</script>
</body>
</html>
