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

    //widget menu toggle
    $('.widget-area').after("<button class='toggle-widget'>Click</button>");
    $('.toggle-widget').click(function() {
      if ($('.widget-area').css('display') !== 'none')
        $('.widget-area').css('display', 'none');
      else $('.widget-area').css('display', 'block');
    });

    //company history animation
    $('.company-history-container p:odd').after(
      "<div class='helper-block in-view'><div class='circle'></div></div>"
    );
    $('.company-history-container p:even').before(
      "<div class='helper-block in-view'><div class='circle'></div></div>"
    );
    $('.helper-block')
      .last()
      .css('align-items', 'flex-end');

    //start of scroll function.
    const elemInView = $('.in-view');
    $(window).scroll(function() {
      let yPos = $(window).scrollTop();

      $.each(elemInView, function(index, value) {
        if (yPos > value.offsetTop - 400 && yPos < value.offsetTop - 210) {
          console.log(value.offsetTop);
          $(this).addClass('is-active');
        } else {
          $(this).removeClass('is-active');
        }
      });
    });

    // if (jQuery('body').hasClass('single-university')) {
    //   $('nav').addClass('half-transparent');
    // }

    if (jQuery('body').hasClass('logged-in')) {
      $('.site-header').addClass('fixed-header-logged');
    } else {
      $('.site-header').addClass('fixed-header-unlog');
    }
  });
})(jQuery);
