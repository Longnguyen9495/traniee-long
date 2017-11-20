$(function () {
    $(document).ready(function(){
        $(".first").click(function(){
            $(".r_view").show();
            $(".t_view").hide();
        });

    });
    $(document).ready(function(){
        $(".last").click(function(){
            $(".r_view").hide();
            $(".t_view").show();
        });

    });
});

// hieu ung accordion
$(function (){
    $('.accordion_title').click(function(){
        if($(this).hasClass('open')){
            $(this).removeClass('open').find(".show_text").slideUp(700);
        }else{
            $('.accordion_title.open').removeClass('open').find(".show_text").slideUp(700);
            $(this).addClass('open').find(".show_text").slideDown(700);
        }
    })
})
jQuery(document).ready(function($){
    if($(".btn-top").length > 0){
        $(window).scroll(function () {
            var e = $(window).scrollTop();
            if (e > 300) {
                $(".btn-top").show()
            } else {
                $(".btn-top").hide()
            }
        });
        $(".btn-top").click(function () {
            $('body,html').animate({
                scrollTop: 0
            })
        })
    }
});
$(document).ready(function(){
    $("a.actives").click(function(){
        $("a.actives.active").removeClass("active");
        $(this).addClass("active");
    });
});
/*reponsive menu*/
$(function() {
    var pull        = $('#pulls');
    menu        = $('.navigations ul');
    menuHeight  = menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
});
$(document).ready(function(){
    $("li.view_type").click(function(){
        $("li.view_type").removeClass("active");
        $(this).addClass("active");
    });
});