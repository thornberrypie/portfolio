var startPage = 'home';
var navPos = {'nav-home':27, 'nav-work':95, 'nav-about':166, 'nav-contact':248};
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
var numPlayers = 20;
var playerWidth = 350;

$(document).ready(function(){
	//Preload images for "work" section
	var thumbs = new Image(); thumbs.src = '/images/thumbs-169x133.jpg';
	var sites1 = new Image(); sites1.src = '/images/websites1y515.jpg';
	var sites2 = new Image(); sites2.src = '/images/websites2y515.jpg';
	var sites3 = new Image(); sites3.src = '/images/websites3y515.jpg';

	//Set up acronyms for home section
	setUpPage();

	//Set up navigation slider
	$('#nav-slider').slider({
		min: 0,
		max: navWidth,
		step: 1,
		value: navPos['nav-'+startPage],
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
		$(this).find('.big').stop().animate({'top':'4px'}, 222);
	});

	//Activate navigation slider and page scrolling when link is clicked
	$('nav ul a').click(function(e){
		e.preventDefault();
		var navActive = $('nav').attr('class');
		var navid = $(this).parents('li').attr('id');
		var pageid = navid.replace('nav-', '');
		animateNavPage(pageid);
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

	//Show random hero guitar link is hovered over
	activateGuitarHover();

	//Run function on resize
	var timeoutid;
	$(window).resize(function() {
		clearTimeout(timeoutid);
		timeoutid = setTimeout(doneResizing, 333);
	});

	if($(window).width() < 480){ console.log($(window).width());
		$('.work li').each(function(){
			$(this).addClass('over');
			animateThumb($(this), 'open');
		});
	}
}); //end $(document).ready(function(){

/*--------------------------Functions------------------------------*/
