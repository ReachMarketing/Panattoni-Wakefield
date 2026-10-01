var flag = true;

jQuery(document).ready(function ($) {

    // Scroll to content on anchor link
    $("a[href^=#]").click(function(e) {  
        e.preventDefault();   
        var headerH = $('header').height();
        var dest = $(this).attr('href');
        $('html,body').animate({  scrollTop: $(dest).offset().top - headerH - 40}, 'slow'); 
        return false;
    });

    // Hamburger menu toggle
    $(".menu-toggle").click(function() {	
        if($('#nav-icon').hasClass('open')){
            $('#nav-icon').removeClass('open');	
            $('.menu-main-container').fadeOut(500);
            $('.menu-overlay').removeClass('active');
        }else{
            $('#nav-icon').addClass('open');
            $('.menu-main-container').fadeIn(500);
            $('.menu-overlay').addClass('active');
        }		
    });

    var navcontainer = $('.menu-main-container, .sub-menu');			
    $(window).resize(function(){
        var width = $(window).width();
        if (width > 1080 && navcontainer.is(':hidden')){
            navcontainer.removeAttr('style');
        }
        if (width > 768) {
            $('.button-sub-menu').removeAttr('style');
        }
    });


});
