var resizeId;

function centerDialog()
{
  
}

jQuery( window ).resize(function() {
    jQuery(".navbar-collapse").css({ maxHeight: jQuery(window).height() - jQuery(".navbar-header").height() + "px" });
    
  
    clearTimeout(resizeId);
    resizeId = setTimeout(equalizeBootstrapColumn, 500);
});

//sticky header on scroll
//jQuery(".sticky").sticky({topSpacing: 0});


/*========tooltip and popovers====*/
jQuery(document).ready(function () {

  centerDialog();

  jQuery("[data-toggle=popover]").popover();

  jQuery("[data-toggle=tooltip]").tooltip();  

  equalizeBootstrapColumn();


  var $donateBtn = jQuery('.btn-donate');
  var $cancelRedirect = jQuery('#cancel-redirect');
  var $confirmRedirect = jQuery('#confirm-redirect');

  $donateBtn.on('click', function(e){
    e.preventDefault();
    var url = jQuery(this).attr('href');
    
    jQuery('#page-cover').fadeIn();

    $confirmRedirect.attr('href', url);
  });

  $cancelRedirect.on('click', function(e){
    e.preventDefault();
    jQuery('#page-cover').fadeOut();
  });
  
});

function equalizeBootstrapColumn()
{
    jQuery('.equalize-row').each(function() {
    
      var maxHeight = 0;

      jQuery('.equalize-col', jQuery(this)).each(function() {
        jQuery(this).css('height', 'auto');
        var currHeight = jQuery(this).height();
        if (currHeight > maxHeight) {
          maxHeight = currHeight;
        }
        
      });

      jQuery('.equalize-col', jQuery(this)).each(function() {
        
        jQuery(this).height(maxHeight);
        
      });
    
    });
}