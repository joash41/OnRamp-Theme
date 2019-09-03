$(document).ready(function(){
    $('#sidebar .widgettitle').on('click', function(e) {$(this).parent().toggleClass('active');});
});

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
     //>=, not <=
    if (scroll >= 1) {
        $("body").addClass("scrolled");
    }else{
        $("body").removeClass("scrolled");
    }
});
if($(window).width() < 911){
//Menu Drop Down
var heightOfMenu = $('.menu-wrapper').height();
// var heightOfSubMenu = $('.sub-menu').height();
$('.menu-wrapper').css("height", 0);
// $('.sub-menu').css("height", 0);

// Mobile Menu
function mobileNav() {
    if ($('.menu-wrapper').height() === 0 ){
        $('.menu-wrapper').css("height", heightOfMenu);
    }
    else{
        $('.menu-wrapper').css("height", 0);
    }
}
$('.menu-item-has-children').hover(function(){
// $(this).find(".sub-menu").css("height", heightOfSubMenu);
$('.menu-wrapper').css("height", "auto");
});
}
var menu = document.querySelector('.menu_icon');
function toggleMenu () {
  menu.classList.toggle('open');
}
menu.addEventListener('click', toggleMenu);

//News above footer on homepage
$('.postsWrapper').ready(function(){
    $('.postsWrapper').eq(0).addClass('active');
});

$('.postsWrapper').hover(function(){
    $('.postsWrapper').removeClass('active');        
    $(this).addClass('active');
});

//Accordians
$('.contentInsideWrapper').each(function(){
    $(this).find('.contentWrapper').css("height", 0);
  });

$('.accordionTitle').click(function(){
    heightofContentWrapper = $(this).next().outerHeight();
    heightOfContent = $(this).next().find('.contentWrapperInside').outerHeight();
    if (heightofContentWrapper === 0 ){
        $(this).next().css("height", heightOfContent);
        $(this).next().css("transition", "all 0.4s");
        $(this).next().css("padding", "10px 0px 30px");
        $(this).find("img").attr('src', stylesheet_directory_uri + '/images/accordion-minus.svg');
    }
    else{
        $(this).next().css("height", 0);
        $(this).next().css("padding", "0px");
        $(this).find("img").attr('src', stylesheet_directory_uri + '/images/accordion-plus.svg');
    }
});

$('.imageWithLink').click(function(){
    $(this).next().css("display", "flex");
});

$('.solutionVidWrapper').click(function(){
    $(this).next().css("display", "flex");
});

$('.closeLightBoxBYC').click(function(){
    $('.lightBoxBYC').css("display", "none");
});    

$('.lightBoxBYC').click(function(){
    $('.lightBoxBYC').css("display", "none");
});   

// //Hero Banner LightBox
// var heroWrapper = document.querySelector('.hero-wrapper');
// function showLightBox() {
//   $('.lightBox').addClass('active');
// }
// heroWrapper.addEventListener('click', showLightBox);

// var lightBox = document.querySelector('.lightBox');
// function hideLightBox() {
//   $(this).removeClass('active');
// }
// lightBox.addEventListener('click', hideLightBox);

// var closelightBox = document.querySelector('.closeLightBox');
// closelightBox.addEventListener('click', hideLightBox);

$('.hero-wrapper').click(function(){
    $('.lightBox').addClass('active');
});

$('.lightBox').click(function(){
    $(this).removeClass('active');
});    

$('.closeLightBox').click(function(){
    $('.lightBox').removeClass('active');
}); 