$('.owl-carousel-banner').owlCarousel({
    loop:true,
    nav:true,
    items: 1
})

$('.comment-of-customer-content').owlCarousel({
    loop:true,
    items: 3,
    margin: 15,
    dots: true,
    nav: true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        }
    }
})

$(function () {
    $('.js-show-min-cart').click(function () {
        $('.shop-mini').toggle(400);
    });
});

$('.monanngon-tabsushi-page-item').click(function (e) {
    e.preventDefault();
    var page = $(this).attr('index');
    var current = $('.monanngon-tabsushi-page-item.active').attr('index');
    if(page == current) {
        return false;
    }
    $('.my-loading').show();

    $('.monanngon-tabsushi-page-item').removeClass('active');
    $('.monanngon-tabsushi-page-item-' + page ).addClass('active');

    $.ajax({
        type: "post",
        url: AJAX_URL,
        data: {
            action:'get_monanngon_content',
            page: page,
            terms: 'sushi'
        },
        success: function(response){
            $('.tab-sushi-replace').html(response);
        },
        complete: function(res) {
            $('.my-loading').hide();
        }
    });
});

$('.monanngon-tabcomcoun-page-item').click(function (e) {
    e.preventDefault();
    var page = $(this).attr('index');
    var current = $('.monanngon-tabcomcoun-page-item.active').attr('index');
    if(page == current) {
        return false;
    }
    $('.my-loading').show();
    
    $('.monanngon-tabcomcoun-page-item').removeClass('active');
    $('.monanngon-tabcomcoun-page-item-' + page ).addClass('active');

    $.ajax({
        type: "post",
        url: AJAX_URL,
        data: {
            action:'get_monanngon_content',
            page: page,
            terms: 'com-cuon'
        },
        success: function(response){
            $('.tab-comcuon-replace').html(response);
        },
        complete: function(res) {
            $('.my-loading').hide();
        }
    });
});

$('.monanngon-cacmonankhac-page-item').click(function (e) {
    e.preventDefault();
    var page = $(this).attr('index');
    var current = $('.monanngon-cacmonankhac-page-item.active').attr('index');
    if(page == current) {
        return false;
    }
    $('.my-loading').show();
    
    $('.monanngon-cacmonankhac-page-item').removeClass('active');
    $('.monanngon-cacmonankhac-page-item-' + page ).addClass('active');

    $.ajax({
        type: "post",
        url: AJAX_URL,
        data: {
            action:'get_monanngon_content',
            page: page,
            terms: 'cac-mon-an-khac'
        },
        success: function(response){
            $('.tab-cacmonankhac-replace').html(response);
        },
        complete: function(res) {
            $('.my-loading').hide();
        }
    });
})

$('.monanngon-salad-page-item').click(function (e) {
    e.preventDefault();
    var page = $(this).attr('index');
    var current = $('.monanngon-salad-page-item.active').attr('index');
    if(page == current) {
        return false;
    }
    $('.my-loading').show();
    
    $('.monanngon-salad-page-item').removeClass('active');
    $('.monanngon-salad-page-item-' + page ).addClass('active');

    $.ajax({
        type: "post",
        url: AJAX_URL,
        data: {
            action:'get_monanngon_content',
            page: page,
            terms: 'salad'
        },
        success: function(response){
            $('.tab-salad-replace').html(response);
        },
        complete: function(res) {
            $('.my-loading').hide();
        }
    });
})

$('.monanngon-douong-page-item').click(function (e) {
    e.preventDefault();
    var page = $(this).attr('index');
    var current = $('.monanngon-douong-page-item.active').attr('index');
    if(page == current) {
        return false;
    }
    $('.my-loading').show();
    
    $('.monanngon-douong-page-item').removeClass('active');
    $('.monanngon-douong-page-item-' + page ).addClass('active');

    $.ajax({
        type: "post",
        url: AJAX_URL,
        data: {
            action:'get_monanngon_content',
            page: page,
            terms: 'douong'
        },
        success: function(response){
            $('.tab-douong-replace').html(response);
        },
        complete: function(res) {
            $('.my-loading').hide();
        }
    });
})


$('.group-tab-sushisashimi').click(function(e) {
    e.preventDefault();
    $('.group-tab-sushisashimi').removeClass('active');
    $(this).addClass('active');
    $('#sushisashimiContent').find('.tab-pane').removeClass('show active');

    if($(this).hasClass('setsushibig')) {
        $('#setsushibig').addClass('show active');
    }
    if($(this).hasClass('setsushismall')) {
        $('#setsushismall').addClass('show active');
    }
    if($(this).hasClass('setsashimi')) {
        $('#setsashimi').addClass('show active');
    }
})

$( function( $ ) {
  if ( ! String.prototype.getDecimals ) {
    String.prototype.getDecimals = function() {
      var num = this,
      match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
      if ( ! match ) {
        return 0;
      }
      return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
    }
  }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
          var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
          currentVal  = parseFloat( $qty.val() ),
          max         = parseFloat( $qty.attr( 'max' ) ),
          min         = parseFloat( $qty.attr( 'min' ) ),
          step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
              if ( max && ( currentVal >= max ) ) {
                $qty.val( max );
              } else {
                $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
              }
            } else {
              if ( min && ( currentVal <= min ) ) {
                $qty.val( min );
              } else if ( currentVal > 0 ) {
                $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
              }
            }

            // Trigger change event
            $qty.trigger( 'change' );
          });
      });