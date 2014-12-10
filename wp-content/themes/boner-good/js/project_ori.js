$(function() {
	$('body').addClass('js');

	// Config for the homepage slideshow
	$('#homeslides ul').anythingSlider({
		buildArrows:true,
		buildNavigation:false,
		expand:true,
		infiniteSlides:false,
		hashTags:false,
		buildStartStop:false,
		mode: 'fade',
		delay: 6500,
		animationTime: 600,
		autoPlay:true,
		pauseOnHover:false,
		resumeDelay: 3000,
		autoPlayLocked:true
	});

	// Config for the collection slideshow
	$('#collection ul').anythingSlider({
		buildArrows:true,
		buildNavigation:false,
		expand:true,
		infiniteSlides: true,
		hashTags:false,
		buildStartStop:false,
		showMultiple: 2,
		delay: 4000,
		animationTime: 200,
		autoPlay:false,
		pauseOnHover:false,
		resumeDelay: 3000
	});

	// Config for the collection slideshow
	$('#productslides ul').anythingSlider({
		buildArrows:false,
		buildNavigation:true,
		infiniteSlides: false,
		mode: 'fade',
		hashTags:false,
		buildStartStop:false,
		delay: 4000,
		animationTime: 200,
		autoPlay:true,
		resumeDelay: 3000
	});

	/* OMG:17/01/2014 REMOVED this. The shop item page will be a link and not an overlay. This is no longer needed.
	$('#shop .more').click(function(e){
		e.preventDefault();
		$('#shop aside').fadeOut('fast');
		$(this).siblings('aside').find('#productslides ul').anythingSlider('1');
		$(this).siblings('aside').fadeIn('fast');
	});
	*/
	
	/* OMG:17/01/2014 REMOVED this. The shop item page will be a link and not an overlay. This is no longer needed.
	$('#shop .close').click(function(e){
		e.preventDefault();
		$(this).parent().fadeOut('fast');
	});
	*/

	$('#socialinstagram').click(function(e){
		e.preventDefault();
		$('#social .tip').clearQueue().fadeIn('fast').delay('3000').fadeOut('slow');
	});

	var mail = $('#mail');
	$(mail).find('label').hide();
	$(mail).find('#mc_mv_EMAIL').attr('placeholder', 'Email');
	$(mail).find('#mc_mv_FNAME').attr('placeholder', 'First Name');
	$(mail).find('#mc_mv_LNAME').attr('placeholder', 'Last Name');
	$(mail).find('#mc_signup').append('<a class="close" href="#">&#10005;</a>');
	$.Placeholder.init();

	$('#socialnews').click(function(e){
		$(mail).fadeIn('fast');
		e.preventDefault();
	});

	$('#mail .close').click(function(e){
		$(mail).fadeOut('fast');
		e.preventDefault();
	});

	//open certain links in new window
	$('a[title="external"]').attr('target', '_blank');

	$('.controls h1').click(function(){
		$('.storelist').slideToggle('fast');
	});

	//Move online sgtores to the bottom of the list
	$('a[href="#299"]').remove().appendTo('.storelist');

	//Open first store on pageload
	$('.store:last').fadeIn('slow');

	//Open selected store
	$('.storelist a').click(function(e){
		e.preventDefault();
		var target = $(this.hash);
		$('.store').hide();
		$(target).fadeIn('fast');
	});

	//initiate the instagram feed
	$(".instagram ul").jqinstapics({
		"user_id": "7718211",
		"access_token": "7718211.674061d.3f18c28920864aabaa335095d55adc79",
		"count": 21
	});

	//variables for our modal layer
	var modal = $('#modal');
	var modalfigure = $(modal).find('figure');

	$.fn.properlightbox = function() {
		$(this).find('li').click(function(){
			
			var fullimg = $(this).find('.fullsize');
			if (fullimg.hasClass('DPS')) {
				$(modalfigure).width('900px');
			} else {
				$(modalfigure).width('600px');
			}

			$(modal).find('img, .nav').remove();
			$(modal).fadeIn('fast');
			$(fullimg).clone().appendTo(modalfigure).fadeIn('slow');

			var thisli = $(this),
				nextitem = $(thisli).next(),
				previtem = $(thisli).prev(),
				nextbutton = $('<span style="display:none;" class="nav next"></span>'),
				prevbutton = $('<span style="display:none;" class="nav prev"></span>');

			if ( nextitem.is('li') ) {
				$(nextbutton).appendTo(modalfigure).fadeIn('slow');
			}
			if ( previtem.is('li') ) {
				$(prevbutton).appendTo(modalfigure).fadeIn('slow');
			}

			$(prevbutton).click(function(e){
				e.stopPropagation();
				$(modal).find('img, .nav').fadeTo('slow', 0.1,  function(){
					$(previtem).trigger('click');
				});
			});

			$(nextbutton).click(function(e){
				e.stopPropagation();
				$(modal).find('img, .nav').fadeTo('slow', 0.1,  function(){
					$(nextitem).trigger('click');
				});
			});

		});
	};

	//clear the modal
	$(modal).click(function(){
		$(this).fadeOut('fast', function() {
			$(this).find('img, .nav').remove();
		});
		return false;
	});

	//smooth scroll function
	//var scrollElement = 'html, body';
	//$('html, body').each(function () {
	//	var initScrollTop = $(this).attr('scrollTop');
	//	$(this).attr('scrollTop', initScrollTop + 1);
	//	if ($(this).attr('scrollTop') === initScrollTop + 1) {
	//		scrollElement = this.nodeName.toLowerCase();
	//		$(this).attr('scrollTop', initScrollTop);
	//		return false;
	//	}
	//});

	//Shop popup navigation
	//$('#shop aside').each(function(){
	//	var nextitem = $(this).parent().next(),
	//		previtem = $(this).parent().prev(),
	//		nexttargetid = $(nextitem).attr('ID'),
	//		prevtargetid = $(previtem).attr('ID'),
	//		nextbutton = $('<a href="#' + nexttargetid + '" class="nav next">Next</span>'),
	//		prevbutton = $('<a href="#' + prevtargetid + '" class="nav prev">Previous</span>');

	//		if ( nextitem.is('article') ) {
	//			$(this).find('.navigation').append(nextbutton);
	//		}
	//		if ( previtem.is('article') ) {
	//			$(this).find('.navigation').append(prevbutton);
	//		}
	//});
	//$('#shop .nav.next').click(function(e){
	//	e.preventDefault();
	//	$(this).parent().parent().parent().fadeOut('fast');
	//	var shownext = $(this).parent().parent().parent().parent().next();
	//	$(shownext).find('#productslides ul').anythingSlider('1');
	//	$(shownext).find('aside').fadeIn('fast');
		// Smooth scrolling for shop
	//	var target = this.hash,
	//	$target = $(target);
		
	//	$(scrollElement).stop().animate({
	//		'scrollTop': $target.offset().top -100
	//	}, 300, 'swing', function() {
	//		window.location.hash = target;
	//	});
	//});
	//$('#shop .nav.prev').click(function(e){
	//	e.preventDefault();
	//	$(this).parent().parent().parent().fadeOut('fast');
	//	var shownext = $(this).parent().parent().parent().parent().prev();
	//	$(shownext).find('#productslides ul').anythingSlider('1');
	//	$(shownext).find('aside').fadeIn('fast');
		// Smooth scrolling for shop
	//	var target = this.hash,
	//	$target = $(target);
		
	//	$(scrollElement).stop().animate({
	//		'scrollTop': $target.offset().top -100
	//	}, 300, 'swing', function() {
	//		window.location.hash = target;
	//	});
	//});

	// close shop pop when clicking background
	$('body.page-id-111').click(function(e){
		if ( $(e.target).is('body.page-id-111') ) {
			$('#shop aside').fadeOut('fast');
		} else if ( $(e.target).is('#shop') ) {
			$('#shop aside').fadeOut('fast');
		}
	});

});

$(window).load(function() {

	//remove loading layer
	$('#homeslides').addClass('loaded');
	$('#collection').addClass('loaded');

	//Animate in first slide
	$('#homeslides .panel:first').addClass('activePage');

	//move instagram pics to modal layer
	$('.instagram').find('img').addClass('fullsize');
	$('.instagram').properlightbox();

});