jQuery(document).ready(function(){
	jQuery('#hamburger').click(function(){
		console.log("Hello");
		jQuery(this).toggleClass('open');
	});
}); 