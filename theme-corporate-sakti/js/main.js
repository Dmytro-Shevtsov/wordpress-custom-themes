jQuery(document).ready(function($) {

    $( "#tabs" ).tabs({
		/*event: "mouseover"*/
	});
	
	/* BTN callmi */
	$( '.btn-mob' ).click(function(){
	    $( '.pop-menu' ).toggleClass('pop-menu-active'); 
		
		$( '.btn-cloused-wrap' ).click(function(){
			$( '.pop-menu' ).removeClass('pop-menu-active'); 
		});
	});

});