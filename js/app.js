jQuery(document).ready(function($) {
 

 // header nav controllers
	var menuBtn = $('.header__menu-btn'),
			navMenu = $('.header__nav-links'),
			navMenuContainer = $('.nav-links--hidden-showing');
	
	menuBtn.addClass('closed');

	menuBtn.on('click', function() {
		if(menuBtn.hasClass('closed')) {
			navMenuContainer.slideDown(400);
			navMenu.slideDown(400);
			menuBtn.removeClass('closed').addClass('open');
		} else {
			navMenu.slideUp(400);
			navMenuContainer.delay(400).fadeOut(0);
			menuBtn.removeClass('open').addClass('closed');
		}
	});

	function isWideScreen() {
		if(menuBtn.css('display') == 'none') {
			navMenu.fadeIn(0);
			navMenuContainer.fadeIn(0)
		} 
	}
	// run nav controls n page load
	isWideScreen();
	
	// close nav if screen is resized to small screen
	function isMenuOpen() {
		if(menuBtn.css('display') != 'none') {
			navMenu.fadeOut(0);
			navMenuContainer.fadeOut(0);
		} 
	}

	// performers image sizing
	function setImgHeight() {

		var screenWidth = $(window).innerWidth(),
				performerImg = $('.performer__img');

		if(screenWidth >= 768) {
			performerImg.each(function() {
				var $this = $(this),
						parent = $this.parent(),
						bioHeight = parent.find('.performer__bio').height();

				// console.log(bioHeight);

				$this.height(bioHeight);

				var thisWidth = $this.width(),
						img = $this.find('img'),
						imgWidth = img.width();

				if(imgWidth >= thisWidth) {
					img.css({
						'width' : thisWidth,
						'height' : 'auto'
					});
				} else {
					img.css({
						'width' : 'auto',
						'height' : '100%'
					});
				}
			});
		} else if(screenWidth < 768) {
			performerImg.each(function() {
				var $this = $(this),
						thisWidth = $this.width(),
						img = $this.find('img');
				$this.css('height', '');
				img.css({
						'width' : '',
						'height' : ''
					});

				

			});
		}
	}
	

	setImgHeight();

	$(window).on('resize', function() {
		isWideScreen();
		isMenuOpen();
		setImgHeight();
		// homeContactBlockHeights();
	});


	// contact block drop down
	$('.contact-block__btn').on('click', function() {
		$('.contact-block__dropdown').slideUp(300);
		console.log('clicked');
		var $this = $(this),
				$dropdown = $this.siblings('.contact-block__dropdown');
		if($this.hasClass('open')) {
			console.log('i have the class open');
			$dropdown.slideUp('300');
			$this.removeClass('open').addClass('closed');
		} else {
			console.log('i have the class closed');
			$dropdown.slideDown('300');
			$this.removeClass('closed').addClass('open');
		}
	});

	$(window).on('scroll', function() {
		if($(window).scrollTop() >= $('.banner').height() + 64) {
			$('.header__top, .header__nav-links').css('background-color', '#010B2F');
		} else {
			$('.header__top, .header__nav-links').css('background-color', '#031A67');
		}
	});






	
// end document ready
});