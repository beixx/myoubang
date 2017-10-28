//加载城市事件

$('body').on('click', '#zone_ids,#gr_zone_ids', function () {

    $('.container').height($(document).height());

    var zid = $(this).attr('id');

    layer.open({type:1,content:$('.container'),area:['90%','90%'],offset:'8%',title:['请选择地区','background-color:#00b7b7; color:#fff;height:2.5rem;line-height:2.5rem;font-size:0.75rem'],closeBtn:['取消'],shadeClose:true});

     $('.letter').fadeIn(500);
     $('body').css({'overflow':'hidden',"height":'100%','position':'fixed'});


});

//选择城市 start

$('body').on('click', '.city-list p', function () {

    var type = $('.container').data('type');

    $('#zone_ids').html($(this).html()).attr('data-id', $(this).attr('data-id'));

    $('#gr_zone_ids').html($(this).html()).attr('data-id', $(this).attr('data-id'));

    layer.closeAll();

    $('.letter').fadeOut(100);
   $('body').css({'overflow':'auto',"height":'100%','position':'relative'});

});
$('body').on('click', '.layui-layer-close', function () {

    layer.closeAll();

    $('.letter').fadeOut(100);
    $('body').css({'overflow':'auto',"height":'100%','position':'relative'});

});
$('body').on('click', '.layui-layer-shade', function () {

    layer.closeAll();

    $('.letter').fadeOut(100);
    $('body').css({'overflow':'auto',"height":'100%','position':'relative'});

});

$('body').on('click', '.letter a', function () {

    var s = $(this).html();

    $('.container').scrollTop(93);

    $('.container').scrollTop($('#' + s + '1').offset().top);

});