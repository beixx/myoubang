
var browser = {
    versions: function () {
        var u = navigator.userAgent, app = navigator.appVersion;
        return {
            trident: u.indexOf('Trident') > -1,
            presto: u.indexOf('Presto') > -1,
            webKit: u.indexOf('AppleWebKit') > -1,
            gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
            mobile: !!u.match(/AppleWebKit.*Mobile.*/),
            ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
            android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
            iPhone: u.indexOf('iPhone') > -1,
            iPad: u.indexOf('iPad') > -1,
            webApp: u.indexOf('Safari') == -1
        };
    }(),
    language: (navigator.browserLanguage || navigator.language).toLowerCase()
};


$(".banner").click(function () {
    window.location.href = "index.aspx";
});

mui.init();
var nomination = {
    honor: null,
    logo: null,
    sub: true,
    init: function () {
        if (userid <= 0) {
            window.location.href = "http://m.hqew.com/user/login?bu=http://weixin.hqew.com/topic/provider2017/nomination.aspx";
            return;
        }
        $("input[name='MominateType']").unbind().click(function () {
            var $this = $(this), $isShow = $(".js-isshow");
            if ($this.val() == "1") {
                $isShow.addClass("g-d-n");
            }
            else {
                $isShow.removeClass("g-d-n");
            }
        })
        //var $honorbox = $(".honor");
        //honor = vH5IU;
        //honor.ImgBtn = $(".add-pic", $honorbox);
        //honor.ImgBox = $(".honor-box", $honorbox);
        //honor.ImgUpBtn = $(".btn-submit");
        //honor.ImgNum = 10;
        //honor.IsMustUp = false;
        //honor.IsMustTip = "请上传企业所获荣誉";
        //honor.upBackFun = function (obj) {
        //    honor.ImgUpBtn.unbind().html("上传中...");
        //};
        //honor.loadBackFun = function () { };
        //honor.InitSrcList = [];
        //honor.IsFastDFS = 1;
        //new honor.init({ "FileUp": "#H5IU_File_a" });
        //nomination.honor = honor;

        var $logobox = $(".logo");
        logo = vH5IU;
        logo.ImgBtn = $(".add-pic", $logobox);		//预览触发按钮
        logo.ImgBox = $(".honor-box", $logobox);		//展示图片box
        logo.ImgUpBtn = $(".btn-submit");   //上传到Temp文件夹触发按钮
        logo.ImgNum = 1;					//上传图片数量 默认为1
        logo.IsMustUp = false;            //图片是否必须上传
        logo.IsMustTip = "请上传企业图标";              //图片必须时 所做提示
        //vH5IU.ImgSrcList				//上传后图片的临时名字
        logo.upBackFun = function (obj) {
            logo.ImgUpBtn.unbind().html("上传中...");
            if (!nomination.submitFun()) {
                $(".btn-submit").html("提交信息");
                nomination.init();
            }
        };   //上传后回调函数 如提交数据资料
        logo.loadBackFun = function () { }; //预览后回调函数 如提交数据资料 
        logo.InitSrcList = [];			//初始图片 如果初始长度大于vH5IU.ImgNum 则vH5IU.ImgNum=初始长度
        logo.IsFastDFS = 1;   //默认是0  兼容系统新上传
        var defaultimg = $("#hidPic").val();
        if (defaultimg != "") {
            logo.InitSrcList.push(defaultimg);
        }
        new logo.init({ "FileUp": "#H5IU_File" });
        nomination.logo = logo;
    },
    nomiBack: function () {

    },
    submitFun: function () {
        var MominateType = $("input[name='MominateType']:checked").val();
        var CompanyName = $("#CompanyName").val();
        var Address = $("#Address").val();
        var EstablishDate = $("#EstablishDate").val();
        var CompanyScale = $("#CompanyScale").val();
        var SalesTurnover = $("#SalesTurnover").val();
        var CompanyUrl = $("#CompanyUrl").val();
        var MainProduct = $("#MainProduct").val();
        var Introduction = $("#Introduction").val(), honor = $("#honor").val();
        var Declaration = $("#Declaration").val();
        var LinkMan = $("#LinkMan").val();
        var RecommendCompanyName = $("#RecommendCompanyName").val();
        //var LinkManNumber = $("#LinkManNumber").val();
        var LinkManPhone = $("#LinkManPhone").val();
        var RecommendName = $("#RecommendName").val();
        var RecommendPhone = $("#RecommendPhone").val(), awards = "";
        var logImg = $(".logo .ImgItem img").attr("imgsrc"), objhonorimg = $(".honor .ImgItem img"), honorimg = "";
        if (objhonorimg) {
            $.each(objhonorimg, function () {
                honorimg += $(this).attr("imgsrc") + ",";
            })
            if (honorimg) {
                honorimg = honorimg.substring(0, honorimg.length - 1);
            }
        }
        if (MominateType && MominateType == "2") {
            if (!RecommendCompanyName) {
                mui.toast('请填写推荐企业')
                return false;
            }
            if (!RecommendName) {
                mui.toast('请填写推荐人')
                return false;
            }
            if (!RecommendPhone) {
                mui.toast('请填写正确推荐人联系电话\r\n例电话:0755-8888888 手机:13588888888')
                return false;
            }
        }
        var $Awards = $("input[name='Awards']:checked");
        if ($Awards && $Awards.length > 0) {
            $.each($Awards, function () {
                awards += $(this).val() + ",";
            });
            awards = awards.substring(0, awards.length - 1);
        }
        else {
            mui.toast("请选择候选奖项");
            return false;
        }
        if (!CompanyName) {
            mui.toast('请填写企业名称')
            return false;
        }
        if (!Address) {
            mui.toast("请填写企业地址");
            return false;
        }

        if (!EstablishDate) {
            mui.toast("请填写成立时间");
            return false;
        }

        if (!Validate.checkEstablishDate()) {
            mui.toast("请填写有效的成立时间</br>格式:2013-01-01");
            return false;
        }
        if (EstablishDate >= "2017-01-01") {
            mui.toast("成立日期须早于2017年1月1日才能提名");
            return false;
        }
        if (!CompanyScale || CompanyScale == "人数") {
            mui.toast("请填写企业规模");
            return false;
        }
        //验证url地址
        if (!Validate.checkLinkWebUrl()) {
            mui.toast("请填写正确有效的网址 </br>  例如:abc.com</br>www.abc.com");
            return false;
        }
        if (!SalesTurnover || SalesTurnover == "万元") {
            mui.toast("请填写营业额");
            return false;
        }
        if (!Validate.checkScale()) {
            mui.toast("请填写有效的营业额,格式:88.88");
            return false;
        }
        if (!MainProduct || MainProduct == "请控制在45个字符以内") {
            mui.toast("请填写经营范围/主营产品");
            return false;
        }
        if (MainProduct.length > 45) {
            mui.toast("经营范围/主营产品,请控制45个字符以内");
            return false;
        }
        if (!Introduction || Introduction == "本年度企业发展成就、业务模式或服务创新等，400字符内") {
            mui.toast("请填写公司简介");
            return false;
        }
        if (Introduction.length > 400) {
            mui.toast("公司简介,请控制400个字符以内");
            return false;
        }
        if (honor || honorimg) {
            if (!honor) {
                mui.toast("请填写企业荣誉");
                return false;
            }
            //if (!honorimg || honorimg.length <= 0) {
            //    mui.toast("请上传企业荣誉图片");
            //    return false;
            //}
        }
        if (!Declaration || Declaration == "参赛宣言或公司口号，请控制25个字符以内") {
            mui.toast("请填写参赛宣言");
            return false;
        }
        if (Declaration.length > 25) {
            mui.toast("参赛宣言或公司口号,请控制25个字符以内");
            return false;
        }
        if (!LinkMan) {
            mui.toast("请填写联系人");
            return false;
        }
        //if (!LinkManNumber) {
        //    pop.showTip(1, "请填写联系电话"); 
        //    return false;
        //}
        //if (!Validate.checkLinkManNumber()) { 
        //    pop.showTip(1, "请填写正确有效的联系电话 </br>  例: 0755-8888888");
        //    return false;
        //}
        if (!LinkManPhone) {
            mui.toast("请填写手机号码");
            return false;
        }
        if (!Validate.checkLinkManPhone()) {
            mui.toast("请填写正确有效的手机号码 </br>  例：13588888888");
            return false;
        }

        function sparam(param) {
            param.MominateType = MominateType;
            param.CompanyName = CompanyName;
            param.EstablishDate = EstablishDate;
            param.Address = Address;
            param.CompanyScale = CompanyScale;
            param.SalesTurnover = SalesTurnover;
            param.WebUrl = "http://" + CompanyUrl;
            param.MainProduct = MainProduct;
            param.Introduction = Introduction;
            param.HonorExt = honor;
            param.ImageExt = honorimg;
            param.Declaration = Declaration;
            param.LinkMan = LinkMan;
            param.RecommendCompanyName = RecommendCompanyName;
            param.LinkManNumber = LinkManPhone;
            param.RecommendName = RecommendName;
            param.RecommendPhone = RecommendPhone;
            param.LogImag = logImg;
            param.Source = 1;
            param.CandidateExt = awards;

            return param;
        }
        if (!nomination.sub)
            return false;
        nomination.sub = false;
        var param = {
            AssemblyName: "Hqew.Zhuanti.BLL.dll",
            ParamAssemblyName: "Hqew.Zhuanti.Model.dll",
            ClassName: "Hqew.Zhuanti.BLL.Provider.Provider2017BLL",
            MethodName: "BestProviderNominate",
            ParamModelName: 'Hqew.Zhuanti.Model.DBModel.TopicProviderEnroll',
            onResponse: function (result) {
                //1:未登入 2:已提名 3:提名成功 4:提名失败  5提名已结束 6没有上传图片
                if (result == 1) {
                    mui.toast("您尚未登录或登录已超时，请登录后再提名！");
                } else if (result == 2) {
                    mui.toast("您已成功提过名,感谢您的参与");
                    setTimeout(function () {
                        location.href = "success.htm?cm=" + CompanyName + "&cl=" + vH5IU.ImgSrcList[0];
                    }, 1500);
                } else if (result == 3) {
                    mui.toast("您已成功提名,感谢您的参与");
                    setTimeout(function () {
                        location.href = "success.html?cm=" + CompanyName + "&cl=" + vH5IU.ImgSrcList[0];
                    }, 1500);
                } else if (result == 4) {
                    mui.toast("提名失败");
                } else if (result == 5) {
                    mui.toast("提名时间已截止");
                } else if (result == 6) {
                    mui.toast("图片上传不正确，请重新上传");
                }
                nomination.sub = true;
                (".btn-submit").html("提交信息");
                nomination.init();
            },
            onRequest: sparam
        }
        $.ajaxRequest(param);
    }
};

