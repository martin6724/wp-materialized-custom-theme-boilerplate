jQuery(document).ready(function(){
 jQuery("#test-script").html("jQuery says Hello World");
});

jQuery(document).ready(function(){
   jQuery('.parallax').parallax();
 });

jQuery(document).ready(function(){
 jQuery('.dropdown-trigger').dropdown({
   hover: true,
 });
});

   jQuery(document).ready(function() {
     jQuery('.select').formSelect();
   });

// var allSubmenus = $('.sub-menu').hide();
// // this variable makes all sub menu ul's 'display: none;'
// //
// $('li.current-menu-parent, li.current-menu-item').find('ul').show();
// // if these li's have current class's, they're set to 'display: block', this is for page reloads so the current menu is visible on page load.
//
// $('li.menu-item a').hover(function() {
//   allSubmenus.addClass("submenu");
//     allSubmenus.hide();
//     $(this).parent().find('ul').show();
// });



jQuery('.dropdown-button.main-menu-item').dropdown({
       inDuration: 300,
       outDuration: 225,
       constrain_width: true, // Does not change width of dropdown to that of the activator
       hover: true, // Activate on hover
       belowOrigin: true, // Displays dropdown below the button
       alignment: 'left' // Displays dropdown with edge aligned to the left of button
   });
   // nested dropdown initialization
jQuery('.dropdown-button.sub-menu-item').dropdown({
       inDuration: 300,
       outDuration: 225,
       constrain_width: false, // Does not change width of dropdown to that of the activator
       hover: true, // Activate on hover
       gutter: (jQuery('.dropdown-content').width() * 3) / 3.05 + 3, // Spacing from edge
       belowOrigin: false, // Displays dropdown below the button
       alignment: 'left' // Displays dropdown with edge aligned to the left of button
   });
