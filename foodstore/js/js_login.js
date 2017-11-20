$(function (){
    $(".show_text").hide();
    $(".accordion_title").each(function(index){
        $(this).click(function(){
            if ($(this).find('.show_text').is(":hidden")==true) {
                $(".accordion").find(".show_text").slideUp(700);
                $(".accordion").find('.tru').hide();
                $(".accordion").find('.cong').show();
                $(this).find(".show_text").slideDown(500);
                $(this).find('.cong').hide();
                $(this).find('.tru').show();
            }else{
                $(this).find(".show_text").slideUp(500);
                $(this).find('.cong').show();
                $(this).find('.tru').hide();
            }
        })
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