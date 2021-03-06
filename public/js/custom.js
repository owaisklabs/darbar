(function ($) {
    'use strict';

  //Initiat WOW JS
  new WOW().init();
// RS Slider
jQuery('.tp-banner').show().revolution(
{
    dottedOverlay:"none",
    delay:10000,
    startwidth:1170,
    startheight:750,
    hideThumbs:200,

    thumbWidth:100,
    thumbHeight:50,
    thumbAmount:5,

    navigationType:"bullet",
    navigationArrows:"solo",
    navigationStyle:"preview4",

    touchenabled:"on",
    onHoverStop:"on",

    swipe_velocity: 0.7,
    swipe_min_touches: 1,
    swipe_max_touches: 1,
    drag_block_vertical: false,

    parallax:"mouse",
    parallaxBgFreeze:"on",
    parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

    keyboardNavigation:"off",

    navigationHAlign:"right",
    navigationVAlign:"bottom",
    navigationHOffset:120,
    navigationVOffset:20,

    soloArrowLeftHalign:"left",
    soloArrowLeftValign:"center",
    soloArrowLeftHOffset:20,
    soloArrowLeftVOffset:0,

    soloArrowRightHalign:"right",
    soloArrowRightValign:"center",
    soloArrowRightHOffset:20,
    soloArrowRightVOffset:0,

    shadow:0,
    fullWidth:"off",
    fullScreen:"off",

    spinner:"spinner4",

    stopLoop:"off",
    stopAfterLoops:-1,
    stopAtSlide:-1,

    shuffle:"off",
    autoHeight:"off",                       
    forceFullWidth:"off",                       

    hideThumbsOnMobile:"off",
    hideNavDelayOnMobile:1500,                      
    hideBulletsOnMobile:"off",
    hideArrowsOnMobile:"off",
    hideThumbsUnderResolution:0,

    hideSliderAtLimit:0,
    hideCaptionAtLimit:0,
    hideAllCaptionAtLilmit:0,
    startWithSlide:0,
    fullScreenOffsetContainer: ".header"    
});



// STIKY MENU
$(window).scroll(function(){ 
    if ($(this).scrollTop() > 10){      
      $('.header-wrapper').addClass("navbar-fixed-top");
  } else{
      $('.header-wrapper').removeClass("navbar-fixed-top");
  }
});

// FLAG DROP DOWN
$(".dropdown img.flag").addClass("flagvisibility");

$(".dropdown dt a").on("click", function() {
    $(".dropdown dd ul").toggle();
});

$(".dropdown dd ul li a").on("click", function() {
    var text = $(this).html();
    $(".dropdown dt a span").html(text);
    $(".dropdown dd ul").hide();
    $("#result").html("Selected value is: " + getSelectedValue("sample"));
});

function getSelectedValue(id) {
    return $("#" + id).find("dt a span.value").html();
}

$(document).on("click", function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("dropdown"))
        $(".dropdown dd ul").hide();
});
  // DATEPICKER 
  $(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker-sidebar" ).datepicker();
});

 // BOOK A TABLE NOW
 $(function() {
    $( ".book-now-wrapper .toggle" ).on("click", function() {
      $( ".book-now" ).toggleClass( "open", 150 );
  });
});

 // SIGNATURE DISHES START
 $(function () {
    $('#owl-dishes').owlCarousel({
        loop:true,
        margin:0,
        autoplay:true,
        dots:false,
        responsive:{
            320:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });

    var owl = $('#owl-dishes');
    owl.owlCarousel();
    $('.owl-controls .next').on("click", function() {
      owl.trigger('next.owl.carousel');
  })
    $('.owl-controls .prev').on("click", function() {
      owl.trigger('prev.owl.carousel', [300]);
  })
}());


// LOADER
setTimeout(function(){ $('.loader').fadeOut(); }, 1000);

//back-top
var offset = 300,
scroll_top_duration = 1500,
$back_to_top = $('.back-top');

 //smooth scroll to top
 $back_to_top.on('click', function(event){
    event.preventDefault();
    $('body,html').animate({
      scrollTop: 0 ,
  }, scroll_top_duration
  );
});

// Google Pop Up
$(window).load(function(){
    $('.popup-section').fadeOut();
    var high = "";
    high=$(".booking-back").height(); 
    $(".book-table-wrapper .booking-image img").css("height", high+190);  
});

$("#map").on("click", function(){
    $(".popup-section").css("top", "0");
    $(".popup-section").fadeIn(500);
});
$(".cross").on("click", function(){

    $(".popup-section").fadeOut(500);
});

$(window).resize(function(){
        $(".popup-section").css("top", "5000px");
        $(".popup-section").fadeIn();
});

// Search
$("#search").on("click", function(){
  $( ".search-wrapper" ).show(100);
});
$(".search-contents .close").on("click", function(){
  $( ".search-wrapper" ).fadeOut( 500);
});

//tweet feed
$('.tweet-feed .tweet').twittie({
    dateFormat: '%b. %d, %Y',
    template: ' <p class="media"><div class="avatar media-left"><a href="http://twitter.com/ThemeRole" target="_blank"<i class="twitter-avatar flaticon-twitter1"></i> </a></div> <div class="twt-area media-body"><div class="screen-name">{{screen_name}} </div> {{tweet}} <div class="url-s"> </div> </p> <div class="date">{{date}}</div></div>',
    count: 2,
    apiPath: 'js/api/tweet.php',
    loadingText: 'Loading......'
});


// Css Preseter
$(".preset-wrapper .icon-holder").on("click", function(){
  $( ".preset-wrapper .holder" ).toggleClass( "open",500);

});

// Blog
 $(window).on("load",function(){
    var long=$(".event-holder .long-img").height();
    var horizontal =$(window).width();

    if(horizontal > 767){
      $(".long.img-content").css("height", long);
    $(".event-holder .wide").css("height", long);  
    } 
  });

// CountDown
(function () {

    var tempdate=new Date();
    var year = tempdate.getYear()-100;
    var month = tempdate.getMonth()+1;
    var day = tempdate.getDate()+2;
    var date = "20"+year+"/"+month+"/"+day;


    if(month==1){
        var tempmonth="Jan";
    }
    if(month==2){
        var tempmonth="Feb";
    }
    if(month==3){
        var tempmonth="Mar";
    }
    if(month==4){
        var tempmonth="Apr";
    }
    if(month==5){
        var tempmonth="May";
    }
    if(month==6){
        var tempmonth="Jun";
    }
    if(month==7){
        var tempmonth="Jul";
    }
    if(month==8){
        var tempmonth="Aug";
    }
    if(month==9){
        var tempmonth="Sep";
    }
    if(month==10){
        var tempmonth="oct";
    }
    if(month==11){
        var tempmonth="Nove";
    }
    if(month==12){
        var tempmonth="Dec";
    }
    

 $('#countdown').countdown(date, function(event) {
   var $this = $(this).html(event.strftime(''
     + '<span class="base">%d <span>days</span></span> '
     + '<span class="base">%H <span>hour</span></span>  '
     + '<span class="base">%M <span>min</span></span>  '
     + '<span class="base">%S <span>sec</span></span> '));
 });

var tempday1= day+1;
 if(tempday1>30){
    month++;
    tempday1=tempday1%30;
 }
 if(month==1){
        var tempmonth="Jan";
    }
    if(month==2){
        var tempmonth="Feb";
    }
    if(month==3){
        var tempmonth="Mar";
    }
    if(month==4){
        var tempmonth="Apr";
    }
    if(month==5){
        var tempmonth="May";
    }
    if(month==6){
        var tempmonth="Jun";
    }
    if(month==7){
        var tempmonth="Jul";
    }
    if(month==8){
        var tempmonth="Aug";
    }
    if(month==9){
        var tempmonth="Sep";
    }
    if(month==10){
        var tempmonth="Oct";
    }
    if(month==11){
        var tempmonth="Nov";
    }
    if(month==12){
        var tempmonth="Dec";
    }
    var eventtime1= tempday1+" "+tempmonth+" 20"+ year;
    $('#event1').html(eventtime1);

 var tempday2= day+2;
 if(tempday2>30){
    month++;
    tempday2=tempday2%30;
 }
 if(month==1){
        var tempmonth="Jan";
    }
    if(month==2){
        var tempmonth="Feb";
    }
    if(month==3){
        var tempmonth="Mar";
    }
    if(month==4){
        var tempmonth="Apr";
    }
    if(month==5){
        var tempmonth="May";
    }
    if(month==6){
        var tempmonth="Jun";
    }
    if(month==7){
        var tempmonth="Jul";
    }
    if(month==8){
        var tempmonth="Aug";
    }
    if(month==9){
        var tempmonth="Sep";
    }
    if(month==10){
        var tempmonth="Oct";
    }
    if(month==11){
        var tempmonth="Nov";
    }
    if(month==12){
        var tempmonth="Dec";
    }
    var eventtime2= tempday2+" "+tempmonth+" 20"+ year;
    $('#event2').html(eventtime2);
 
 var tempday3= day+3;
 if(tempday3>30){
    month++;
    tempday3=tempday3%30;
 }
 if(month==1){
        var tempmonth="Jan";
    }
    if(month==2){
        var tempmonth="Feb";
    }
    if(month==3){
        var tempmonth="Mar";
    }
    if(month==4){
        var tempmonth="Apr";
    }
    if(month==5){
        var tempmonth="May";
    }
    if(month==6){
        var tempmonth="Jun";
    }
    if(month==7){
        var tempmonth="Jul";
    }
    if(month==8){
        var tempmonth="Aug";
    }
    if(month==9){
        var tempmonth="Sep";
    }
    if(month==10){
        var tempmonth="Oct";
    }
    if(month==11){
        var tempmonth="Nov";
    }
    if(month==12){
        var tempmonth="Dec";
    }
    var eventtime3= tempday3+" "+tempmonth+" 20"+ year;
    $('#event3').html(eventtime3);

var tempday4= day+4;
 if(tempday4>30){
    month++;
    tempday4=tempday4%30;
 }
 if(month==1){
        var tempmonth="Jan";
    }
    if(month==2){
        var tempmonth="Feb";
    }
    if(month==3){
        var tempmonth="Mar";
    }
    if(month==4){
        var tempmonth="Apr";
    }
    if(month==5){
        var tempmonth="May";
    }
    if(month==6){
        var tempmonth="Jun";
    }
    if(month==7){
        var tempmonth="Jul";
    }
    if(month==8){
        var tempmonth="Aug";
    }
    if(month==9){
        var tempmonth="Sep";
    }
    if(month==10){
        var tempmonth="Oct";
    }
    if(month==11){
        var tempmonth="Nov";
    }
    if(month==12){
        var tempmonth="Dec";
    }
    var eventtime4= tempday4+" "+tempmonth+" 20"+ year;
    $('#event4').html(eventtime4);

    

 }());
// Gallery shuffle
(function () {
    
        var $grid = $('#grid');
        $grid.shuffle({
            itemSelector: '.portfolio-item' 
        });

        $('#filter a').click(function (e) {
            e.preventDefault();
            $('#filter a').removeClass('active');
            $(this).addClass('active');
            var groupName = $(this).attr('data-group');
            $grid.shuffle('shuffle', groupName );
        });
    
    }()); 

// Preset JS
templateOptions();

// carousel
$('.carousel').carousel();

// Fancy box
$('.fancybox').fancybox();

}(jQuery));