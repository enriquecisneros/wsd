  jQuery(window).scroll(function() {
  if (jQuery(document).scrollTop() > 50) {
  jQuery('#master-header').addClass('shrink')
  jQuery('#master-header').removeClass('inner-page')
    jQuery('#master-header').addClass('navbar-fixed-top');
  } else {
    jQuery('#master-header').removeClass('shrink')
    jQuery('#master-header').addClass('inner-page')
    jQuery('#master-header').removeClass('navbar-fixed-top');
  }
  if (jQuery(document).scrollTop() > 50) {
  	jQuery('#master-header-front').addClass('shrink')
    jQuery('#master-header-front').addClass('navbar-fixed-top');
  } else {
    jQuery('#master-header-front').removeClass('shrink')
    jQuery('#master-header-front').removeClass('navbar-fixed-top');
  }
});   