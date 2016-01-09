

jQuery(document).ready(function(){


	/* Formulaire de recherche*/
	jQuery('#menu-search-btn').click(function(e){
		e.preventDefault();
		var form = jQuery('.menu-search > form');
		
		if(form.is(':visible')) form.hide();
		else form.show();
	});







});