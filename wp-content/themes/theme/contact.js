jQuery(document).ready(function($) {
  jQuery("#contact_me").submit(function() {
    var str = jQuery(this).serialize();
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: 'action=contact_form&'+str,
      success: function(msg) {
        jQuery("#node").ajaxComplete(function(event, request, settings){
          if(msg == 'sent') {
            jQuery(".contact #node").hide();
            jQuery(".contact form").hide();
            jQuery(".contact #success").fadeIn();
          }
          else {
            result = msg + '<button id="OK">OK</button>';
            jQuery(".contact #node").html(result);
            jQuery(".contact #node").fadeIn();
            jQuery(".contact #node button").click(function(){
              jQuery(".contact #node").fadeOut();
            });
          }
        });
      }
    });
    return false;
  });
});