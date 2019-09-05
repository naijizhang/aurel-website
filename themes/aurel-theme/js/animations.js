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

    //contact form functionality
    $('#contact-submit').click(() => {
      let products = [];
      let payment=[];
      let libraries = [];
      let numLicences;
      let name;
      let company;
      let country;
      let email;
      let comments;
      if ($('#checkbox-cadsim').prop('checked') == true) {
        products.push('CADSIM Plus');
      }
      if ($('#checkbox-cadsim-run').prop('checked') == true) {
        products.push('CADSIM Plus Runtime');
      }
      //console.log('products', products);
      if ($('#checkbox-purchase').prop('checked') == true) {
        payment.push('Purchase');
      }
      if ($('#checkbox-lease').prop('checked') == true) {
        payment.push('Lease');
      }
      //console.log('payment', payment);
      if ($('#checkbox-fiber').prop('checked') == true) {
        libraries.push('Fiber');
      }
      if ($('#checkbox-power').prop('checked') == true) {
        libraries.push('Power');
      }
      if ($('#checkbox-mineral').prop('checked') == true) {
        libraries.push('Mineral');
      }
      if ($('#checkbox-HPG').prop('checked') == true) {
        libraries.push('Hydrocarbon Process Group');
      }
      if ($('#checkbox-HPDB').prop('checked') == true) {
        libraries.push('Hydrocarbon Properties Data Base');
      }
      if ($('#checkbox-AAU').prop('checked') == true) {
        libraries.push('AutoCAD Annotation Utility');
      }
      //console.log('libraries', libraries);
      numLicences = $('#licences').val();
      //console.log('numLicences', numLicences);
      name = $('#name').val();
      //console.log('name', name);
      company = $('#company').val();
      //console.log('company', company);
      email = $('#email').val();
      //console.log('email', email);
      country = $('#country').val();
      //console.log('country', country);
      comments = $('#comments').val();
      //console.log('comments', comments);

      let alertMessage=[];
      if(products.length==0){
        alertMessage.push(`Please select at least one product in "CADSIM Plus" and "CADSIM Plus Runtime".`);
      }
      if(payment.length==0){
        alertMessage.push(`Please select at least one payment method in "Purchase" and "Lease".`);
      }
      if(numLicences==""){
        alertMessage.push(`"Number of Licences" is required.`);
      }
      if(name==""){
        alertMessage.push(`"Name" is required.`);
      }
      if(country==""){
        alertMessage.push(`"Country" is required.`);
      }
      if(email==""){
        alertMessage.push(`"Email" is required.`);
      }
      if(alertMessage.length>0){
        alert(alertMessage.join("\n"));
        return;
      }
      //%0D%0A  line break
      //%20     space
      window.location.href =
        'mailto:mail@aurelsystems.com?subject=*Request%20a%20Quote&body='+`Products: ${products.join(", ")}%0D%0APayment: ${payment.join(", ")}%0D%0AOptional Libraries: ${libraries.join(", ")}%0D%0ANumber of Licences: ${numLicences}%0D%0AName: ${name}%0D%0ACompany: ${company}%0D%0AEmail: ${email}%0D%0ACountry: ${country}%0D%0AComments: ${comments}`;
        $("#thanksModal").modal('show');
    });

    if ($(document).width() > 740) {
      $('#software-overview-link').attr('href', '');
      $('#training-link').attr('href', '');
      $('#moduling-services-link').attr('href', '');
      $('#online-application-link').attr('href', '');
    }

    // $('.item-toggle-button').click(function() {
    //   if ( !$(this).next().hasClass('show') ) {
    //     $(this).parent().children('.collapse.show').collapse('show');
    //   }
    //   $(this).next().collapse('toggle');
    // });

    //mobile size menu
    if ($(document).width() < 740) {
      $('#mobile-menu > .menu-item-has-children > a').removeAttr('href');
      $('.menu-item-has-children').on('click', event => {
        const clickedElement = $(event.target);
        const targetElement = clickedElement.closest('.menu-item-has-children');
        if (targetElement.hasClass('expand-sub-menu')) {
          targetElement.removeClass('expand-sub-menu');
        } else {
          targetElement.addClass('expand-sub-menu');
        }
      });
    }

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
        $('.toggle-widget-button').css('background-color', 'rgb(0, 66, 128)');
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

    const widgetList = {
      about: '#nav_menu-2',
      products: '#nav_menu-3',
      techCorner: '#nav_menu-4',
      services: '#nav_menu-5',
      digitalTwin: '#nav_menu-6',
      industries: '#nav_menu-7',
      cadsimPlus: '#nav_menu-8',
      support: '#nav_menu-9',
      versions: '#nav_menu-10',
      advanceTech: '#nav_menu-11',
      advanceModeling: '#nav_menu-12'
    };
    const pageCategory = {
      about: 'about',
      'aurel-team-page': 'about',
      clients: 'about',
      'client-comments': 'about',
      'consultant-links': 'about',
      'conference-papers': 'about',
      'company-history': 'about',
      contact: 'about',

      products: 'products',
      //'cadsim-plus':'products',
      'dynamic-data-reconciliation': 'products',
      'product-tracking-2': 'products',
      // 'tech-corner':'products',
      'newsletters-2': 'products',
      'cadsim-plus-runtime':'products',

      'tech-corner': 'techCorner',
      'split-range-controllers': 'techCorner',
      'pipe-friction': 'techCorner',
      'link-cadsim-plus': 'techCorner',
      'export-drawing-to-pdf': 'techCorner',
      'creating-computer-based-manuals': 'techCorner',
      'using-autotune': 'techCorner',
      'compound-editor': 'techCorner',
      'multi-doc-interface': 'techCorner',

      services: 'services',
      training: 'services',

      'process-modeling': 'advanceModeling',
      'custom-modules': 'advanceModeling',
      'dcs-check-out': 'advanceModeling',
      'operator-training-simulators': 'advanceModeling',

      'process-digital-twin': 'digitalTwin',
      'data-reconciliation': 'digitalTwin',
      'product-tracking': 'digitalTwin',
      // 'energy-tracking': 'digitalTwin',
      'real-time-optimization': 'digitalTwin',
      'kpi-generation': 'digitalTwin',
      'soft-sensors': 'digitalTwin',
      'take-the-process-for-a-drive-into-the-future': 'digitalTwin',
      'rate-operating-scenarios': 'digitalTwin',
      'load-shedding': 'digitalTwin',

      industries: 'industries',
      'pulp-paper': 'industries',
      'forest-products': 'industries',
      'food-processing': 'industries',
      'water-waste-water': 'industries',
      treatment: 'industries',
      'mineral-processing': 'industries',
      'research-learning': 'industries',

      'cadsim-plus': 'cadsimPlus',
      'module-libraries': 'cadsimPlus',
      'optional-module-libraries': 'cadsimPlus',
      'ease-of-use': 'cadsimPlus',
      'pre-purchase-faqs': 'cadsimPlus',
      'sample-screenshots': 'cadsimPlus',

      'new-in-v2-4': 'versions',
      'new-in-v2-5': 'versions',
      'new-in-v2-6': 'versions',
      'new-in-v2-7': 'versions',
      'new-in-v3-0': 'versions',
      'new-in-v3-1': 'versions',
      'new-in-v3-2': 'versions',
      'new-in-v3-3': 'versions',
      'new-in-v3-4': 'versions',
      'new-in-v3-5': 'versions',
      'new-in-v3-6': 'versions',
      'new-in-v3-7': 'versions',
      'new-in-v3-8': 'versions',
      'new-in-v3-9': 'versions',
      'new-in-v4-0': 'versions',

      support: 'support',
      'software-updates': 'support',
      'maintenance-support': 'support',
      'version-history': 'support',
      'faq': 'support',

      'advanced-technologies': 'advanceTech',
      'stream-based-specifications': 'advanceTech',
      'living-drawings': 'advanceTech',
      'open-architecture': 'advanceTech',
      smartcalc: 'advanceTech',
      'model-scoping': 'advanceTech'
    };
    const segment_str = $(location).attr('href');
    const segment_array = segment_str.split('/');
    let last_segment = segment_array[segment_array.length - 1];
    if (last_segment == '') {
      last_segment = segment_array[segment_array.length - 2];
    }
    let widgetCategory = pageCategory[last_segment];
    $(widgetList[widgetCategory]).css('display', 'block');
    // if (last_segment === 'tech-corner') {
    //   $(widgetList['techCorner']).css("display","block")
    // }
    // if (widgetCategory === 'techCorner') {
    //   $(widgetList['products']).css("display","block")
    // }

    if ($(window).width() > 740) {
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
    } else {
      $('.company-history-container p').before(
        "<div class='helper-block-desktop'><div class='circle'></div></div>"
      );
      $('.helper-block-desktop')
        .last()
        .css('align-items', 'flex-end');
    }

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
    $('#nav-trigger').on('click', function() {
      toggle();
    });

    $(window).resize(function() {
      if ($(window).width() > 720) {
        if (!isMenuOn) {
          toggle();
          $('.nav-trigger').prop('checked', false); // Unchecks it
        }
      }
    });

    if (
      navigator.userAgent.indexOf('Safari') != -1 &&
      navigator.userAgent.indexOf('Chrome') == -1 &&
      navigator.userAgent.indexOf('CriOS/') == -1
    ) {
      $('#polygon-block1').attr('data-aos', 'none');
      $('#polygon-block2').attr('data-aos', 'none');
      $('#polygon-block3').attr('data-aos', 'none');
      $('#polygon-block4').attr('data-aos', 'none');
    }

    // if (jQuery('body').hasClass('single-university')) {
    //   $('nav').addClass('half-transparent');
    // }

    if (jQuery('body').hasClass('logged-in')) {
      $('.site-header').addClass('fixed-header-logged');
      $("label[for='nav-trigger']").css('top', '67px');
    } else {
      $('.site-header').addClass('fixed-header-unlog');
    }

    //team page animations
    //reference: https://codepen.io/SebastianNord/pen/vyZGye
    // Logic for Cards
    // Variables
    var $cell = $('.card__cell'),
      $body = $('body'),
      $prev = null,
      $current = null;

    // Full width of container.
    var $fullWidth = function(el) {
      var width = $('.container').width();
      el.css('width', width);
    };

    // Find distance from containers left side.
    var $distFromLeft = function(el, target) {
      var $left,
        $pad = 15,
        $elPos = el.offset().left,
        $coPos = $('.card__cell').offset().left + $pad;

      $left = $coPos - $elPos;

      target.css('margin-left', $left);
    };

    // Set the height of an expanded element.
    var getExpandHeight = function(current, height) {
      var currentOffset = current.offset().top;

      $($cell).each(function() {
        var thisOffset = $(this).offset().top;

        // Is the previous opend element is at the same level as the current.
        if (currentOffset === thisOffset) {
          $(this)
            .find('.card--expand')
            .css('height', height);
        }
      });
    };

    // Retrive the position relative to the document and return needed offset
    // for the current accordion.
    var getOffset = function($prev, $current) {
      var currentOffset = $current.offset().top,
        padding = 30;

      if ($prev) {
        var prevOffset = $prev.offset().top;

        // Is the previous opend element above the current.
        if (prevOffset < currentOffset) {
          // Return the current offset ( minus the previous text height plus
          // one 1px border, that is removed when accordion is not active).
          return (
            currentOffset -
            ($prev.closest('.card__cell').outerHeight() -
              $prev.find('a').outerHeight())
          );
        }
      }
      return currentOffset - padding;
    };

    // Set class if no card is expanded.
    var $cardColor = function(elem) {
      $cell.removeClass('is-not-selected');
      if ($cell.filter($('.is-expanded')).length) {
        $cell.not(elem).addClass('is-not-selected');
      } else {
        $cell.removeClass('is-not-selected');
      }
    };
    $cardColor();

    // Close card expanded.
    var expandClose = function() {
      $cell.find('.expand__close').on('click', function() {
        var $thisCell = $(this).closest('.card__cell');
        $thisCell.removeClass('is-expanded').addClass('is-collapsed');
        $cell.find('.card--expand').css('height', 0);
        $cardColor();
      });
    };
    expandClose();

    // Bind click event.
    $cell.find('.card--basic').on('click', function() {
      var $thisCell = $(this).closest('.card__cell');
      var $expanded = $(this).next('.card--expand');

      // Set card--expanded to fullwidth.
      $fullWidth($expanded);

      // Set distance from container left.
      $distFromLeft($(this), $expanded);

      // This is where the magic happends. Control wether a card will have "is-collapsed"
      // or "is-expanded"
      if ($thisCell.hasClass('is-collapsed')) {
        $cell
          .not($thisCell)
          .removeClass('is-expanded')
          .addClass('is-collapsed');
        $cell
          .not($thisCell)
          .find('.card--expand')
          .css('height', 0);
        $thisCell.removeClass('is-collapsed').addClass('is-expanded');

        var $expandHeight = $thisCell
          .find('.card--expand__container')
          .outerHeight();
        $thisCell.find('.card--expand').css('height', $expandHeight);
        $cardColor($thisCell);
      } else {
        $thisCell.removeClass('is-expanded').addClass('is-collapsed');
        $cell.find('.card--expand').css('height', 0);
        $cardColor();
      }

      // Set previous accordion to the current.
      $prev = $current;
      // Set new current accordion to this.
      $current = $(this);

      // When the clicked accordion is not active, get the offset, hide the
      // previous accordion, show this accordion and animate to the offset.
      var offset = getOffset($prev, $current);

      getExpandHeight($current, $expandHeight);

      // Scroll to top.
      $body.animate({
        scrollTop: offset
      });
    });
  });
})(jQuery);