var Validate = {
    checkScale: function () {
        var reg = /^[1-9]\d*$|^[1-9]\d*\.\d+$|^0\.\d+$|^0$/;
        var scale = document.getElementById("SalesTurnover");
        if (!scale.value || scale.value == "格式:88.88") return true;
        return reg.test(scale.value);
    },
    checkRecommendPhone: function () {
        var reg = /(^(0[0-9]{2,4}\-)?([1-9][0-9]{6,7})+(\-[0-9]{1,4})?$)|(^((\(\d{3}\))|(\d{3}\-))?(1[3578]\d{9})$)/;
        var RecommendPhone = document.getElementById("RecommendPhone");
        return reg.test(RecommendPhone.value);
    },
    checkEstablishDate: function () {
        var reg = /((^((1[8-9]\d{2})|([2-9]\d{3}))([-\/\._])(10|12|0?[13578])([-\/\._])(3[01]|[12][0-9]|0?[1-9])$)|(^((1[8-9]\d{2})|([2-9]\d{3}))([-\/\._])(11|0?[469])([-\/\._])(30|[12][0-9]|0?[1-9])$)|(^((1[8-9]\d{2})|([2-9]\d{3}))([-\/\._])(0?2)([-\/\._])(2[0-8]|1[0-9]|0?[1-9])$)|(^([2468][048]00)([-\/\._])(0?2)([-\/\._])(29)$)|(^([3579][26]00)([-\/\._])(0?2)([-\/\._])(29)$)|(^([1][89][0][48])([-\/\._])(0?2)([-\/\._])(29)$)|(^([2-9][0-9][0][48])([-\/\._])(0?2)([-\/\._])(29)$)|(^([1][89][2468][048])([-\/\._])(0?2)([-\/\._])(29)$)|(^([2-9][0-9][2468][048])([-\/\._])(0?2)([-\/\._])(29)$)|(^([1][89][13579][26])([-\/\._])(0?2)([-\/\._])(29)$)|(^([2-9][0-9][13579][26])([-\/\._])(0?2)([-\/\._])(29)$))/;
        var EstablishDate = document.getElementById("EstablishDate");
        if (!EstablishDate.value) return true;
        return reg.test(EstablishDate.value);

    },
    checkLinkManNumber: function () {
        var reg = /(^(0[0-9]{2,4}\-)?([1-9][0-9]{6,7})+(\-[0-9]{1,4})?$)|(^((\(\d{3}\))|(\d{3}\-))?(1[3578]\d{9})$)/;
        var LinkManNumber = document.getElementById("LinkManNumber");
        return reg.test(LinkManNumber.value);
    },
    checkLinkManPhone: function () {
        var reg = /^((\(\d{3}\))|(\d{3}\-))?(1[3578]\d{9})$/;
        var LinkManPhone = document.getElementById("LinkManPhone");
        return reg.test(LinkManPhone.value);
    },
    checkLinkWebUrl: function () {
        var reg = /^([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}$/;
        var MainProduct = document.getElementById("CompanyUrl");
        return reg.test(MainProduct.value);
    }
};

var index = {
    init: function () {
        if (stage == 1) {
            $(".stage a:gt(0)").click(function () {
                mui.alert('提名时间：2017.12.05-2018.01.03', '目前还在提名阶段，先来提名吧！', '', function (i) {

                });
            })
        }
        else if (stage == 2) {
            $(".stage a:eq(1)").click(function () {
                mui.alert('提名时间：2017.12.05-2018.01.03', '提名正在筛选，记得公众投票的时候来投票哦！', '', function (i) {

                });
            });
        }
        var topDom = document.getElementById('J-top');
        topDom.addEventListener('tap', function () {
            $('body').animate({ scrollTop: 0 }, 400);
        });
        var proDOm = $(".more-link");
        proDOm.on('tap', function () {
            var _Obj = $(this).data('id');
            if ($(this).text() == '点击展开') {
                $(this).html('收起')
            } else {
                $(this).html('点击展开<i class="iconfont icon-xia"></i>')
            }
            $("#" + _Obj).slideToggle();
        })
        /**********
         * 弹窗
        mui.alert('提名时间：2017.12.05-2018.01.03', '目前还在提名阶段，先来提名吧！', '', alertBack());
        mui.confirm('仅电子网会员才可参加', ' ', ['登录', '取消'], loginBack());
        mui.confirm('您已经成功报名过了', ' ', ['去看看', '取消'], nomiBack());
        mui.confirm('您已经成功报名过了', ' ', ['去触摸屏', '取消'], nomiBack());
         */
    }
};

var detail = {
    init: function () {
        var proDOm = $(".more-link");
        proDOm.on('tap', function () {
            var _Obj = $(this).data('id');
            if ($(this).text() == '点击展开') {
                $(this).html('收起')
            } else {
                $(this).html('点击展开<i class="iconfont icon-xia"></i>')
            }
            $("#" + _Obj).slideToggle();
        })

    }
}

