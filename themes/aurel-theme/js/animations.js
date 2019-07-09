(function($) {
    $(function() {
      //front page industry hover
    //   $('.industry-logo-container').hover( function() {
    //     $('.Basketball-menu p').addClass('orange-underscore');
    //     $('.Rugby-menu p').removeClass('orange-underscore');
    //     $('.Other-menu p').removeClass('orange-underscore');
    //     $('.Soccer-menu p').removeClass('orange-underscore');
    //     $('.Volleyball-menu p').removeClass('orange-underscore');
    //   });
   
    });
    // if (jQuery('body').hasClass('single-university')) {
    //   $('nav').addClass('half-transparent');
    // }
   
      if(jQuery('body').hasClass('logged-in')){
      $('.site-header').addClass('fixed-header-logged');
     }else{
      $('.site-header').addClass('fixed-header-unlog');
     }
   
  
  })(jQuery);
  