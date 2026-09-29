jQuery.noConflict();
(function ($, root, undefined) {

	$(function () {		
		
		'use strict';		

		// DOM ready, take it away

		/* ==========================================================================
		 #Fullsize - Boxer
		 ========================================================================== */        
        $(".fullwidth").boxer({
          fixed: true,
          videoWidth: 1200
        });

		/* ==========================================================================
		#Preload
		========================================================================== */
		$(".loader").delay(500).fadeOut();

		/* ==========================================================================
		#Menú
		========================================================================== */
		$("#menu").sticky({
			topSpacing:0
		});

		/* ==========================================================================
		#Parallax
		========================================================================== */
		//$('#slide-parallax1').parallax("50%", 0.4);

		/* ==========================================================================
		#Search
		========================================================================== */
		$('input[type="search"]').keyup(function(){
			var searchTerms = $(this).val();
			$('.buscador').each(function() {
				var hasMatch = searchTerms.length == 0 || $(this).text().toLowerCase().indexOf(searchTerms.toLowerCase()) >= 0;
				$(this).toggle(hasMatch);
			});
		});

		/* ==========================================================================
		#Ayuda Visual Monitoreo Visual Costero
		========================================================================== */
		$( ".btn-monitoreo-visual" ).click(function() {
		  	$( ".monitoreo-visual" ).slideToggle( "slow", function() {

		        if ($('.monitoreo-visual').is(':hidden')) {
		        	//oculta
					var body = $("html, body");
					body.animate({ scrollTop: $(".aporte-ciudadano-top").offset().top - 190}, 800);			
					//$items.removeClass('active') 
		        } else {
		        	//muestra
					var body = $("html, body");
					body.animate({ scrollTop: $(".monitoreo-top").offset().top - 100}, 800);			
					//$items.removeClass('active') 
		        }
			});
		});

		$( ".btn-datos-abiertos" ).click(function() {
		  	$( ".monitoreo-visual" ).slideToggle( "slow", function() {

		        if ($('.monitoreo-visual').is(':hidden')) {
		        	//oculta
					var body = $("html, body");
					body.animate({ scrollTop: $(".aporte-ciudadano-top").offset().top - 190}, 800);			
					//$items.removeClass('active') 
		        } else {
		        	//muestra
					var body = $("html, body");
					body.animate({ scrollTop: $(".monitoreo-top").offset().top - 100}, 800);			
					//$items.removeClass('active') 
		        }
			});
		});	


		$( ".view_proyect" ).click(function() {
		  	$( ".monitoreo-visual" ).slideToggle( "slow", function() {

		        if ($('.monitoreo-visual').is(':hidden')) {
		  
		        	//muestra
					var body = $("html, body");
					body.animate({ scrollTop: $(".monitoreo-top").offset().top - 100}, 800);			
					//$items.removeClass('active') 
		        }
			});
		});


		$( ".cerrar" ).click(function() {
		  $( ".monitoreo-visual" ).slideToggle( "slow" );
			var body = $("html, body");
			body.animate({ scrollTop: $(".aporte-ciudadano-top").offset().top - 190}, 800);			
			//$items.removeClass('active') ;		  
		});	


		/* ==========================================================================
		#Proyectos - UPM
		========================================================================== */
		$( ".btn-proyectos" ).click(function() {
		  	$( ".proyecto" ).slideToggle( "slow", function() {
		        if ($('.proyecto').is(':hidden')) {

		        	//OCULTA FORMULARIO DE MANIFIESTO /////////////////////
					var body = $("html, body");
					body.animate({ scrollTop: $(".proyecto-top").offset().top - 190}, 200);					
					$(".btn-proyectos").removeClass('box-manifiesto-active');
		        } else {

		        	//MUESTRA FORMULARIO DE MANIFIESTO ////////////////////
					var body = $("html, body");
					body.animate({ scrollTop: $(".proyecto-down").offset().top - 155}, 200);
					$(".btn-proyectos").addClass('box-manifiesto-active');
					//rezise_iframe();
		        }
			});
		});	

		$( ".cerrar_formulario" ).click(function() {
		  $( ".proyecto" ).slideToggle( "slow" );
			var body = $("html, body");
			body.animate({ scrollTop: $(".proyecto-down").offset().top - 190}, 200);
			$(".btn-proyectos").removeClass('box-manifiesto-active');	  
		});	


		/* ==========================================================================
		 #Acordeon active
		 ========================================================================== */
		$('.panel-heading a').click(function() {
		    $('.panel-heading').removeClass('active');
		    
		    //If the panel was open and would be closed by this click, do not active it
		    if(!$(this).closest('.panel').find('.panel-collapse').hasClass('in'))
		        $(this).parents('.panel-heading').addClass('active');
		 });

		/* ==========================================================================
		 #Menu / dropdown 
		 ========================================================================== */
		$('ul.nav li.dropdown').hover(function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);
		}, function() {
		  $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);
		});

		/* ==========================================================================
		 #Nav - Dropdown - Effect 
		 ========================================================================== */		
		$('.navbar .dropdown').hover(function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();
		}, function() {
			$(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();
		});

		/* ==========================================================================
		 #Mobile?
		 ========================================================================== */
		var onMobile = false;
		    if(( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )) {        
		        onMobile = true;
		}

		 /* ==========================================================================
		 #Nice Scroll
		 ========================================================================== */
		if(onMobile === false){
		    $("html").niceScroll({
		        scrollspeed: 150, 
		        mousescrollstep: 60,
		        zindex: 9999, 
		        smoothscroll: true, 
		        cursorborder:"none" ,
		        cursorcolor:"#555",
		        cursorwidth :"5px",
		        cursorborderradius:"0px",
		        background:"#FFF",
		        autohidemode:"true"
		    });
		}

		/* ==========================================================================
		#Expand
		========================================================================== */
		$(".view-more").click(function() {
		    //$(this).children(".info-display").slideToggle(500);
		    $(this).next(".info-display").eq(0).slideToggle(500); 
		    $("i", this).toggleClass("fa-plus-circle fa-minus-circle");

			var body = $("html, body");
			body.animate({ scrollTop: $(this).offset().top - 300}, 800);
		});	

		/* ==========================================================================
		#Slides
		========================================================================== */
		var owl= $(".slide");      
			owl.owlCarousel({
			stopOnHover : true,	
			rewindNav : true,	
			paginationSpeed : 1000,
			goToFirstSpeed : 2000,
			singleItem : true,			 
			autoHeight : true,
			autoPlay : true,
			loop:true,

			//Lazy load
			lazyLoad : true,
			lazyFollow : true,
			lazyEffect : "fade",
		});

		var owl= $(".noticias");      
			owl.owlCarousel({
			stopOnHover : true,	
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

		$('.slide-videos').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 3, //10 items above 1000px browser width
			itemsDesktop : [1170,2], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,2], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});

		$('.slide_ayuda_visual').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 3, //10 items above 1000px browser width
			itemsDesktop : [1170,2], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,2], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});		

	    /* ==========================================================================
	     #Back top
	     ========================================================================== */
	    $(window).scroll(function() {   
	        if (($(window).scrollTop() > 400)) {
	            $("#back-top").fadeIn(200);
	        } else {
	            $("#back-top").fadeOut(200);
	        }
	    });
	    
	    $('#back-top').click(function() {
	        $('html, body').stop().animate({
	            scrollTop : 0
	        }, 1000, 'easeInOutExpo');
	    }); 

		/* ==========================================================================
		#Scroll
		========================================================================== */
		$(window).scroll(function() {
			if (($(".nav").offset().top > 185)){
				$("#menu").addClass("menu-fixed").fadeIn(300);         
			} else {
				$("#menu").removeClass("menu-fixed");
			}
		});

		/* ==========================================================================
		#Load
		========================================================================== */
		$( window ).load(function() {
				//$("#ifr").css("width", "100%");
		});

		/* ==========================================================================
		#UPM - Active project
		========================================================================== */
		/*
		$(".big-font").on("click", function() {
		    $(this).addClass('activated');
		    $("i", this).toggleClass("fa-folder fa-folder-open");
		});
		*/

	});


	/* ==========================================================================
	#Search
	========================================================================== */
	var container = document.querySelector( 'div.container' ),
		triggerBttn = document.getElementById( 'trigger-overlay' ),
		overlay = document.querySelector( 'div.overlay' ),
		closeBttn = overlay.querySelector( 'button.overlay-close' );
		transEndEventNames = {
			'WebkitTransition': 'webkitTransitionEnd',
			'MozTransition': 'transitionend',
			'OTransition': 'oTransitionEnd',
			'msTransition': 'MSTransitionEnd',
			'transition': 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		support = { transitions : Modernizr.csstransitions };

		function toggleOverlay() {
			if( classie.has( overlay, 'open' ) ) {
				classie.remove( overlay, 'open' );
				classie.remove( container, 'overlay-open' ); //Problem whit step
				classie.add( overlay, 'close' );
				var onEndTransitionFn = function( ev ) {
					if( support.transitions ) {
						if( ev.propertyName !== 'visibility' ) return;
						this.removeEventListener( transEndEventName, onEndTransitionFn );
					}
					classie.remove( overlay, 'close' );
				};
				if( support.transitions ) {
					overlay.addEventListener( transEndEventName, onEndTransitionFn );
				}
				else {
					onEndTransitionFn();
				}
			}
			else if( !classie.has( overlay, 'close' ) ) {
				classie.add( overlay, 'open' );
				classie.add( container, 'overlay-open' );
			}
		}

	triggerBttn.addEventListener( 'click', toggleOverlay );
	closeBttn.addEventListener( 'click', toggleOverlay );

	/* Focus form search */
	$("#trigger-overlay").on("click",function(){
		$( ".search-field" ).focus();        
	});	

})(jQuery, this);


