jQuery.noConflict();
(function ($, root, undefined) {

	$(function () {		
		
		'use strict';		

		// DOM ready, take it away

		/* ==========================================================================
		 #Mobile?
		 ========================================================================== */
		var onMobile = false;
		    if(( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) )) {        
		        onMobile = true;
		}

		/* ==========================================================================
		 #Slide Gallery
		 ========================================================================== */
	    var swiper = new Swiper('.swiper-container', {
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        pagination: '.swiper-pagination',
	        paginationType: 'progress',
	        spaceBetween: 30,
	        centeredSlides: true,
	        autoplay: 2500,
	        autoplayDisableOnInteraction: false        
	    });

	    var swiper = new Swiper('.swiper-container2', {
	        nextButton: '.swiper-button-next',
	        prevButton: '.swiper-button-prev',
	        pagination: '.swiper-pagination',
	        paginationType: 'progress',
	        spaceBetween: 30,
	        centeredSlides: true,
	        autoplay: 2500,
	        autoplayDisableOnInteraction: false        
	    });


	    /*Muestra el error del formulario del "Sello de ambiente" en una ventana modal ***********************/
		  $(document).ready(function () {
		    $('.wpcf7').on('wpcf7invalid wpcf7spam wpcf7mailfailed', function (event) {
		      // Extraer mensaje de error de CF7
		      var errorText = $(this).find('.wpcf7-response-output').text().trim();
		      
		      // Si no hay mensaje específico, usar mensaje genérico
		      if (errorText === "") {
		        errorText = "Hubo un problema al enviar el formulario. Revisa los campos e intenta nuevamente.";
		      }

		      // Insertar el mensaje de error en el modal
		      $('#errorMessage').text(errorText);
		      
		      // Mostrar el modal de Bootstrap
		      //$('#errorModal').modal('show');
		    });
		  });


	    /*Redirect Geoportal drpdown *************************************************************************/
	    if(onMobile === false){ 

			$('a[href^="#"]').each(function(){

				var titulo = $(this).attr("title");

				if (titulo == "Geoportal") {
				    var httpUrl = $(this).attr("href"); // Get current url
				    var httpsUrl = httpUrl.replace("#", "https://www.ambiente.gub.uy/oan/geoportal/");
				    $(this).attr("href", httpsUrl);
				}

				if (titulo == "Residuos") {
				    var httpUrl = $(this).attr("href"); // Get current url
				    var httpsUrl = httpUrl.replace("#", "https://www.ambiente.gub.uy/oan/residuos-2025/");
				    $(this).attr("href", httpsUrl);
				}

				if (titulo == "Evaluación Ambiental Estratégica") {
				    var httpUrl = $(this).attr("href"); // Get current url
				    var httpsUrl = httpUrl.replace("#", "https://www.ambiente.gub.uy/oan/evaluacion-ambiental-estrategica/");
				    $(this).attr("href", httpsUrl);
				}
			});


			$(".dropdown > a").click(function() { 

				var titulo = $(this).attr("title");

				if (titulo == "Geoportal") {
			        window.location = "https://www.ambiente.gub.uy/oan/geoportal/";
				}
				if (titulo == "Residuos") {
			        window.location = "https://www.ambiente.gub.uy/oan/residuos-2025/";
				}
				if (titulo == "Evaluación Ambiental Estratégica") {
			        window.location = "https://www.ambiente.gub.uy/oan/evaluacion-ambiental-estrategica/";
				}
			});	

		}else{

			//$("#menu-menu").append( "<li class='menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-12'><a href='https://www.ambiente.gub.uy/oan/geoportal/'>Geoportal</a></li>");
			//$("#menu-menu").append( "<li class='menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-12'><a href='https://www.ambiente.gub.uy/oan/residuos-2025/'>Residuos</a></li>");
			//$("#menu-menu").append( "<li class='menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-12'><a href='https://www.ambiente.gub.uy/oan/evaluacion-ambiental-estrategica/'>Evaluación Ambiental Estratégica</a></li>");
		}	
		/*Redirect Geoportal drpdown **********************************************************************/


		//$("#aviso").click();

		/* ==========================================================================
		 #Bioseguridad
		 ========================================================================== */    
		//bioseguridad = GenerateRecords("nationalreport2", "uy", "es");
		//$("#biosegurdiad").html(bioseguridad);

		/* ==========================================================================
		 #Fullsize - Boxer
		 ========================================================================== */        
		if(onMobile === false){     
	    
	        $(".fullwidth").boxer({
	          	fixed: true,
	          	videoWidth: 1200,
	    		/*mobile: true*/
	        });
	    
	    }else{
	        $(".fullwidth").boxer({
	          	fixed: true,
	          	videoWidth: 1200,
	    		mobile: true
	        });	    	
	    }

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
		#Expo Uruguay CHART
		========================================================================== */
		$('.chart').easyPieChart({
			easing: 'easeInOut',
			barColor: '#37A092', //#37A092
			trackColor: '#37A092',//#d1d1d1
			scaleColor: false,
			lineWidth: 10,
			size: 152,
			onStep: function(from, to, percent) {
				$(this.el).find('.percent').text(Math.round(percent));
			}
		});

		/* ==========================================================================
		#Expo Uruguay CHART
		========================================================================== */


		/* ==========================================================================
		#Expo Uruguay Sostenible
		========================================================================== */

		$(".modal-expo").click(function() {
				//alert("hola");
				$('#reuneModal').modal('show'); 
		});	

		$( "#menu-expo ul li > a" ).click(function() {
			var link = $(this).attr("href");

			if (link == "#laferia") {
				hide_panels_expo();
				$("#page-laferia").show(500);
				$(this).addClass("active-item-expo");
			}

			if (link == "#agenda") {
				hide_panels_expo();
				$("#page-agenda").show(500);
				$(this).addClass("active-item-expo");
			}

			if (link == "#comoparticipar") {
				hide_panels_expo();
				$("#page-comoparticipar").show(500);
				$(this).addClass("active-item-expo");
			}

			if (link == "#expositores") {
				hide_panels_expo();
				$("#page-expositores").show(500);
				$(this).addClass("active-item-expo");
			}

			if (link == "#prensa") {
				hide_panels_expo();
				$("#page-prensa").show(500);
				$(this).addClass("active-item-expo");
			}			

			if (link == "#contacto") {
				hide_panels_expo();
				$("#page-contacto").show(500);
				$(this).addClass("active-item-expo");
			}		

		});


		var linkAgenda = document.location.href;
		if (linkAgenda == "https://www.ambiente.gub.uy/oan/expo-uruguay-sostenible/#agenda2023") {

			console.log('document.location', document.location.href);

				hide_panels_expo2023();
				$("#page-agenda2023").show(500);
				$("#menu-expo2023 ul li > a").addClass("active-item-expo2023");

		}


		$( "#menu-expo2023 ul li > a" ).click(function() {
			var link = $(this).attr("href");

			if (link == "#laferia2023") {
				hide_panels_expo2023();
				$("#page-laferia2023").show(500);
				$(this).addClass("active-item-expo2023");
			}

			if (link == "#agenda2023") {
				hide_panels_expo2023();
				$("#page-agenda2023").show(500);
				$(this).addClass("active-item-expo2023");
			}

			if (link == "#comoparticipar2023") {
				hide_panels_expo2023();
				$("#page-comoparticipar2023").show(500);
				$(this).addClass("active-item-expo2023");
			}

			if (link == "#expositores2023") {
				hide_panels_expo2023();
				$("#page-expositores2023").show(500);
				$(this).addClass("active-item-expo2023");
			}

			if (link == "#prensa2023") {
				hide_panels_expo2023();
				$("#page-prensa2023").show(500);
				$(this).addClass("active-item-expo2023");
			}			

			if (link == "#contacto2023") {
				hide_panels_expo2023();
				$("#page-contacto2023").show(500);
				$(this).addClass("active-item-expo2023");
			}		

		});


		function hide_panels_expo(){
			$("#page-agenda").hide(500);
			$("#page-laferia").hide(500);
			$("#page-comoparticipar").hide(500);
			$("#page-expositores").hide(500);
			$("#page-prensa").hide(500);
			$("#page-contacto").hide(500);

			$("#menu-expo ul li > a").removeClass("active-item-expo");
		}

		function hide_panels_expo2023(){
			$("#page-agenda2023").hide(500);
			$("#page-laferia2023").hide(500);
			$("#page-comoparticipar2023").hide(500);
			$("#page-expositores2023").hide(500);
			$("#page-prensa2023").hide(500);
			$("#page-contacto2023").hide(500);

			$("#menu-expo2023 ul li > a").removeClass("active-item-expo2023");
		}

		function hide_panels_expo2024(){
			$("#page-laexpo2024").hide(500);
			$("#page-serparte2024").hide(500);
			$("#page-contacto2024").hide(500);
			$("#menu-expo2024 ul li > a").removeClass("active-item-expo2024");
		}


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
			transitionStyle: "fade",

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
				
		var owl= $(".dia");      
			owl.owlCarousel({
			stopOnHover : true,	
			rewindNav : true,	
			paginationSpeed : 1000,
			goToFirstSpeed : 2000,
			singleItem : true,			 
			autoHeight : false,
			autoPlay : false,
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

		$('.fotos_area_proteguida').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : false, 
			rewindNav : true,       
			items : 4, //10 items above 1000px browser width
			itemsDesktop : [1170,1], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,1], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});						

		$('.areas-protegidas').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : false, 
			rewindNav : true,       
			items : 5, //10 items above 1000px browser width
			itemsDesktop : [1170,1], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,1], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});

		$('.slide-videos').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 4, //10 items above 1000px browser width
			itemsDesktop : [1170,2], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,2], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});

		$('.slide-videos-2024').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 1, //10 items above 1000px browser width
			itemsDesktop : [1170,1], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,1], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});

		$('.slide-videos-premio-ambiente').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 1, //10 items above 1000px browser width
			itemsDesktop : [1170,2], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,2], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});


		$('.slide-expo').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 5, //10 items above 1000px browser width
			itemsDesktop : [1170,3], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,3], // betweem 900px and 601px
			itemsTablet: [767,3], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});
		$('.slide-expo2').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 1, //10 items above 1000px browser width
			itemsDesktop : [1170,2], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,2], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});

		$('.slide-fotos-premio').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 8, //10 items above 1000px browser width
			itemsDesktop : [1170,3], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,3], // betweem 900px and 601px
			itemsTablet: [767,3], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});

		$('.slide-fotos-premio-2024').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 3, //10 items above 1000px browser width
			itemsDesktop : [1170,3], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,2], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});

		$('.slide-agenda2024').owlCarousel({
			autoPlay : true,
			navigation:true,
			stopOnHover : true, 
			rewindNav : true,       
			items : 4, //10 items above 1000px browser width
			itemsDesktop : [1170,3], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,2], // betweem 900px and 601px
			itemsTablet: [767,1], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});		


		$('.slide-fotos-premio-2023').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 1, //10 items above 1000px browser width
			itemsDesktop : [1170,2], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,2], // betweem 900px and 601px
			itemsTablet: [767,2], //2 items between 600 and 0
			autoHeight : true,
			itemsMobile : true // itemsMobile disabled - inherit from itemsTablet option
		});	

		$('.slide-skills').owlCarousel({
			autoPlay : true,
			navigation:false,
			stopOnHover : true, 
			rewindNav : true,       
			items : 5, //10 items above 1000px browser width
			itemsDesktop : [1170,2], //5 items between 1000px and 901px
			itemsDesktopSmall : [900,2], // betweem 900px and 601px
			itemsTablet: [767,2], //2 items between 600 and 0
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
           #Cambiar mapa home - departamentos
           ========================================================================== */

          $( ".panel-title" ).click(function(){
            var id = $(this).attr("id");
            var path_image = $(this).attr("data-path");

            //mapas = mapas_front//Cantidad de mapas a mostrar

            for (var i = 1 ; i < mapas; i++) {

	            if (id=="depto_"+i) {
	              $("#mapa_home").attr("src",path_image);
	            }

            }

            $(this).attr("class", active);

          });


	    /* ==========================================================================
	     #Back top
	     ========================================================================== */
			//Norberto - Afuera de la funcion de scroll para que la guarde
			var $imgHeight = $('#mbann0').height(); //altura del primer elemento del slider (si hay)
			var $alto = 198+$imgHeight;


	    $(window).scroll(function() {   

				//var imgWidth = $('#mbann').width();
				//alert($imgHeight);
				
		        if (($(window).scrollTop() > 400)) {
		            $("#back-top").fadeIn(200);
		        } else {
		            $("#back-top").fadeOut(200);
		        }
			
				/*
					var alto=598;
				}else{
					var alto=198;
				}
				*/

				if (($(".nav").offset().top > $alto)){
					$("#menu").addClass("menu-fixed").fadeIn(300);
					$("#mfb").show(); //cambio norberto - clase agregada a styles.css
				}else{
					//alert("LLEGUE");
					$("#mfb").hide();	 //cambio norberto - clase agregada a styles.css					
					$("#menu").removeClass("menu-fixed");
				}

			//Norberto
			
	    });
	    
	    $('#back-top').click(function() {
	        $('html, body').stop().animate({
	            scrollTop : 0
	        }, 1000, 'easeInOutExpo');
	    }); 


	    /* ==========================================================================
	     #Videos SNAP
	     ========================================================================== */
	    var url = window.location.href;
	    url = url.split("/");

	    if (url[4] == "sistema-nacional-de-areas-protegidas") {
				document.getElementById("popup_home_snap").click();
			}

	    if (url[4] == "laguna-de-rocha") {
				alert("asd");
				document.getElementById("popup_snap").click();

			}			
	    /* ==========================================================================
	     #Videos SNAP
	     ========================================================================== */
			

	    /* ==========================================================================
	     #Aviso Home - Premcio Nacional de Ambiente
	     ========================================================================== */


		document.addEventListener('DOMContentLoaded', function() {
		  var urlParts = window.location.pathname.split('/').filter(Boolean); // elimina vacíos
		  console.log(urlParts);

		  if (urlParts.length < 2) { // dominio.com/ o dominio.com/seccion/
		    var popupBtn = document.getElementById("popup_home_premio");
		    if (popupBtn) {
		      popupBtn.click();
		    }
		  }
		});

		/*
	    var url = window.location.href;
	    url = url.split("/");

	    if (url[4] == "") {
				document.getElementById("popup_home_premio").click();
			}
		*/		
	    /* ==========================================================================
	     #Aviso Home - Premcio Nacional de Ambiente
	     ========================================================================== */


		/* ==========================================================================
		#Scroll
		========================================================================== */
		
		function getParameterByName(name) {
		    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
		    results = regex.exec(location.search);
		    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}

		var tool = getParameterByName('tool');
		if(tool == 'blooms'){
			$("#loader3").html('<div class="loader2"><div class="inner2"></div></div>');
		}

		/* ==========================================================================
		#Load
		========================================================================== */
		$(window).on('load', function(){
			if(tool == 'blooms'){
				document.getElementById("bloom").click();	
			}
			$("#loader3").fadeOut();

		});

	});


	


