jQuery(document).ready(function () {
	jQuery('#hamburger').click(function () {
		jQuery(this).toggleClass('open');
	});

  var jQuerymenu = jQuery('#mobile-menu');
  
  jQuery(document).mouseup(function (e) {
     if (!jQuerymenu.is(e.target) // if the target of the click isn't the container...
     && jQuerymenu.has(e.target).length === 0) // ... nor a descendant of the container
     {
       jQuerymenu.slideToggle('fast');
    }
   });
	/*jQuery('#hamburger').click(function () {
		jQuery('#mobile-menu').slideToggle('fast');
	});*/
});


//allows button to jump to about section
 jQuery("#down-arrow").click(function() {
  console.log("How ar eyou");
  jQuery('html,body').animate({
      scrollTop: jQuery("#about-copy").offset().top},
      'slow');
});