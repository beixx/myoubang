//1.绑定域名
//2.引入js文件 http://res.wx.qq.com/open/js/jweixin-1.0.0.js
//3.引用 /js/common/jssdk.js
//4.初始化数据 及 vShareInfo.init();
var vShareInfo = {
    title: "", // 分享标题
    desc: "", // 分享描述
    link: "", // 分享链接
    imgUrl: "", // 分享图标
    type: "", // 分享类型,music、video或link，不填默认为link
    dataUrl: "", // 如果type是music或video，则要提供数据链接，默认为空
    success: function() {
        // 用户确认分享后执行的回调函数
    },
    cancel: function() {
        // 用户取消分享后执行的回调函数
    },
    init: function() {
        function PostParam(param) {
            param.url = location.href;
            return param;
        }
        var PostExecParam = {
            ClassName: "Hqew.BLL.WeiXin.WeiXinUserBLL",
            MethodName: 'GetJSResult',
            ParamModelName: 'Hqew.Model.WeiXin.jssdkresult',
            onResponse: function(result) {
                if (result != null && result.signature != null && result.signature != "") {
                    wx.config({
                        debug: false,
                        appId: result.appId,
                        timestamp: result.timestamp,
                        nonceStr: result.noncestr,
                        signature: result.signature,
                        jsApiList: [
                            'checkJsApi',
                            'onMenuShareTimeline',
                            'onMenuShareAppMessage',
                            'onMenuShareQQ',
                            'onMenuShareWeibo'
                            ]
                    });
                    vJSSDK.shareInit();
                }
                else {
                    console.log("错误！");
                }
            },
            onRequest: PostParam
        }
        $.ajaxRequest(PostExecParam);
    }
};

var vJSSDK = {
    shareInit: function() {
        wx.ready(function() {
            // config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
            //判断当前客户端版本是否支持指定JS接口
            wx.checkJsApi({
                jsApiList: ['onMenuShareTimeline', 'onMenuShareAppMessage', 'onMenuShareQQ', 'onMenuShareWeibo'],
                success: function(res) {
                    // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
                }
            });
        });
        wx.error(function(res) {
            //config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
        });
        //分享到朋友圈
        wx.onMenuShareTimeline({
            title: vShareInfo.title,
            link: vShareInfo.link,
            imgUrl: vShareInfo.imgUrl,
            success: function() {
                vShareInfo.success();
            },
            cancel: function() {
                vShareInfo.cancel();
            }
        });
        //分享给朋友
        wx.onMenuShareAppMessage({
            title: vShareInfo.title,
            desc: vShareInfo.desc,
            link: vShareInfo.link,
            imgUrl: vShareInfo.imgUrl, 
            type: vShareInfo.type, // 分享类型,music、video或link，不填默认为link
            dataUrl: vShareInfo.dataUrl, // 如果type是music或video，则要提供数据链接，默认为空
            success: function() {
                vShareInfo.success();
            },
            cancel: function() {
                vShareInfo.cancel();
            }
        });
        //分享到QQ
        wx.onMenuShareQQ({
            title: vShareInfo.title,
            desc: vShareInfo.desc,
            link: vShareInfo.link,
            imgUrl: vShareInfo.imgUrl,
            success: function() {
                vShareInfo.success();
            },
            cancel: function() {
                vShareInfo.cancel();
            }
        });
        //分享到腾讯微博
        wx.onMenuShareWeibo({
            title: vShareInfo.title,
            desc: vShareInfo.desc,
            link: vShareInfo.link,
            imgUrl: vShareInfo.imgUrl, 
            success: function() {
                vShareInfo.success();
            },
            cancel: function() {
                vShareInfo.cancel();
            }
        });
        /*兼容*/
        window.shareData = {
            "imgUrl": vShareInfo.imgUrl, //图片
            "timeLineLink": vShareInfo.link,
            "tTitle": vShareInfo.title,
            "tContent": vShareInfo.desc
        };
        document.addEventListener('WeixinJSBridgeReady', function onBridgeReady() {
            WeixinJSBridge.on('menu:share:appmessage', function(argv) {//发送好友
                WeixinJSBridge.invoke('sendAppMessage', {
                    "img_url": window.shareData.imgUrl,
                    "link": window.shareData.timeLineLink,
                    "desc": window.shareData.tContent,
                    "title": window.shareData.tTitle
                }, function(res) {
                    //分享后操作
                    //vShareInfo.success();
                    if (res.err_msg == "share_timeline:ok") {
                        vShareInfo.success();
                    }
                    else {
                        vShareInfo.cancel();
                    }
                })
            });
            WeixinJSBridge.on('menu:share:timeline', function(argv) {//分享朋友圈
                WeixinJSBridge.invoke('shareTimeline', {
                    "img_url": window.shareData.imgUrl,
                    "img_width": "70",
                    "img_height": "70",
                    "link": window.shareData.timeLineLink,
                    "desc": window.shareData.tContent,
                    "title": window.shareData.tTitle
                }, function(res) {
                    //分享后操作
                    // 返回res.err_msg,取值
                    // share_timeline:cancel 用户取消
                    // share_timeline:fail　发送失败
                    // share_timeline:ok 发送成功 
                    if (res.err_msg == "share_timeline:ok") {
                        vShareInfo.success();
                    }
                    else {
                        vShareInfo.cancel();
                    }
                });
            });
        }, false);
    }
};

