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
    $('.widget-area').after(
      "<div class='toggle-widget'><button class='toggle-widget-button'><div>HIDE</div></button></div>"
    );
    $('.toggle-widget').click(function() {
      if ($('.widget-area').css('visibility') !== 'hidden'){
        $('.widget-area').css('visibility', 'hidden');
        $('.widget-area').css('opacity', '0');
        $('.toggle-widget br').css('display', 'block');
        $('.toggle-widget-button').css('height', '70px');
        $('.toggle-widget-button').css('width', '30px');
        $('.toggle-widget-button').css('margin-left', '0px');
        $('.toggle-widget-button div').html("M<br>E<br>N<br>U");
      }
      else {
        $('.widget-area').css('visibility', 'visible');
        $('.widget-area').css('opacity', '0.8');
        $('.toggle-widget br').css('display', 'none');
        $('.toggle-widget-button').css('height', '30px');
        $('.toggle-widget-button').css('width', '70px');
        $('.toggle-widget-button').css('margin-left', '5px');
        $('.toggle-widget-button div').html("HIDE");
      }
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