/* ==========================================================================
 #Google Map - SNAP
 ========================================================================== */

var customMapStyle = [
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#b4d4e1"
            },
            {
                "visibility": "on"
            }
        ]
    }
]

var i,z;
var marker2 = [];
var gmarkers = [];

function viewMap2() {
	
	//var mapa_base = 'https://www.ambiente.gub.uy/oan/wp-content/themes/observatorio-theme4/kml/valle_lunarejo.kml';

    var mapOptions2 = {
      zoom: 10,
      scrollwheel: false,
      navigationControl: true,
      mapTypeControl: true,
      scaleControl: false,
      draggable: true,      
      center: new google.maps.LatLng(lat2,long2),
      styles: customMapStyle
    };

    var mapElement2 = document.getElementById('map2');
    var map2 = new google.maps.Map(mapElement2, mapOptions2);

    /* KML *****************************************************/
    //alert(zoom_mapa_base2);
    map2.setZoom(Number(zoom_mapa_base));

    var kmlLayer_mapa_base = new google.maps.KmlLayer(mapa_base, {
      suppressInfoWindows: false,
      preserveViewport: true,
      map: map2
    });

    kmlLayer_mapa_base.addListener('click', function(event) {
      var content = event.featureData.infoWindowHtml;
      var info_popup = document.getElementById('capture');
      info_popup.innerHTML = content;
    });

	google.maps.event.addListener(kmlLayer_mapa_base, 'defaultviewport_changed', function() {
	      var bounds = kmlLayer_mapa_base.getDefaultViewport();
	      map2.setCenter(bounds.getCenter());
	});

    /* KML *****************************************************/

    var infowindow2 = new google.maps.InfoWindow({
      content: contentString2
    });
	
	for (i = 0; i < locations.length; i++) {

		var image2 = locations[i][4];
		marker2[i] = new google.maps.Marker({
		  position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		  map: map2,
		  icon: image2
		});
		

		google.maps.event.addListener(marker2[i], 'click', (function(marker2, i) {
		  return function() {
		    infowindow2.setContent(locations[i][0]);
		    infowindow2.open(map2, marker2[i]);
		  }
		})(marker2, i));

		//gmarkers[i].push(marker2);
		//markers.push(marker2[i]);

	}

  } 

	if (document.getElementById('map2')) {
	    viewMap2();
	}

