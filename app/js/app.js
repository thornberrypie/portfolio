var startPage = 'home';
var navPos = {'home':45, 'work':110, 'about':175, 'contact':250};
var navBreaks = [62, 136, 204];
var navWidth = 287;
var navSpeed = 456;
var thumbSpeed = 555;
var siteImgWidth = 2132;
var acronymFadeSpeed = 666;
var emailName = '<a href="mailto:gdthornber@gmail.com" target="_blank">gdthornber';
var emailDomain = 'gmail.com</a>';
var phoneNumber = '+64 (0)21 0292 4529';
var fbAddress = '<a href="//www.facebook.com/thornberrypie" target="_blank">facebook.com/thornberrypie</a>';
var playerWidth = 350;

jQuery(document).ready(function($){
	//Set up acronyms for home section
	setUpPage();

	//Set up navigation slider
	$('#nav-slider').slider({
		min: 0,
		max: navWidth,
		step: 1,
		value: navPos[startPage],
		range: "min",
		animate: true,
		stop: function(event, ui){
			var num = ui.value;
			stopDraggingNav(num);
		}
	});

	//Animate logo on mouseover
	$('h1 a').mouseenter(function(){
		$(this).find('.big').stop().animate({'top':0}, 222);
	}).mouseleave(function(){
		$(this).find('.big').stop().animate({'top':'3px'}, 222);
	});

	//Activate navigation slider and page scrolling when link is clicked
	$('.nav-link').click(function(e){
		e.preventDefault();
		var id = $(this).data('id');
		console.log(id);
		animateNavPage(id);
		//Stop work animation and hide text
		leaveWorkArea();
	});

	//Show site thumbnail on mouseover
	$('.work li').mouseenter(function(){
		$(this).addClass('over');
		animateThumb($(this), 'open');
	}).mouseleave(function(){
		$(this).removeClass('over');
		if(!$(this).hasClass('active')){
			animateThumb($(this), 'close');
		}
	});

	//Show site info and bg when site thumbnail is clicked
	$('.work li').click(function(){
		var clicked = $(this);
		var bg = $('#sitebg');
		$('p.selection').hide();
		clicked.removeClass('over');
		$('.work li.active').each(function(){
			if($(this).attr('class') != clicked.attr('class')){
				animateThumb($(this), 'close');
			}
		});
		//Pause bg instead of changing if same item is clicked
		if(clicked.hasClass('active')){
			if(clicked.hasClass('paused')){
				clicked.removeClass('paused');
				animateBackground(bg);
			}else{
				bg.stop();
				clicked.addClass('paused');
			}
		//Change/show bg and text when first/ different item is clicked
		}else{
			var clickedClass = clicked.attr('class');
			$('.work li').removeClass('active').removeClass('paused');
		//Fade bg and change image if a different item is selected
			if(bg.hasClass('hidden')){
				bg.attr('class','').css('left',0).addClass(clickedClass+'-bg');
				$('#sitebg-wrap').css('display','none').fadeIn(999);
			}else{
				$('#sitebg-wrap').fadeOut(222, function(){
					bg.attr('class','').css('left',0).addClass(clickedClass+'-bg');
					$('#sitebg-wrap').fadeIn(222);
				});
			}
			clicked.addClass('active');
		//Show site description
			showSiteText(clicked);
		//Animate background image
			animateBackground(bg);
		//Animate to "work" page in case not there already
			animateNavPage('work');
		}
	}); //end $('.work li').click(function(){

	//Run function on resize
	var timeoutid;
	$(window).resize(function() {
		clearTimeout(timeoutid);
		timeoutid = setTimeout(doneResizing, 333);
	});

	if($(window).width() < 480){
		$('.work li').each(function(){
			$(this).addClass('over');
			animateThumb($(this), 'open');
		});
	}
}); //end $(document).ready(function(){

/*--------------------------Functions------------------------------*/

function setUpPage(){
	// Scroll to start page
	//animateNavPage(startPage);

	// Fade in intro text then acronyms
	fadeInAcronyms();

	// Add information to contact area when activated
	setUpContact();

	// Hide header when scrolling down on smaller screens
	makeHeaderSticky();
}

function animateBackground(bg){
	var speed = siteImgWidth*10;
	var leftVal = bg.css('left');

	// Calculate speed to set using left value of bg if animation has been paused
	leftVal = parseFloat(leftVal.replace('-', '').replace('px', ''));
	speed = (siteImgWidth - leftVal)*10;

	bg.stop().animate({'left':'-'+siteImgWidth+'px'}, speed, 'linear', function(){
		bg.css('left',0);
		animateBackground(bg);
	});
}

