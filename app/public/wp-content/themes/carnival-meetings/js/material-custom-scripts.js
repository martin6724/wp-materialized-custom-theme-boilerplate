jQuery(document).ready(function ($) {
    jQuery(function(){

      jQuery('.sidenav').sidenav();
      jQuery('.button-collapse').sideNav({
          menuWidth: 300, // Default is 240
          edge: 'center', // Choose the horizontal origin
          closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        });
      jQuery('.parallax').parallax();
      jQuery('li.menu-item').addClass('waves-effect waves-light');
}

 // end of document ready
  }); // end of jQuery name space
