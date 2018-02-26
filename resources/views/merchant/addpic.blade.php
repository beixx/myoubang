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
    <!--[if IE 6]>
    <script type="text/javascript" src="/merchant/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>新增图片</title>
    <script src="/webUpload/js/jquery.js"></script>

    <link rel="stylesheet" type="text/css" href="/webUpload/css/webuploader.css">
    <link rel="stylesheet" type="text/css" href="/webUpload/css/diyUpload.css">
    <script type="text/javascript" src="/webUpload/js/webuploader.html5only.min.js"></script>
    <script type="text/javascript" src="/webUpload/js/diyUpload.js"></script>
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
    <form class="form form-horizontal" action="" method="post" enctype="multipart/form-data" id="formarticleadd">
        <input type="hidden" name="id" value="<?php echo isset($pic['id'])?$pic['id']:0; ?>" />
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" value="<?php echo isset($pic['picName'])?$pic['picName']:''; ?>" placeholder="" id="" name="picname">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">风格：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="字符用逗号分割" name="" placeholder="picstyle" id="" value="<?php echo isset($pic['picStyle'])?implode(',',json_decode($pic['picStyle'],true)):''; ?>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">图片摘要：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,200)"><?php echo $pic['explain']??''; ?></textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">图片上传：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <?php if(isset($pic['cover'])){ $cover = json_decode($pic['cover'],true); ?>

                    <div id="imageload" style="width: 100%;height:<?php echo (1+intval(count($cover)/6))*170;?>px;display: block;">
                        <?php foreach( $cover as $k => $v){?>
                        <div class="pic lftat" style="display:block;">
                            <div class="close">
                                <input type="hidden" name="imageurl[]" value="<?php echo $v;?>" id="user_bill">
                            </div>
                            <img id="upload_img2" width="120px" src="<?php echo $v;?>">
                        </div>
                        <?php } ?>
                    </div>
                <?php  }?>
                <div id="box">
                    <div id="test" ></div>
                </div>
                <div id="imageloadpath">
                </div>
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
<script type="text/javascript" src="/merchant/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/merchant/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/merchant/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->

<script type="text/javascript">

    /*
     * 服务器地址,成功返回,失败返回参数格式依照jquery.ajax习惯;
     * 其他参数同WebUploader
     */

    $('#test').diyUpload({
        url:'/webUpload/server/fileupload.php',
        success:function( data ) {
            var imageload = $("#imageloadpath");
            var str = data._raw;
            var obj = eval('(' + str + ')');
            //var html = '<div class="pic lftat" style="display:block;"> <div class="close"> <input type="hidden" name="cover[]" value="'+obj.url+'" id="user_bill"> </div> <img id="upload_img2" width="120px" src="/upload/'+obj.url+'"> </div>';
            var html = '<input type=hidden name=imageurl[] value="'+obj.url+'" />';
            console.log(data._raw);
            console.log(html);
            console.log(data);
            imageload.append(html);
        },
        error:function( err ) {
            console.info( err );
        }
    });

    $('#as').diyUpload({
        url:'server/fileupload.php',
        success:function( data ) {
            console.info( data );
        },
        error:function( err ) {
            console.info( err );
        },
        buttonText : '选择文件',
        chunked:true,
        // 分片大小
        chunkSize:512 * 1024,
        //最大上传的文件数量, 总文件大小,单个文件大小(单位字节);
        fileNumLimit:50,
        fileSizeLimit:500000 * 1024,
        fileSingleSizeLimit:50000 * 1024,
        accept: {}
    });
    $(document).delegate(".close","click",function(){
        $(this).parent().remove();
    });


</script>
</body>
</html>