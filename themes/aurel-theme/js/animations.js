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
      if ($('.widget-area').css('visibility') !== 'hidden') {
        $('.widget-area').css('visibility', 'hidden');
        $('.widget-area').css('opacity', '0');
        $('.toggle-widget br').css('display', 'block');
        $('.toggle-widget-button').css('height', '70px');
        $('.toggle-widget-button').css('width', '30px');
        $('.toggle-widget-button').css('margin-left', '0px');
        $('.toggle-widget-button').css('background-color', '#397C46');
        $('.toggle-widget-button div').html('M<br>E<br>N<br>U');
      } else {
        $('.widget-area').css('visibility', 'visible');
        $('.widget-area').css('opacity', '0.8');
        $('.toggle-widget br').css('display', 'none');
        $('.toggle-widget-button').css('height', '30px');
        $('.toggle-widget-button').css('width', '70px');
        $('.toggle-widget-button').css('margin-left', '5px');
        $('.toggle-widget-button').css('background-color', 'rgb(40, 117, 218)');
        $('.toggle-widget-button div').html('HIDE');
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

    //hamburger menu
    let isMenuOn = true;
    const toggle = () => {
      isMenuOn = !isMenuOn;
      if (isMenuOn) {
        $('.site-content').css('right', '0px');
        $('.site-header ').css('right', '0px');
        $('#mobile-menu').css('visibility', 'hidden');
        $('#mobile-menu').css('opacity', '0');
      } else {
        $('.site-content').css('right', '180px');
        $('.site-header ').css('right', '180px');
        $('#mobile-menu').css('visibility', 'visible');
        $('#mobile-menu').css('opacity', '1');
      }
    };
    $('input[type=checkbox]').on('click', function() {
      toggle();
    });

    $( window ).resize(function() {
      if($( window ).width()>720 ){
        if(!isMenuOn){
          toggle();
          $('.nav-trigger').prop('checked', false); // Unchecks it
        }
      }
    });
   
    if (
      navigator.userAgent.indexOf('Safari') != -1 && 
      navigator.userAgent.indexOf('Chrome') == -1 && 
      navigator.userAgent.indexOf('CriOS/') == -1
  )  { 
    $("#polygon-block1").attr("data-aos","none");
    $("#polygon-block2").attr("data-aos","none");
    $("#polygon-block3").attr("data-aos","none");
    $("#polygon-block4").attr("data-aos","none");
  }

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
