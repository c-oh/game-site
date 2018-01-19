jQuery(document).ready(function () {
	jQuery('#hamburger').click(function () {
		jQuery(this).toggleClass('open');
	});
	jQuery('#hamburger').click(function () {
		jQuery('#mobile-menu').slideToggle('fast');
	});
});


//allows button to jump to about section
 jQuery("#down-arrow, #project-down-arrow").click(function() {
  jQuery('html,body').animate({
      scrollTop: jQuery("#about-copy, #sp-text-container").offset().top},
      'slow');
});

//game hover
jQuery('.home-game-container .game-projects a').hover(
	function(){ jQuery(".home-game-container .game-projects .bird").addClass('show') },
	function(){ jQuery(".home-game-container .game-projects .bird").removeClass('show') }
)

jQuery('.home-game-container .game-about a').hover(
	function(){ jQuery(".home-game-container .game-about .bird").addClass('show') },
	function(){ jQuery(".home-game-container .game-about .bird").removeClass('show') }
)