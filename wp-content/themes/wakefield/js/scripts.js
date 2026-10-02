var flag = true;

jQuery(document).ready(function ($) {

    // Hamburger menu toggle
    $(".menu-toggle").click(function() {	
        if($('#nav-icon').hasClass('open')){
            $('#nav-icon').removeClass('open');	
            $('.main-navigation').slideUp(300);
        }else{
            $('#nav-icon').addClass('open');
            $('.main-navigation').slideDown(300);
        }		
    });

    var navcontainer = $('.main-navigation, .sub-menu');			
    $(window).resize(function(){
        var width = $(window).width();
        if (width > 768 && navcontainer.is(':hidden')){
            navcontainer.removeAttr('style');
        }
    });

    Fancybox.bind("[data-fancybox]", {});

    $(document).on('click', '.menu a[href*="#"]', function(e) {
        var width = $(window).width();
        if (width <= 768) {
            $('#nav-icon').removeClass('open');	
            $('.main-navigation').slideUp(300);
            // e.g., e.preventDefault();
        }
    });
});
