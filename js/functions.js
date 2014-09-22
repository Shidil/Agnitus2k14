// If JavaScript is enabled remove 'no-js' class and give 'js' class
jQuery('html').removeClass('no-js').addClass('js');

// Add .osx class to html if on Os/x
if ( navigator.appVersion.indexOf("Mac")!=-1 ) 
	jQuery('html').addClass('osx');

// When DOM is fully loaded
jQuery(document).ready(function($) {
  "use strict";

/* --------------------------------------------------------	
	 External Links
   --------------------------------------------------------	*/	

	(function() {
	    $(window).load(function() {
			$('a[rel=external]').attr('target','_blank');	
		});                                            
	})();  

/* --------------------------------------------------------	
	 Tooltips
   --------------------------------------------------------	*/	

	(function() {
    $('body').tooltip({
        delay: { show: 300, hide: 0 },
        selector: '[data-toggle=tooltip]:not([disabled])'
    });
  })(); 
    
/* --------------------------------------------------------	
	 Dynamic Progress Bar
   --------------------------------------------------------	*/

  $(window).load(function(){    
    $('.bar').css('width',  function(){ return ($(this).attr('data-percentage')+'%')});
  });

/* --------------------------------------------------------	
	 Responsive Navigation
   --------------------------------------------------------	*/	
	
	(function() {

		var $mainNav    = $('.navbar .nav'),
			responsiveNav = '';

		// Responsive nav
		$mainNav.find('li').each(function() {
			var $this   = $(this),
				$link = $this.children('a'),
				depth   = $this.parents('ul').length - 1,
				indent  = '';

			if( depth ) {
				while( depth > 0 ) {
					indent += ' - ';
					depth--;
				}
			}

			if ($link.text())
				responsiveNav += '<option ' + ($this.hasClass('active') ? 'selected="selected"':'') + ' value="' + $link.attr('href') + '">' + indent + ' ' + $link.text() + '</option>';

		}).end().after('<select class="nav-responsive">' + responsiveNav + '</select>');

		$('.nav-responsive').on('change', function() {
			window.location = $(this).val();
		});
			
	})();     
  
/* --------------------------------------------------------	
	 Magnific Popup
   --------------------------------------------------------	*/
  
  $(document).ready(function() {
    $('.image-link').magnificPopup({type:'image'});
  });


  $(document).ready(function() {
  	$('.popup-gallery').magnificPopup({
  		delegate: 'a',
  		type: 'image',
  		tLoading: 'Loading image #%curr%...',
  		mainClass: 'mfp-img-mobile',
  		gallery: {
  			enabled: true,
  			navigateByImgClick: true,
  			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
  		},
  		image: {
  			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
  			titleSrc: function(item) {
  				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
  			}
  		}
  	});
  });

/* --------------------------------------------------------	
	 Portfolio 
   --------------------------------------------------------	*/	

   (function() {
		$(window).load(function(){
			// container
			var $container = $('#portfolio-items');
			function filter_projects(tag)
			{
			  // filter projects
			  $container.isotope({ filter: tag });
			  // clear active class
			  $('li.active').removeClass('active');
			  // add active class to filter selector
			  $('#portfolio-filter').find("[data-filter='" + tag + "']").parent().addClass('active');
			}
			if ($container.length) {
				// conver data-tags to classes
				$('.project').each(function(){
					var $this = $(this);
					var tags = $this.data('tags');
					if (tags) {
						var classes = tags.split(',');
						for (var i = classes.length - 1; i >= 0; i--) {
							$this.addClass(classes[i]);
						};
					}
				})
				// initialize isotope
				$container.isotope({
				  // options...
				  itemSelector : '.project',
				  layoutMode   : 'fitRows'
				});
				// filter items
				$('#portfolio-filter li a').click(function(){
					var selector = $(this).attr('data-filter');
					filter_projects(selector);
					return false;
				});
				// filter tags if location.has is available. e.g. http://example.com/work.html#design will filter projects within this category
				if (window.location.hash!='')
				{
					filter_projects( '.' + window.location.hash.replace('#','') );
				}
			}
		})

	})();

/* --------------------------------------------------------	
	 Flex Initialize
   --------------------------------------------------------	*/	

$(window).load(function() {

  $('.flex-1').flexslider({
    animation: "slide",
    slideshow: false,
    useCSS : false,
    animationLoop: true 	
  });
 
  jQuery('.flex-1 .flex-direction-nav .flex-next').html('<i class="icon-angle-right"></i>');
  jQuery('.flex-1 .flex-direction-nav .flex-prev').html('<i class="icon-angle-left"></i>'); 
 
  $('.flex-2').flexslider({
    animationLoop: false,
		animation: 'slide',
    useCSS : false
	 });     

  $('.flex-3').flexslider({
    animation: "slide",
    slideshow: false,
    useCSS : false,
    animationLoop: false 	
  });
 
  jQuery('.flex-3 .flex-direction-nav .flex-next').html('<i class="icon-angle-right"></i>');
  jQuery('.flex-3 .flex-direction-nav .flex-prev').html('<i class="icon-angle-left"></i>'); 

  $('.flex-4').flexslider({
    animationLoop: false,
		animation: 'slide',
    useCSS : false
	 }); 

}); 

/* --------------------------------------------------------	
	 Accordion Active
   --------------------------------------------------------	*/	
                  
$(function() {

    $('.accordion').on('show', function (e) {
         $(e.target).prev('.accordion-heading').find('.accordion-toggle').addClass('ac-active');
    });
    
    $('.accordion').on('hide', function (e) {
        $(this).find('.accordion-toggle').not($(e.target)).removeClass('ac-active');
    });
        
});

/* --------------------------------------------------------	
	 Fitvids
   --------------------------------------------------------	*/	

  $(window).load(function() {
    $("body").fitVids();
  });

/* --------------------------------------------------------	
	 Parallax
   --------------------------------------------------------	*/	

  var detectmob = false;	
  if(navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {							
      detectmob = true;
  }
  
  if (detectmob === true) {
    $( '.parallax' ).each(function(){
  			$(this).addClass('parallax-mobile');
  	});
  }
  else {
      $( '#parallax-one' ).parallax();
      $( '#parallax-two' ).parallax();
      $( '#parallax-three' ).parallax();
  }

/* --------------------------------------------------------	
	 Refine Slider
   --------------------------------------------------------	*/	
  
  $(window).load(function() {

  //main slider

  $('.main-slider-direct-nav').refineSlide({
    maxWidth              : 1920,      // Max slider width - should be set to image width
    transition            : 'random',  // String (default 'cubeV'): Transition type ('custom', random', 'cubeH', 'cubeV', 'fade', 'sliceH', 'sliceV', 'slideH', 'slideV', 'scale', 'blockScale', 'kaleidoscope', 'fan', 'blindH', 'blindV')
    fallback3d            : 'random', // String (default 'sliceV'): Fallback for browsers that support transitions, but not 3d transforms (only used if primary transition makes use of 3d-transforms)
    customTransitions     : [],       // Arr (Custom transitions wrapper)
    perspective           : 1000,     // Perspective (used for 3d transforms)
    useThumbs             : false,     // Bool (default true): Navigation type thumbnails
    useArrows             : true,    // Bool (default false): Navigation type previous and next arrows
    thumbMargin           : 3,        // Int (default 3): Percentage width of thumb margin
    autoPlay              : false,    // Int (default false): Auto-cycle slider
    delay                 : 5000,     // Int (default 5000) Time between slides in ms
    transitionDuration    : 800,      // Int (default 800): Transition length in ms
    startSlide            : 0,        // Int (default 0): First slide
    keyNav                : true,     // Bool (default true): Use left/right arrow keys to switch slide
    captionWidth          : 50,       // Int (default 50): Percentage of slide taken by caption
    arrowTemplate         : '<div class="rs-arrows"><a href="#" class="rs-prev"></a><a href="#" class="rs-next"></a></div>', // String: The markup used for arrow controls (if arrows are used). Must use classes '.rs-next' & '.rs-prev'
    onInit                : function () {}, // Func: User-defined, fires with slider initialisation
    onChange              : function () {}, // Func: User-defined, fires with transition start
    afterChange           : function () {}  // Func: User-defined, fires after transition end

  });
  jQuery('.rs-arrows .rs-next').html('<i class="icon-angle-right"></i>');
  jQuery('.rs-arrows .rs-prev').html('<i class="icon-angle-left"></i>');

});      

/* --------------------------------------------------------	
	 SLY Effects
   --------------------------------------------------------	*/

	(function () {
		var $frame = $('#effects');
		var $wrap  = $frame.parent();
    
		// Call Sly on frame
		$frame.sly({
			horizontal: 1,
			itemNav: 'forceCentered',
			smart: 1,
			activateMiddle: 1,
			activateOn: 'click',
			mouseDragging: 1,
			touchDragging: 1,
			releaseSwing: 1,
		  cycleBy:       'items', // Enable automatic cycling by 'items' or 'pages'.
		  cycleInterval: 5000, // Delay between cycles in milliseconds.
		  pauseOnHover:  0,    // Pause cycling when mouse hovers over the FRAME.
		  startPaused:   0,    // Whether to start in paused sate.      
			startAt: 3,
			scrollBar: $wrap.find('.scrollbar'),
			scrollBy: 1,
			speed: 300,
			elasticBounds: 1,
	 		easing: 'swing',
			dragHandle: 1,
			dynamicHandle: 1,
			clickBar: 1,
  
			// Buttons
			prev: $wrap.find('.prev'),
			next: $wrap.find('.next')
		});

      // reload on resize
      
      $(window).resize(function(e) {
        
        $frame.sly('reload');       
         
      });

  }());    

/* --------------------------------------------------------	
	 Site Scrolling
   --------------------------------------------------------	*/

  $(document).ready(function()
  {
      // Scroll the whole document
      $('#box-links').localScroll({
         target:'body'
      });

  });
  
/* --------------------------------------------------------	
	 Countdown
   --------------------------------------------------------	*/

  $(function() {
  
    $('.countdown').countdown({
      date: "december 11, 2013 14:30:00",
      render: function(data) {
        var el = $(this.el);
        el.empty()
          .append("<div class=\"counter-item item-day\">" + this.leadingZeros(data.days, 2) + "</div>")
          .append("<div class=\"counter-item\">" + this.leadingZeros(data.hours, 2) + "</div>")
          .append("<div class=\"counter-item\">" + this.leadingZeros(data.min, 2) + "</div>")
          .append("<div class=\"counter-item\">" + this.leadingZeros(data.sec, 2) + "</div>");
      }
    });

  });
        
/* --------------------------------------------------------	
	 Fixed Menu
   --------------------------------------------------------	*/





/* --------------------------------------------------------	
	 Select Menu Scroll
   --------------------------------------------------------	*/

  $(".nav-responsive").change(function() {	
		$('html, body').animate({
	        scrollTop: $($(this).find("option:selected").val()).offset().top - 100 }, 750);
  });
  
/* --------------------------------------------------------	
	 Color Picker
   --------------------------------------------------------	*/	

    $(".orange" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#ed7933',
       '@theme-color-2': '#009bed'
      });
    	return false;
    });
    $(".red" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#e14a61',
       '@theme-color-2': '#8b2a58'
      });
    	return false;
    });
    $(".red-2" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#911146',
       '@theme-color-2': '#c955a1'
      });
    	return false;
    });    
    $(".purple" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#8d559f',
       '@theme-color-2': '#5e526d'
      });
    	return false;
    });    
    $(".violet" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#e643aa',
       '@theme-color-2': '#ba63b7'
      });
    	return false;
    });     
    $(".orange-2" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#e7b13c',
       '@theme-color-2': '#4db198'
      });
    	return false;
    });
    $(".yellow" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#f2d03b',
       '@theme-color-2': '#ea9f48'
      });
    	return false;
    });  
    $(".brown" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#de9565',
       '@theme-color-2': '#86674b'
      });
    	return false;
    });  
    $(".green" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#47d9bf',
       '@theme-color-2': '#4062a9'
      });
    	return false;
    });
    $(".green-2" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#78c242',
       '@theme-color-2': '#2f8e53'
      });
    	return false;
    });
    $(".green-3" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#3daeb8',
       '@theme-color-2': '#78b2c7'
      });
    	return false;
    });  
    $(".green-4" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#88a825',
       '@theme-color-2': '#495e5d'
      });
    	return false;
    });   
    $(".blue" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#486af2',
       '@theme-color-2': '#e3a14c'
      });
    	return false;
    });
    $(".blue-2" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#00a1d9',
       '@theme-color-2': '#3e77d7'
      });
    	return false;
    });
    $(".blue-3" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#2a6fba',
       '@theme-color-2': '#203161'
      });
    	return false;
    });
    $(".blue-4" ).click(function(){
      less.modifyVars({
       '@theme-color-1': '#04518c',
       '@theme-color-2': '#3f68a5'
      });
    	return false;
    });  
        
    $('.color-picker').animate({right: '-239px'});
      		
    $('.color-picker a.handle').click(function(e){
    	e.preventDefault();
    	var div = $('.color-picker');
    	if (div.css('right') === '-239px') {
    		$('.color-picker').animate({right: '0px'}); 
    	} 
      else {
        $('.color-picker').animate({right: '-239px'});
    	}
    });
 


});
