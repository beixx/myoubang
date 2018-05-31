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


    <script type="text/javascript" src="/webUpload/jquery.min.js"></script>



    <script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/jquery.SuperSlide.2.1.1.js" ></script>

    <script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/layer.js" ></script>
    <script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/uploadImage.js"></script>
    <script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/exif.js"></script>
    <script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/template.js"></script>
    <script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/zepto.min.js"></script>
    <link href="http://www.youbangkeyi.cn/xincss/style1.css" rel="stylesheet" type="text/css" />

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
            background: url(//c.youbangkeyi.cn/images/close.png);
            position: absolute;
            right: -10px;
            top: -10px;
        }
        .up {
            width: 100%;
            padding-left: 30px;
            margin-top: 20px;
        }
        .up a {
            position: relative;
            display: inline-block;
            border-radius: 5px;
            overflow: hidden;
            color: #FFF;
            width: 175px;
            height: 50px;
            background: -webkit-linear-gradient(90deg,#00CCCC,#31dac8);
            background: -o-linear-gradient(90deg,#00CCCC,#31dac8);
            background: -moz-linear-gradient(90deg,#00CCCC,#31dac8);
            background: linear-gradient(90deg,#00CCCC,#31dac8);
            font-size: 18px;
            margin-right: 30px;
            cursor: pointer;
        }
        .file span {
            font-size: 30px;
            display: inline-block;
            line-height: 50px;
            padding-left: 30px;
            margin-right: 15px;
            float: left;
        }
        .file i {
            display: inline-block;
            height: 50px;
            line-height: 50px;
            float:left;
        }
        .file input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
            width: 175px;
            height: 50px;
            vertical-align: middle;
            outline: none;
        }
        .pic {
            position: relative;
            height: 95px;
            margin-right: 20px;
        }
        .pic .close {
            width: 23px;
            height: 23px;
            background: url(//c.youbangkeyi.cn/images/close.png);
            position: absolute;
            right: -10px;
            top: -10px;
        }
        .pic img {
            height: 95px;
            width: auto;
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
                <input type="text" autofocus="autofocus" class="input-text" value="<?php echo isset($pic['picName'])?$pic['picName']:''; ?>" placeholder="" id="" name="picname">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">风格：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <input type="text" class="input-text" placeholder="字符用逗号分割" name="picstyle" placeholder="picstyle" id="" value="<?php echo isset($pic['picStyle'])?implode(',',json_decode($pic['picStyle'],true)):''; ?>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">图片摘要：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <textarea name="explain" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,200)"><?php echo $pic['explain']??''; ?></textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
            </div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">封面图片上传：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="up-pic">
                    <div class="pic-box" style="width:910px;" id="firstcover">
                        <?php if(isset($pic['firstcover'])){ $cover = json_decode($pic['firstcover'],true); ?>
                            <?php foreach( $cover as $k => $v){?>
                            <div class="pic lft">
                                <div class="close">
                                    <input type="hidden" name="firstcover[]" value="<?php echo $v?>" />
                                </div>
                                <img  width="120px" src="http://img2.youbangkeyi.cn<?php echo $v;?>">
                            </div>
                            <?php } ?>
                        <?php  }?>
                    </div>
                    <script type="text/html" id="firstcoverTmp">
                        @{{each list}}
                        <div class="pic lft">
                            <div class="close">
                                <input type="hidden" name="firstcover[]" value="@{{$value}}"  />
                            </div>
                            <img  width="120px" src="http://img2.youbangkeyi.cn/@{{$value}}">
                        </div>
                        @{{/each}}
                    </script>
                    <div class="up">
                        <a href="javascript:void(0);" class="file txtCtr lft"><span class="lft fB">+</span>
                            <i class="lft">选择文件</i>
                            <input class="weui-uploader__input"  id="photo_file" type="file" multiple="multiple"  onchange="SeleImg('firstcover');"/>
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2">图片详细上传：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <div class="up-pic">
                    <div class="pic-box" style="width:910px;" id="cover">
                        <?php if(isset($pic['cover'])){ $cover = json_decode($pic['cover'],true); ?>
                        <?php foreach( $cover as $k => $v){?>
                        <div class="pic lft">
                            <div class="close">
                                <input type="hidden" name="cover[]" value="<?php echo $v?>" />
                            </div>
                            <img  width="120px" src="http://img2.youbangkeyi.cn<?php echo $v;?>">
                        </div>
                        <?php } ?>
                        <?php  }?>
                    </div>
                    <script type="text/html" id="coverTmp">
                        @{{each list}}
                        <div class="pic lft">
                            <div class="close">
                                <input type="hidden" name="cover[]" value="@{{$value}}"  />
                            </div>
                            <img  width="120px" src="http://img2.youbangkeyi.cn/@{{$value}}">
                        </div>
                        @{{/each}}
                    </script>
                    <div class="up">
                        <a href="javascript:void(0);" class="file txtCtr lft"><span class="lft fB">+</span>
                            <i class="lft">选择文件</i>
                            <input class="weui-uploader__input"  id="photo_file" type="file" multiple="multiple"  onchange="SeleImg('cover');"/>
                        </a>
                    </div>
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
<div id="tishi" style="display: none;"><div class="shangchuanzhong">图片上传中</div></div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/merchant/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/merchant/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/merchant/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer /作为公共模版分离出去-->


<script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/exif.js"></script> <!--/_footer /作为公共模版分离出去-->
<script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/template.js"></script> <!--/_footer /作为公共模版分离出去-->
<script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/zepto.min.js"></script>
<script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/layer.js" ></script>
<script type="text/javascript" src="http://www.youbangkeyi.cn/xinjs/uploadImage.js"></script>
<script type="text/javascript">



    $(document).delegate(".close","click",function(){
        $(this).parent().remove();
    });

    //选择图片(单据证明)
    function SeleImg(ObjectDom){
        var FormObj = new FormData();
        var files = event.target.files;
        var len = 0;
        if(ObjectDom == "firstcover" && files.length>1) {
            alert("封面图最多可以上传1张");
            return false;
        }
        $("#tishi").css("display","block");
        for (var index = 0; index < files.length; index ++)
        {
            var file = files[index];
            console.log(file);
            EXIF.getData(file, function() {
                len++;
                FormObj.append("photo[]", files[len-1]);
                if(len==files.length){
                    SubmitImgAjax(FormObj , ObjectDom);
                }

            });
        };
    };

    //上传图片文件（单据证明）
    function SubmitImgAjax(FormObj,ObjectDom){
        var ImgHttp = new XMLHttpRequest();
        ImgHttp.onload = function(event){
            var TempObj = JSON.parse(event.target.responseText || "{}");
            if(TempObj.result == "00")
            {
                $("#"+ObjectDom).append(template(ObjectDom+"Tmp", TempObj || []));

            }else{
                alert("照片超过规定大小,上传失败");
            };

            $("#tishi").css("display","none");
            setTimeout(function(){ layer.closeAll(); }, 1500);
        };
        ImgHttp.open("post", "/merchant/filesave", true);
        ImgHttp.send(FormObj);
    };



    $('page-container').on('click','.close',function(){
        $(this).parent().remove();

    });

</script>


</body>
</html>
