(function ($, root, undefined) {

	$(function () {		
		
		'use strict';		

		/* ==========================================================================
		#Slides
		========================================================================== */
		var owl= $(".slide");      
			owl.owlCarousel({
			stopOnHover : true,	
			/*navigation:true,
			navigationText : ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],*/
			rewindNav : true,	
			paginationSpeed : 1000,
			goToFirstSpeed : 2000,
			singleItem : true,			 
			autoHeight : true,
			autoPlay : true,

			//Lazy load
			lazyLoad : true,
			lazyFollow : true,
			lazyEffect : "fade",
		});

		var owl= $(".noticias");      
			owl.owlCarousel({
			stopOnHover : true,	
			/*navigation:true,
			navigationText : ["<i class='fa fa-caret-left'></i>","<i class='fa fa-caret-right'></i>"],*/
			rewindNav : true,	
			paginationSpeed : 1000,
			goToFirstSpeed : 2000,
			singleItem : true,			 
			autoHeight : true,
			autoPlay : true,
		});			

		$('.dependences').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : false, 
			rewindNav : true,       
			items : 6, //10 items above 1000px browser width
			itemsDesktop : [1170,4], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,4], // betweem 900px and 601px
			itemsTablet: [767,2], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});
	});
	
})(jQuery, this);