/* ==========================================================================
#DataTable - Functions
========================================================================== */
function detailFormatter(index, row) {
  var html = [];
  $.each(row, function (key, value) {
      html.push('<p><b>' + key + ':</b> ' + value + '</p>');
  });
  return html.join('');
}

function DoOnCellHtmlData(cell, row, col, data) {
  var result = "";
  if (typeof data != 'undefined' && data != "") {
    var html = $.parseHTML(data);

    $.each( html, function() {
        if ( typeof $(this).html() === 'undefined' )
            result += $(this).text();
        else if ( typeof $(this).attr('class') === 'undefined' || $(this).hasClass('th-inner') === true )
            result += $(this).html();
    });
  }
  return result;
}


/* ==========================================================================
 #Google Map
 ========================================================================== */
function viewMap() {
    var mapOptions = {
      zoom: 14,
      scrollwheel: false,
      navigationControl: true,
      mapTypeControl: false,
      scaleControl: false,
      draggable: true,      
      center: new google.maps.LatLng(lat,long),
      styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",
      stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",
      stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",
      stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",
      stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",
      stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",
      stylers:[{visibility:"off"}]},{featureType:"administrative.locality",
      stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",
      stylers:[{visibility:"on"}]},{featureType:"water",elementType:"labels",
      stylers:[{visibility:"on"},{lightness:25},{saturation:100}]},{featureType:"water",elementType:"geometry",
      stylers:[{hue:"#BCBE00"},{lightness:-60},{saturation:80}]}]
    };
    var mapElement = document.getElementById('map');
    var map = new google.maps.Map(mapElement, mapOptions);
    //var contentString = "MVOTMA l OAN - Observatorio Ambiental Nacional";
    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var image = image_path+'/images/marker.png';
    var marker = new google.maps.Marker({
      position: mapOptions.center,
      map: map,
      icon: image
    });

    infowindow.open(map,marker);/*Muestra la etiqueta por default.*/

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);/*Muestra la etiqueta al click.*/
    });
  }

  //viewMap()
  //google.maps.event.addDomListener(window, 'load', init);

	//image_up_down = image_path+"/images/collapse.png";
	//image_close = image_path+"/images/collapse-close.png";

	$( "#view-map" ).click(function() {
		$( "#map" ).slideToggle( "slow", function() {

	    if ($('#map').is(':hidden')) {
	    	//oculta
	    	$("i", "#view-map").toggleClass("fa-minus-circle fa-plus-circle");
			var body = $("html, body");
			body.animate({ scrollTop: $(".footer-down").offset().top - 50}, 800);			
			//$items.removeClass('active') 
	    } else {
	    	//muestra
	    	$("i", "#view-map").toggleClass("fa-plus-circle fa-minus-circle");
	    	viewMap();
			var body = $("html, body");
			body.animate({ scrollTop: $(".map-top").offset().top - 50}, 800);			
			//$items.removeClass('active') 
	    }

		});
	});

/* ==========================================================================
 #Rezise Iframe
 ========================================================================== */
function rezise_iframe(){
	var iframe = document.getElementById("ifr").contentWindow;
	if(iframe.$("html").outerHeight() != 0){
		$("#ifr").css({height: iframe.$("html").outerHeight()+100});
	}
}

/* ==========================================================================
 #Acordeon Item - Change
 ========================================================================== */
(function() {  
  $(".panel").on("show.bs.collapse hide.bs.collapse", function(e) {
    if (e.type=='show'){
      $(this).addClass('active_icon');
    }else{
      $(this).removeClass('active_icon');
    }
  });  

}).call(this);