//  viewMap2();
/*Mapa áreas proteguidas*/


	/* ==========================================================================
	 #Filtro mapa SNAP
	 ========================================================================== */

	 /*Baños */
    $('#checkbox_banos').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Baños' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Baños' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });

	 /*Loberias */
    $('#checkbox_loberias').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Loberías' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Loberías' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });

	 /*Puntos de interés */
    $('#checkbox_puntos-de-interes').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Puntos de interés' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Puntos de interés' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });

	 /*Restaurantes */
    $('#checkbox_restaurantes').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Restaurantes' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Restaurantes' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });

	 /*Acceso */
    $('#checkbox_acceso').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Acceso' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Acceso' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });

	 /*Camping */
    $('#checkbox_camping').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Camping' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Camping' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });    

	 /*Alojamiento */
    $('#checkbox_alojamiento').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Alojamiento' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Alojamiento' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });    

	 /*Centro de visitantes */
    $('#checkbox_centro-de-visitantes').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Centro de visitantes' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Centro de visitantes' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });       


	 /*Centro de visitantes */
    $('#checkbox_sitio-de-interes').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Sitio de interés' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Sitio de interés' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });      

	 /*Terminal de pasajeros */
    $('#checkbox_terminal-de-pasajeros').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Terminal de pasajeros' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Terminal de pasajeros' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });      
   /*Terminal de pasajeros */


	 /* Información turística */
    $('#checkbox_informacion-turistica').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Información turística' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Información turística' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });      
   /* Información turística */   


	 /* Comida */
    $('#checkbox_comida').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Comida' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Comida' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });      
   /* Comida */   


	 /* Alimentación */
    $('#checkbox_alimentacion').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Alimentación' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Alimentación' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });      
   /* Alimentación */        

	/* Administracion */
    $('#checkbox_administracion').change(function() {
        if($(this).is(":checked")) {
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Administración' ) {
					marker2[i].setVisible(true);
				}
			}
        }else{
			for (i = 0; i < locations.length; i++) {
				var str = locations[i][0];
				filtro = str.split("<br>");
				categoria = filtro[0].replace( /(<([^>]+)>)/ig, '');

				if (categoria == 'Administración' ) {
					marker2[i].setVisible(false);
				}
			}
        }
    });      
   /* Administracion */     

	/* ==========================================================================
	 #Filtro mapa SNAP
	 ========================================================================== */

	 /*PWA*/
	 /*
	if ('serviceWorker' in navigator) {
	  navigator.serviceWorker.register('sw.js')
	    .then(() => console.log('✅ SW registrado'))
	    .catch(error => console.error('Error registrando SW:', error));
	}
	*/

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
 #Google Map - Footer
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



