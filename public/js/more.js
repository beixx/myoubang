$(document).ready(function() {
 (function () {
                var showMoreNChildren = function ($children, n) {
                    var $hiddenChildren = $children.filter(":hidden");
                    var cnt = $hiddenChildren.length;
                    for ( var i = 0; i < n && i < cnt ; i++) {
                        $hiddenChildren.eq(i).show();
                    }
                    return cnt-n;
                }

                $(".showmore").each(function () {
                    var pagesize = $(this).attr("pagesize") || 30;
                    var $children = $(this).children();
                    if ($children.length > pagesize) {
                        for (var i = pagesize; i < $children.length; i++) {
                            $children.eq(i).hide();
                        }
          
                        $("<div class='more txtCtr'>点击查看更多商家</div>").insertAfter($(this)).click(function () {
                            if (showMoreNChildren($children, pagesize) <= 0) {
                                $(this).hide();
                            };
                        });
                    }
                });
            })();
});
