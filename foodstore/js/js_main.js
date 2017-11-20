//slider ảnh
var slideIndex = 1;
$(function(){
    showDivs(slideIndex);
});

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function currentDiv(n) {
    showDivs(slideIndex = n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlide");
    var dots = document.getElementsByClassName("demo");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    x[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += "active";

}

var index = 0;

$(function(){
    carousel();
})
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlide");
    var dots = document.getElementsByClassName("demo");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    index++;
    if (index > x.length) {index = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace("active", "");
    }
    x[index-1].style.display = "block";
    dots[index-1].className += "active";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
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

$(function () {
    $(document).ready(function(){
        $(".row_table.first").click(function(){
            $(".r_view").show();
            $(".t_view").hide();
        });

    });
    $(document).ready(function(){
        $(".row_table.last").click(function(){
            $(".r_view").hide();
            $(".t_view").show();
        });

    });
});
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