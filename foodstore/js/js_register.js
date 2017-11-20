//form đânng kí

//check dinh dang image
function isImage(filename) {
    var img = (/\.(gif|jpg|jpeg|tiff|png)$/i);
    return img.test(filename);
}

//check email
function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

//check phone
function phonenumber(inputtxt)
{
    var phoneno = /^[0-9]{10,11}$/;
    return phoneno.test(inputtxt);
}

//check pwd
function validatepassword(pw){
    var pass = /^(?=.*\d)[0-9a-zA-Z]{8,}$/;
    return pass.test(pw);
};
function validatelogin(){

    //firstname
    if($('#firstname').val() == "" || $('#firstname').val().length < 5){
        $('.requiredfirstname').text('Tối thiểu 5 kí tự');
        $('#firstname').focus();
        return false;
    }
    else{
        $('.requiredfirstname').text('');
    }
    //lastname
    if($('#lastname').val() == "" || $('#lastname').val().length < 5){
        $('.requiredlastname').text('Tối thiểu 5 kí tự');
        $('#lastname').focus();
        return false;
    }
    else{
        $('.requiredlastname').text('');
    }
    //birthday
    var pattern =/^([0-9]{2})\/([0-9]{2})\/([0-9]{4})$/;
    if($('#birthday').val() == null || $('#birthday').val() == ""){
        $('.required_bir').text('Nhập ngày sinh');
        $('.required_bir').focus();
        return false;
    }
    else if(!pattern.test($('#birthday').val())){
        $('.required_bir').text('Sai định dạng:dd/mm/yyyy');
        $('.required_bir').focus();
        return false;
    }
    else{
        $('.required_bir').text('');
    }
    //email_address
    if($("#email_address").val() == ""){
        $('.requiredemail').text('Mời nhập email');
        $('#email_address').focus();
        return false;
    }
    if (IsEmail($("#email_address").val()) == false) {
        $('.requiredemail').text('Email sai định dạng');
        $('#email_address').focus();
        return false;
    }
    else {
        $('.requiredemail').text('');
    }
    //company
    if($('#company').val() == "" || $('#company').val().length < 10){
        $('.requiredcompany').text('Tối thiểu 10 kí tự');
        $('#company').focus();
        return false;
    }
    else{
        $('.requiredcompany').text('');
    }
    //street_address
    if($('#street_address').val() == "" || $('#street_address').val().length < 20){
        $('.requiredstreet_address').text('Tối thiểu 20 kí tự');
        $('#street_address').focus();
        return false;
    }
    else{
        $('.requiredstreet_address').text('');
    }
    //suburb
    if($('#suburb').val() == "" || $('#suburb').val().length < 20){
        $('.requiredsuburb').text('Tối thiểu 20 kí tự');
        $('#suburb').focus();
        return false;
    }
    else{
        $('.requiredsuburb').text('');
    }
    //postcode
    if($('#postcode').val() == "" || $('#suburb').val().length < 20){
        $('.requiredpostcode').text('Tối thiểu 20 kí tự');
        $('#postcode').focus();
        return false;
    }
    else{
        $('.requiredpostcode').text('');
    }
    //city
    if($('#city').val() == "" || $('#city').val().length < 10){
        $('.requiredcity').text('Tối thiểu 10 kí tự');
        $('#city').focus();
        return false;
    }
    else{
        $('.requiredcity').text('');
    }
    //state
    if($('#state').val() == "" || $('#state').val().length < 20){
        $('.requiredstate').text('Tối thiểu 20 kí tự');
        $('#state').focus();
        return false;
    }
    else{
        $('.requiredstate').text('');
    }
    //phone

    if($("#telephone").val() == ""){
        $('.requiredtelephone').text('Mời nhập số điện thoại');
        $('#telephone').focus();
        return false;
    }

    if(phonenumber($("#telephone").val()) == false){
        $('.requiredtelephone').text('Số điện thoại phải nhập dạng số, có 10 hoặc 11 số');
        $('#telephone').focus();
        return false;
    }
    else{
        $('.requiredtelephone').text('');
    }
    //fax

    if($("#fax").val() == ""){
        $('.requiredfax').text('Mời nhập số fax');
        $('#fax').focus();
        return false;
    }

    if(phonenumber($("#fax").val()) == false){
        $('.requiredfax').text('Số fax phải nhập dạng số, có 10 hoặc 11 số');
        $('#fax').focus();
        return false;
    }
    else{
        $('.requiredfax').text('');
    }
    // password
    if($("#password").val() == "" || $("#password").val().length < 6 ){
        $('.requiredpassword').text('Mật khẩu tối thiểu 6 kí tự');
        $('#password').focus();
        return false;
    }
    else{
        $('.requiredpassword').text('');
    }
    //confirm pass
    if($("#confirmation").val() == ""){
        $('.requiredconfirmation').text('Nhập lại password');
        $('#confirmation').focus();
        return false;
    }
    else{
        $('.requiredconfirmation').text('');
    }

    if($("#password").val() != $("#confirmation").val()){
        $('.requiredconfirmation').text('Password không trùng khớp');
        $('#confirmation').focus();
        return false;
    }
    // check if rồi thông báo thành công
    if ($("#firstname").val() != ""  &&
        $("#lastname").val() != "" &&
        $('#birthday').val() != "" &&
        $('#email_address').val() != "" &&
        $("#company").val() != "" &&
        $("#street_address").val() != "" &&
        $('#suburb').val() != "" &&
        $('#postcode').val() != "" &&
        $('#city').val() != "" &&
        $('#state').val() != "" &&
        $('#telephone').val() != "" &&
        $('#fax').val() != "" &&
        $('#checkbox').val() != "" &&
        $('#password').val() != "" &&
        $('#confirmation').val() != "") {
        alert('Chúc mừng bạn đã đăng ký thành công !');
        $('.required_sub').text('thanh cong');
        // return false;
    }
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