/* ==========================================================================
 #Rezise Iframe
 ========================================================================== */
function rezise_iframe_old(){
	
	var iframe = document.getElementById("ifr").contentWindow;
	if(iframe.$("html").outerHeight() != 0){
		jQuery(function($){
			$('#ifr').css({height: iframe.$("html").outerHeight()+100});
		});
	}
	
}



function rezise_iframe() {
    var iframe = document.getElementById("ifr");
    
    try {
        var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
        if (iframeDocument) {
            var iframeHeight = iframeDocument.documentElement.scrollHeight;
            iframe.style.height = iframeHeight + "px";
        }
    } catch (error) {
        console.error("No se puede acceder al contenido del iframe:", error);
    }
}

var iframe = document.getElementById("ifr");

if (iframe) {
    // Si el iframe existe, asocia el evento onload
    iframe.onload = resizeIframe;
}

// Llama a esta función después de que el iframe haya cargado su contenido
//document.getElementById("ifr").onload = rezise_iframe;


/* ==========================================================================
 #Acordeon Item - Change
 ========================================================================== */
(function() {  
	/*
  $(".panel").on("show.bs.collapse hide.bs.collapse", function(e) {
    if (e.type=='show'){
      $(this).addClass('active_icon');
    }else{
      $(this).removeClass('active_icon');
    }
  });  
	*/
}).call(this);


/* ==========================================================================
 #Get parm URL // NORBERTO (no anda en test por tema de crosscripting entre diferentes dominios)
 ========================================================================== */
document.addEventListener('DOMContentLoaded', function() {
  var currentLocation = window.location;
  var pathname = new URL(currentLocation).pathname;
  console.log(pathname);

  var sURLVariables = pathname.split('/');
  console.log(sURLVariables[3]);

  var edificacionInput = document.getElementById('edificacion');
  if (edificacionInput && sURLVariables[3]) {
    edificacionInput.value = sURLVariables[3];
  }
});


/*
var currentLocation = window.location;
var pathname = new URL(currentLocation).pathname;
console.log(pathname);

var sURLVariables = pathname.split('/');
console.log(sURLVariables[3]);

document.getElementById('edificacion').value = sURLVariables[3];
*/


