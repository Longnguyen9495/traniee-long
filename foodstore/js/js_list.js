function zoomIn(event) {
    var element = document.getElementById("overlay");
    element.style.display = "inline-block";
    var img = document.getElementById("imgZoom");
    var posX = event.offsetX ? (event.offsetX) : event.pageX - img.offsetLeft;
    var posY = event.offsetY ? (event.offsetY) : event.pageY - img.offsetTop;
    element.style.backgroundPosition=(-posX*1)+"px "+(-posY*1)+"px";

}

function zoomOut() {
    var element = document.getElementById("overlay");
    element.style.display = "none";
}
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