function animateNavPage(id){
	// Animate navigation
	$('.ui-slider-handle').animate({'left':navPos[id]}, navSpeed, function(){
		$('#nav-slider').slider({ value:navPos[id] });
	});

	// Activate page scrolling
	var page = $('article.'+id);
	var pos = page.offset().top;
	scrollPage(pos);
}

 // e=(obj) element, f=(string) function(open or close)
function animateThumb(e, f){
	var bg1 = e.find('.bg1');
	var bg2 = e.find('.bg2');
	var layer = e.find('.layer');
	var text = e.find('p');
	var bg1val = 0;
    var bg2val = 0;
    var year = e.find('.year');

	if(f == 'open'){
		bg1val = '-100%'; bg2val = '100%';
		layer.stop().fadeOut(thumbSpeed);
		text.stop().fadeOut(thumbSpeed);
        year.stop().fadeIn(thumbSpeed);
	}else{
		layer.fadeIn(thumbSpeed);
		text.fadeIn(thumbSpeed);
        year.fadeOut(thumbSpeed);
	}

	bg1.stop().animate({'top':bg1val, 'left':bg1val}, thumbSpeed);
	bg2.stop().animate({'top':bg2val, 'left':bg2val}, thumbSpeed);
}

function doneResizing(){
	var activeItem = $('.work li.active');

	if(activeItem.length > 0){
		showSiteText(activeItem);
		activeItem.trigger('click');
	}
}

function fadeInAcronyms(){
	var acronymBox = $('.acronyms');
	var speed = acronymFadeSpeed;
	var fadeDif = speed / $('.acronyms span').length;
	var fadeDelay = 0;

	$('.intro1').delay(1333).fadeIn(666, function(){
		$('.intro2').delay(999).fadeIn(666, function(){
		// Progressively fade acronyms in faster
			acronymBox.find('span').each(function(){
				var a = $(this);
				setTimeout(function(){
					a.fadeIn(speed);
					acronymBox.attr('id', 'r'+a.attr('class'));
				}, fadeDelay);
				// a.delay(fadeDelay).fadeIn(speed);
				// acronymBox.delay(fadeDelay).attr('id', a.attr('class'));
				speed = Math.round(speed-fadeDif);
				fadeDelay = fadeDelay+speed;
			});
		});
	});
}

function leaveWorkArea(){
	if(!$('#sitebg').hasClass('hidden')){
		$('#sitebg-wrap').fadeOut(222, function(){
			$('#sitebg').attr('class','').css('left',0).addClass('hidden');
			$('.work li').removeClass('active').removeClass('paused');
			$('#sitebg-wrap').fadeIn(222);
		});

		$('#siteinfo').animate({'height':0}, 222, function(){
			$(this).html('').removeAttr('style');
		});

		// Animate thumbnail effects on mouseover/mouseout
		animateThumb($('.work li.active'), 'close');
	}
}

function makeHeaderSticky(){
	$(window).scroll(function(){
		var topPos = $(window).scrollTop();

		// console.log(topPos);
		if(topPos > 72){
            $('body').addClass('sticky-header');
        }else{
			$('body').removeClass('sticky-header');
		}
	});
}

function scrollPage(pos){
	var headerHeight = $('header').height();
	var newPos = pos - (headerHeight);

	$('html,body').animate({scrollTop: newPos}, navSpeed);
}

function setUpContact(){
	$('.contact li span').click(function(){
		var liClass = $(this).parents('li').attr('class');
		var showHtml = '';

		switch(liClass){
			case 'con-em': showHtml = emailName+'@'+emailDomain; break;
			case 'con-ph': showHtml = phoneNumber; break;
			case 'con-fb': showHtml = fbAddress; break;
		}

		$(this).fadeOut(333, function(){
			$('.'+liClass+' em').html(showHtml).show(666);
		});
	});
}

// Animate to correct height and show text when work item is clicked
function showSiteText(e){
	var siteinfo = $('#siteinfo');
	var siteInfoOrigHeight = siteinfo.height();
	var info = e.find('.info').html();

	if(siteInfoOrigHeight !== 0) siteinfo.removeAttr('style');
	siteinfo.html(info);

	var siteInfoNewHeight = siteinfo.height();
	siteinfo.height(siteInfoOrigHeight);

	if(siteInfoOrigHeight === 0) siteinfo.css('display','block');

	siteinfo.stop().animate({'height':siteInfoNewHeight}, 333);
}

// Animate to nearest page when slider has stopped being dragged
function stopDraggingNav(num){
	var id = '';

	if(num < navBreaks[2]){
		if(num < navBreaks[1]){
			id = (num < navBreaks[0]) ? 'home' : 'work';
		}else{
			id = 'about';
		}
	}else{
		id = 'contact';
	}

	var pageid = (id==='') ? 'home' : id;
	animateNavPage(id);
}
